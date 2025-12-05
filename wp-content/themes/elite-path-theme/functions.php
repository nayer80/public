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

// Add custom rewrite rule for visas page
function elite_path_rewrite_rules() {
    add_rewrite_rule('^visas/?$', 'index.php?pagename=visas', 'top');
    add_rewrite_rule('^activities/?$', 'index.php?pagename=activities', 'top');
    add_rewrite_rule('^holidays/?$', 'index.php?pagename=holidays', 'top');
    add_rewrite_rule('^cruises/?$', 'index.php?pagename=cruises', 'top');
}
add_action('init', 'elite_path_rewrite_rules');
// Flush rewrite rules on theme activation
function elite_path_flush_rewrite_rules() {
    elite_path_rewrite_rules();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'elite_path_flush_rewrite_rules' );


function elite_path_enqueue_scripts() {
    // Preconnect to Google Fonts for faster font loading
    wp_enqueue_style('preconnect-gf', 'https://fonts.googleapis.com', array(), null);
    wp_enqueue_style('preconnect-gf-gstatic', 'https://fonts.gstatic.com', array(), null);
    
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

    // OWL Carousel (CDN) - with Subresource Integrity hash
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true);
    wp_script_add_data('owl-carousel', 'integrity', 'sha512-D9qIOHBW5tH+d1/byn5V+I+BjgosFfJpLbVYQh7g0ypNz4T/dV/aLlPh6hUqVvJ9ZiODdvl6y5l5xScMnz3Mg==');
    wp_script_add_data('owl-carousel', 'crossorigin', 'anonymous');

    // GSAP (CDN) - with Subresource Integrity hash
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true);
    wp_script_add_data('gsap', 'integrity', 'sha512-16esztaSRplJROstbIIdwksnZADiAqkEJGzDu+KSqwdJ2lMWPhqlMunP2a7F3f3OK8B+NJV2IPhV6oPmFAcrQ==');
    wp_script_add_data('gsap', 'crossorigin', 'anonymous');

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
    $to = elite_path_get_recipient_email();
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
            'image'        => 'dubai.svg',
        ),
        array(
            'post_title'   => 'Abu Dhabi Cultural Highlights',
            'post_content' => 'Visit Sheikh Zayed Grand Mosque, Louvre Abu Dhabi, and Qasr Al Watan.',
            'tour_price'   => 'AED 250',
            'tour_duration'=> '8 hours',
            'tour_subtitle' => 'A cultural journey in the UAE capital',
            'image'        => 'abu-dhabi.svg',
        ),
        array(
            'post_title'   => 'Ras Al Khaimah Adventure Day',
            'post_content' => 'Desert safari, dune bashing, and authentic local experiences.',
            'tour_price'   => 'AED 199',
            'tour_duration'=> 'Half day',
            'tour_subtitle' => 'Adrenaline and culture in RAK',
            'image'        => 'ras-al-khaimah.svg',
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

            // Attach featured image if it exists
            if ( ! empty( $s['image'] ) ) {
                $image_path = get_template_directory() . '/assets/images/' . $s['image'];
                if ( file_exists( $image_path ) ) {
                    $attachment_id = elite_path_attach_image_to_post( $post_id, $image_path, $s['post_title'] );
                    if ( $attachment_id ) {
                        set_post_thumbnail( $post_id, $attachment_id );
                    }
                }
            }
        }
    }

    // Ensure rewrite rules include the new CPT archive
    flush_rewrite_rules();
    return true;
}

/**
 * Helper to attach an image file to a post and return the attachment ID
 */
function elite_path_attach_image_to_post( $post_id, $image_path, $title = '' ) {
    if ( ! function_exists( 'wp_insert_attachment' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/image.php' );
    }

    $filename = basename( $image_path );
    $filetype = wp_check_filetype( $filename, null );

    $attachment = array(
        'post_mime_type' => $filetype['type'],
        'post_title'     => $title ?: $filename,
        'post_content'   => '',
        'post_status'    => 'inherit'
    );

    $attach_id = wp_insert_attachment( $attachment, $image_path, $post_id );

    if ( ! is_wp_error( $attach_id ) ) {
        wp_generate_attachment_metadata( $attach_id, $image_path );
    }

    return $attach_id;
}

function elite_path_create_sample_tours( $old_name, $old_theme = null ) {
    elite_path_insert_sample_tours();
}
// Note: This hook is now replaced by elite_path_on_activation to also show the admin notice
// add_action( 'after_switch_theme', 'elite_path_create_sample_tours', 10, 2 );

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
 * Admin notice to guide users to settings after theme activation
 */
function elite_path_admin_notice() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    // Show notice if 'elite_path_settings_notice' transient exists (set on activation)
    if ( get_transient( 'elite_path_settings_notice' ) ) {
        delete_transient( 'elite_path_settings_notice' );
        $settings_url = admin_url( 'themes.php?page=elite-path-settings' );
        ?>
        <div class="notice notice-info is-dismissible">
            <p>
                <strong>Elite Path Theme Activated!</strong><br>
                Visit <a href="<?php echo esc_url( $settings_url ); ?>">Elite Path Settings</a> to configure your contact email, create sample tours, and customize other options.
            </p>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'elite_path_admin_notice' );

/**
 * Set transient on theme activation to trigger the admin notice
 */
function elite_path_on_activation( $old_name, $old_theme = null ) {
    set_transient( 'elite_path_settings_notice', 1, HOUR_IN_SECONDS );
    elite_path_create_sample_tours( $old_name, $old_theme );
}
add_action( 'after_switch_theme', 'elite_path_on_activation', 10, 2 );


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

// Filter to remove Visas and Contact menu items from primary menu
add_filter('wp_nav_menu_objects', function($items) {
    return array_filter($items, function($item) {
        // Remove items with visas or contact in the URL
        if (strpos($item->url, '/visas') !== false || strpos($item->url, '/contact') !== false) {
            return false;
        }
        return true;
    });
}, 10, 1);


