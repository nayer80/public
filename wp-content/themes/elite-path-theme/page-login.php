<?php
/* Template Name: Login/Account */
get_header(); ?>

<section class="page-header login-header">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <p class="page-intro">Sign in to your Elite Path account to manage bookings and access exclusive features</p>
  </div>
</section>

<div class="container">
  <div class="account-container">
    <?php
      // Check if user is already logged in
      if ( is_user_logged_in() ) {
        ?>
        <div class="account-logged-in">
          <div class="alert alert-success">
            <strong>Welcome back, <?php echo esc_html( wp_get_current_user()->display_name ); ?>!</strong>
          </div>
          
          <div class="account-menu">
            <h2>Account Menu</h2>
            <ul>
              <li><a href="<?php echo esc_url( admin_url( 'profile.php' ) ); ?>" class="btn btn-primary btn-sm">Edit Profile</a></li>
              <li><a href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>" class="btn btn-ghost btn-sm">Logout</a></li>
            </ul>
          </div>

          <?php
            // Show page content if it exists
            while ( have_posts() ) : the_post();
              echo '<div class="account-content">';
              the_content();
              echo '</div>';
            endwhile;
          ?>
        </div>
        <?php
      } else {
        // User is NOT logged in - show login form
        
        // Get redirect URL (from URL parameter, referrer, or default to home)
        $redirect_to = '';
        if ( isset( $_GET['redirectTo'] ) ) {
          $redirect_to = esc_url_raw( wp_unslash( $_GET['redirectTo'] ) );
        } elseif ( isset( $_SERVER['HTTP_REFERER'] ) ) {
          $redirect_to = esc_url_raw( wp_unslash( $_SERVER['HTTP_REFERER'] ) );
        } else {
          $redirect_to = home_url();
        }

        // Show feedback messages
        $status = isset( $_GET['login_status'] ) ? sanitize_text_field( wp_unslash( $_GET['login_status'] ) ) : '';
        if ( $status ) {
          if ( 'error' === $status ) {
            echo '<div class="alert alert-error"><strong>Login Failed</strong><br>Invalid username or password. Please try again.</div>';
          } elseif ( 'expired' === $status ) {
            echo '<div class="alert alert-warning"><strong>Session Expired</strong><br>Your login session has expired. Please log in again.</div>';
          }
        }
        ?>

        <div class="login-form-wrapper">
          <h2>Sign In</h2>

          <form id="loginform" class="login-form" method="post" action="<?php echo esc_url( wp_login_url() ); ?>">
            <div class="form-group">
              <label for="user_login" class="form-label">Username or Email <abbr title="required">*</abbr></label>
              <input 
                type="text" 
                name="log" 
                id="user_login" 
                class="form-control" 
                placeholder="Enter your username or email"
                required 
                aria-required="true"
                autofocus
              >
            </div>

            <div class="form-group">
              <label for="user_pass" class="form-label">Password <abbr title="required">*</abbr></label>
              <input 
                type="password" 
                name="pwd" 
                id="user_pass" 
                class="form-control" 
                placeholder="Enter your password"
                required 
                aria-required="true"
              >
            </div>

            <div class="form-group form-remember">
              <label for="rememberme" class="checkbox-label">
                <input type="checkbox" name="rememberme" id="rememberme" value="forever">
                Remember me
              </label>
            </div>

            <?php if ( ! empty( $redirect_to ) ) : ?>
              <input type="hidden" name="redirect_to" value="<?php echo esc_attr( $redirect_to ); ?>">
            <?php endif; ?>

            <button type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary btn-lg btn-block">
              Sign In
            </button>
          </form>

          <div class="login-links">
            <p>
              <a href="<?php echo esc_url( wp_registration_url() ); ?>" class="link-register">
                Create New Account
              </a>
            </p>
            <p>
              <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="link-forgot">
                Forgot Password?
              </a>
            </p>
          </div>
        </div>

        <?php
      }
    ?>
  </div>
</div>

<?php get_footer(); ?>
