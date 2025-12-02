<?php
/**
 * Theme functions and enqueue scripts/styles
 */

function elite_path_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'elite-path'),
    ));
}
add_action('after_setup_theme', 'elite_path_setup');

function elite_path_enqueue_scripts() {
    // Google Fonts (Poppins)
    wp_enqueue_style('elite-path-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap', array(), null);

    // Theme stylesheet (style.css)
    wp_enqueue_style('elite-path-style', get_stylesheet_uri(), array(), '1.0');

    // OWL Carousel styles (CDN)
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4');
    wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array('owl-carousel'), '2.3.4');

    // Theme main css
    wp_enqueue_style('elite-path-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');

    // jQuery (built into WP)
    wp_enqueue_script('jquery');

    // OWL Carousel (CDN)
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true);

    // GSAP (CDN)
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true);

    // Theme main JS
    wp_enqueue_script('elite-path-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery','owl-carousel','gsap'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'elite_path_enqueue_scripts');


/**
 * Handle contact form submissions from page-contact.php
 * - Verifies nonce
 * - Sanitizes input
 * - Sends email to site admin
 * - Redirects back with status (success|error)
 */
function elite_path_handle_contact() {
    // Only accept POST
    if ( ! isset( $_POST ) || empty( $_POST ) ) {
        wp_safe_redirect( wp_get_referer() ?: home_url() );
        exit;
    }

    // Verify nonce
    if ( empty( $_POST['elite_path_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['elite_path_nonce'] ) ), 'elite_path_contact' ) ) {
        $redirect = add_query_arg( 'contact_status', 'invalid_nonce', wp_get_referer() ?: home_url() );
        wp_safe_redirect( $redirect );
        exit;
    }

    // Sanitize and collect
    $name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
    $email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
    $subject = isset( $_POST['subject'] ) ? sanitize_text_field( wp_unslash( $_POST['subject'] ) ) : '';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    // Basic validation
    if ( empty( $name ) || empty( $email ) || empty( $message ) || ! is_email( $email ) ) {
        $redirect = add_query_arg( 'contact_status', 'validation_error', wp_get_referer() ?: home_url() );
        wp_safe_redirect( $redirect );
        exit;
    }

    // Prepare email
    $to = get_option( 'admin_email' );
    $email_subject = ! empty( $subject ) ? sprintf( 'Contact form: %s', $subject ) : sprintf( 'Contact form submission from %s', $name );

    $body  = "You have received a new message from the contact form on " . home_url() . "\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    if ( $phone ) {
        $body .= "Phone: " . $phone . "\n";
    }
    if ( $subject ) {
        $body .= "Subject: " . $subject . "\n";
    }
    $body .= "\nMessage:\n" . $message . "\n";

    $headers = array();
    // Set Reply-To so admin can reply directly
    $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';

    // Attempt to send
    $sent = wp_mail( $to, $email_subject, $body, $headers );

    if ( $sent ) {
        $redirect = add_query_arg( 'contact_status', 'success', wp_get_referer() ?: home_url() );
    } else {
        $redirect = add_query_arg( 'contact_status', 'error', wp_get_referer() ?: home_url() );
    }

    wp_safe_redirect( $redirect );
    exit;
}

add_action( 'admin_post_nopriv_elite_path_contact', 'elite_path_handle_contact' );
add_action( 'admin_post_elite_path_contact', 'elite_path_handle_contact' );
