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
      <div class="topbar-left">Call us: <a href="tel:+123456789">+1 234 567 89</a></div>
      <div class="topbar-right">
        <a href="#">Login</a>
        <span class="sep">|</span>
        <a href="#">Contact</a>
      </div>
    </div>
  </div>

  <header class="site-header">
    <div class="container header-inner">
      <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elite-path-logo.png" alt="<?php bloginfo('name'); ?>" class="site-logo">
      </a>

      <button class="menu-toggle" aria-expanded="false">☰</button>

      <nav class="main-nav">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'menu',
          ));
        ?>
      </nav>

      <div class="header-cta">
        <a class="btn btn-primary" href="#book">Book Now</a>
      </div>
    </div>
  </header>
