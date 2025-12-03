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

/**
 * Register 'tour' custom post type
 */
function elite_path_register_tours() {
    $labels = array(
        'name'               => _x( 'Tours', 'post type general name', 'elite-path' ),
        'singular_name'      => _x( 'Tour', 'post type singular name', 'elite-path' ),
        'menu_name'          => _x( 'Tours', 'admin menu', 'elite-path' ),
        'name_admin_bar'     => _x( 'Tour', 'add new on admin bar', 'elite-path' ),
        'add_new'            => _x( 'Add New', 'tour', 'elite-path' ),
        'add_new_item'       => __( 'Add New Tour', 'elite-path' ),
        'new_item'           => __( 'New Tour', 'elite-path' ),
        'edit_item'          => __( 'Edit Tour', 'elite-path' ),
        'view_item'          => __( 'View Tour', 'elite-path' ),
        'all_items'          => __( 'All Tours', 'elite-path' ),
        'search_items'       => __( 'Search Tours', 'elite-path' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'tours' ),
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-palmtree',
    );

    register_post_type( 'tour', $args );
}
add_action( 'init', 'elite_path_register_tours' );

/**
 * Create sample tour posts on theme activation if none exist
 */
/**
 * Insert sample tours programmatically. Safe to call multiple times; will skip if tours exist.
 */
function elite_path_insert_sample_tours() {
    // Check if any tour posts exist
    $count = wp_count_posts( 'tour' );
    if ( $count && $count->publish > 0 ) {
        return false;
    }

    $samples = array(
        array(
            'post_title'   => 'Full Day Explore Dubai City Tour',
            'post_content' => 'Experience the highlights of Dubai including the Burj Khalifa, Dubai Marina, and traditional souks.',
            'tour_price'   => 'AED 175',
            'tour_duration'=> 'Full day',
            'tour_subtitle' => 'Discover Dubai with a local guide',
        ),
        array(
            'post_title'   => 'Abu Dhabi Cultural Highlights',
            'post_content' => 'Visit Sheikh Zayed Grand Mosque, Louvre Abu Dhabi, and Qasr Al Watan.',
            'tour_price'   => 'AED 250',
            'tour_duration'=> '8 hours',
            'tour_subtitle' => 'A cultural journey in the UAE capital',
        ),
        array(
            'post_title'   => 'Ras Al Khaimah Adventure Day',
            'post_content' => 'Desert safari, dune bashing, and authentic local experiences.',
            'tour_price'   => 'AED 199',
            'tour_duration'=> 'Half day',
            'tour_subtitle' => 'Adrenaline and culture in RAK',
        ),
    );

    foreach ( $samples as $s ) {
        $post_id = wp_insert_post( array(
            'post_type'    => 'tour',
            'post_title'   => $s['post_title'],
            'post_content' => $s['post_content'],
            'post_status'  => 'publish',
        ) );

        if ( $post_id && ! is_wp_error( $post_id ) ) {
            update_post_meta( $post_id, 'tour_price', $s['tour_price'] );
            update_post_meta( $post_id, 'tour_duration', $s['tour_duration'] );
            update_post_meta( $post_id, 'tour_subtitle', $s['tour_subtitle'] );
        }
    }

    // Ensure rewrite rules include the new CPT archive
    flush_rewrite_rules();
    return true;
}

function elite_path_create_sample_tours( $old_name, $old_theme = null ) {
    elite_path_insert_sample_tours();
}
add_action( 'after_switch_theme', 'elite_path_create_sample_tours', 10, 2 );

/**
 * Admin settings page to configure theme options (recipient email, sample data)
 */
function elite_path_admin_menu() {
    add_theme_page( 'Elite Path Settings', 'Elite Path Settings', 'manage_options', 'elite-path-settings', 'elite_path_settings_page' );
}
add_action( 'admin_menu', 'elite_path_admin_menu' );

function elite_path_settings_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $message = '';
    // Handle saves
    if ( isset( $_POST['elite_path_settings_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['elite_path_settings_nonce'] ) ), 'elite_path_settings' ) ) {
        if ( isset( $_POST['recipient_email'] ) ) {
            $email = sanitize_email( wp_unslash( $_POST['recipient_email'] ) );
            update_option( 'elite_path_recipient_email', $email );
            $message = 'Settings saved.';
        }

        if ( isset( $_POST['create_samples_now'] ) ) {
            $created = elite_path_insert_sample_tours();
            $message = $created ? 'Sample tours created.' : 'Sample tours already exist or creation skipped.';
        }
    }

    $recipient = get_option( 'elite_path_recipient_email', get_option( 'admin_email' ) );

    ?>
    <div class="wrap">
      <h1>Elite Path Settings</h1>
      <?php if ( $message ) : ?>
        <div id="message" class="updated notice is-dismissible"><p><?php echo esc_html( $message ); ?></p></div>
      <?php endif; ?>

      <form method="post">
        <?php wp_nonce_field( 'elite_path_settings', 'elite_path_settings_nonce' ); ?>
        <table class="form-table">
          <tr>
            <th scope="row"><label for="recipient_email">Contact recipient email</label></th>
            <td><input name="recipient_email" type="email" id="recipient_email" value="<?php echo esc_attr( $recipient ); ?>" class="regular-text"></td>
          </tr>
        </table>

        <p class="submit">
          <input type="submit" name="save" id="save" class="button button-primary" value="Save Settings">
          <input type="submit" name="create_samples_now" id="create_samples_now" class="button" value="Create Sample Tours Now">
        </p>
      </form>
    </div>
    <?php
}

/**
 * Filter to allow the contact handler to use the configured recipient email
 */
function elite_path_get_recipient_email() {
    $opt = get_option( 'elite_path_recipient_email' );
    return $opt ? $opt : get_option( 'admin_email' );
}


/**
 * Admin-only test email endpoint
 * Visit: https://<your-site>/?send_test_email=1 (must be logged in as an admin)
 * This sends a simple test email to `get_option('admin_email')` using `wp_mail()`
 * Useful for verifying local MailHog/SMTP configuration.
 */
add_action( 'init', function() {
    if ( isset( $_GET['send_test_email'] ) && '1' === (string) $_GET['send_test_email'] ) {
        if ( ! is_user_logged_in() || ! current_user_can( 'manage_options' ) ) {
            wp_die( 'You must be logged in as an administrator to run this test.' );
        }

        $to = get_option( 'admin_email' );
        $subject = 'Elite Path — Test Email';
        $body = 'This is a test email sent from the Elite Path theme to verify mail delivery.' . "\n\n" . 'Time: ' . current_time( 'mysql' );
        $headers = array( 'Reply-To: Site Admin <' . $to . '>' );

        $sent = wp_mail( $to, $subject, $body, $headers );

        if ( $sent ) {
            wp_die( 'Test email sent to ' . esc_html( $to ) . '. Check your local MailHog or inbox.' );
        } else {
            wp_die( 'Failed to send test email. Check PHP mail configuration or WP mail settings.' );
        }
    }
} );
