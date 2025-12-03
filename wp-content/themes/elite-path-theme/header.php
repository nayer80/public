<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="topbar">
    <div class="container">
      <div class="topbar-left">
        <span class="helpline-label">Helpline:</span>
        <a href="tel:+97142087112" class="helpline-link">+971 420 87112</a>
      </div>
      <div class="topbar-right">
        <div class="topbar-selectors">
          <!-- Language Selector -->
          <div class="selector-group language-selector">
            <button class="selector-toggle" id="lang-toggle" aria-expanded="false" aria-label="Select Language">
              <span class="selector-label">English</span>
              <span class="selector-icon">▼</span>
            </button>
            <div class="selector-dropdown" id="lang-dropdown">
              <a href="#" class="selector-option active" data-lang="en">English</a>
              <a href="#" class="selector-option" data-lang="ar">العربية</a>
              <a href="#" class="selector-option" data-lang="es">Español</a>
              <a href="#" class="selector-option" data-lang="fr">Français</a>
            </div>
          </div>

          <!-- Currency Selector -->
          <div class="selector-group currency-selector">
            <button class="selector-toggle" id="currency-toggle" aria-expanded="false" aria-label="Select Currency">
              <span class="selector-label">AED</span>
              <span class="selector-icon">▼</span>
            </button>
            <div class="selector-dropdown" id="currency-dropdown">
              <a href="#" class="selector-option active" data-currency="aed">AED - United Arab Emirates Dirham</a>
              <a href="#" class="selector-option" data-currency="usd">USD - United States Dollar</a>
              <a href="#" class="selector-option" data-currency="eur">EUR - Euro</a>
              <a href="#" class="selector-option" data-currency="gbp">GBP - British Pound</a>
              <a href="#" class="selector-option" data-currency="sar">SAR - Saudi Riyal</a>
              <a href="#" class="selector-option" data-currency="kwd">KWD - Kuwaiti Dinar</a>
            </div>
          </div>

          <!-- Help Link -->
          <a href="mailto:online@raynab2b.com" class="topbar-help" title="Contact Support">Help</a>
        </div>

        <div class="topbar-actions">
          <?php
            if ( is_user_logged_in() ) {
              $user = wp_get_current_user();
              echo '<a class="topbar-login" href="' . esc_url( admin_url( 'profile.php' ) ) . '">' . esc_html( $user->display_name ) . '</a>';
            } else {
              echo '<a class="topbar-login" href="' . esc_url( home_url( '/login/' ) ) . '">Login</a>';
            }
          ?>
          <a class="topbar-cart" href="<?php echo esc_url(home_url('/cart/')); ?>" aria-label="Shopping Cart" title="View Cart">🛒</a>
        </div>
      </div>
    </div>
  </div>

  <header class="site-header">
    <div class="container header-inner">
      <div class="site-branding">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elite-path-logo.png" alt="<?php bloginfo('name'); ?>" class="site-logo">
        </a>
      </div>

      <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">☰</button>

      <nav id="primary-menu" class="main-nav" role="navigation">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'menu',
          ));
        ?>
      </nav>

      <div class="header-actions">
        <form class="header-search" action="<?php echo esc_url(home_url('/')); ?>" method="get">
          <label class="screen-reader-text" for="hsearch">Search</label>
          <input id="hsearch" type="text" name="s" placeholder="Search tours, activities...">
        </form>
        <a class="btn btn-primary header-cta" href="#book">Book Now</a>
      </div>
    </div>
  </header>

  <script>
    // Currency and Language Selector Dropdowns
    (function() {
      function setupSelector(toggleId, dropdownId) {
        const toggle = document.getElementById(toggleId);
        const dropdown = document.getElementById(dropdownId);
        if (!toggle || !dropdown) return;

        toggle.addEventListener('click', function(e) {
          e.preventDefault();
          const isExpanded = this.getAttribute('aria-expanded') === 'true';
          this.setAttribute('aria-expanded', !isExpanded);
          dropdown.classList.toggle('active');
        });

        // Close on option click
        dropdown.querySelectorAll('.selector-option').forEach(option => {
          option.addEventListener('click', function(e) {
            e.preventDefault();
            const label = this.textContent.split(' - ')[0];
            toggle.querySelector('.selector-label').textContent = label;
            
            // Remove active class from all options
            dropdown.querySelectorAll('.selector-option').forEach(opt => {
              opt.classList.remove('active');
            });
            
            // Add active class to clicked option
            this.classList.add('active');
            
            // Close dropdown
            toggle.setAttribute('aria-expanded', 'false');
            dropdown.classList.remove('active');
          });
        });
      }

      // Close dropdowns when clicking outside
      document.addEventListener('click', function(e) {
        if (!e.target.closest('.selector-group')) {
          document.querySelectorAll('.selector-toggle').forEach(toggle => {
            toggle.setAttribute('aria-expanded', 'false');
          });
          document.querySelectorAll('.selector-dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
          });
        }
      });

      setupSelector('lang-toggle', 'lang-dropdown');
      setupSelector('currency-toggle', 'currency-dropdown');
    })();
  </script>

```