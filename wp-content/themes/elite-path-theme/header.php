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
      <div class="topbar-left">Helpline: <a href="tel:+97142087112">+971 420 87112</a></div>
      <div class="topbar-right">
        <div class="topbar-links">
          <a href="#">English</a>
          <span class="sep">|</span>
          <a href="#">AED</a>
          <span class="sep">|</span>
          <a href="mailto:online@raynab2b.com">Help</a>
        </div>
        <div class="topbar-actions">
          <a class="topbar-login" href="#">Login</a>
          <a class="topbar-cart" href="#" aria-label="Cart">🛒</a>
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
