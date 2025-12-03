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
        <button class="currency-selector-btn" id="currency-selector-open" aria-label="Select Language and Currency">
          <span class="lang-label">English</span>
          <span class="sep">/</span>
          <span class="currency-label">AED</span>
        </button>

        <div class="topbar-actions">
          <a href="mailto:online@raynab2b.com" class="topbar-help" title="Contact Support">Help</a>
          <a class="topbar-cart" href="<?php echo esc_url(home_url('/cart/')); ?>" aria-label="Shopping Cart" title="View Cart">🛒</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Currency & Language Selector Modal -->
  <div class="currency-modal-overlay" id="currency-modal">
    <div class="currency-modal">
      <button class="modal-close" id="currency-modal-close" aria-label="Close">&times;</button>
      
      <div class="modal-content">
        <!-- Languages Column -->
        <div class="modal-column">
          <h2>Languages</h2>
          <div class="languages-grid">
            <button class="lang-option active" data-lang="en">English</button>
            <button class="lang-option" data-lang="ar">العربية</button>
            <button class="lang-option" data-lang="es">Español</button>
            <button class="lang-option" data-lang="fr">Français</button>
            <button class="lang-option" data-lang="de">Deutsch</button>
            <button class="lang-option" data-lang="pt">Português</button>
          </div>
        </div>

        <!-- Currencies Column -->
        <div class="modal-column">
          <h2>Popular Currencies</h2>
          <div class="currencies-grid popular-currencies">
            <button class="currency-option active" data-currency="aed">
              <span class="currency-code">AED</span>
              <span class="currency-name">Arab Emirate Dirham</span>
            </button>
            <button class="currency-option" data-currency="inr">
              <span class="currency-code">INR</span>
              <span class="currency-name">Indian Rupee</span>
            </button>
            <button class="currency-option" data-currency="usd">
              <span class="currency-code">USD</span>
              <span class="currency-name">American Dollar</span>
            </button>
          </div>

          <h3>More Currencies</h3>
          <div class="currencies-grid more-currencies">
            <button class="currency-option" data-currency="amd">
              <span class="currency-code">AMD</span>
              <span class="currency-name">Armenian Dram</span>
            </button>
            <button class="currency-option" data-currency="aud">
              <span class="currency-code">AUD</span>
              <span class="currency-name">Australian Dollar</span>
            </button>
            <button class="currency-option" data-currency="dkk">
              <span class="currency-code">DKK</span>
              <span class="currency-name">Denmark Krona</span>
            </button>
            <button class="currency-option" data-currency="eur">
              <span class="currency-code">EUR</span>
              <span class="currency-name">Euro</span>
            </button>
            <button class="currency-option" data-currency="gbp">
              <span class="currency-code">GBP</span>
              <span class="currency-name">UK Pounds Sterling</span>
            </button>
            <button class="currency-option" data-currency="gel">
              <span class="currency-code">GEL</span>
              <span class="currency-name">Georgian Lari</span>
            </button>
            <button class="currency-option" data-currency="hkd">
              <span class="currency-code">HKD</span>
              <span class="currency-name">Hong Kong Dollar</span>
            </button>
            <button class="currency-option" data-currency="idr">
              <span class="currency-code">IDR</span>
              <span class="currency-name">Indonesian Rupiah</span>
            </button>
            <button class="currency-option" data-currency="jpy">
              <span class="currency-code">JPY</span>
              <span class="currency-name">Japanese Yen</span>
            </button>
            <button class="currency-option" data-currency="kzt">
              <span class="currency-code">KZT</span>
              <span class="currency-name">Kazakhstan Tenge</span>
            </button>
            <button class="currency-option" data-currency="myr">
              <span class="currency-code">MYR</span>
              <span class="currency-name">Malaysian Ringgit Rates</span>
            </button>
            <button class="currency-option" data-currency="omr">
              <span class="currency-code">OMR</span>
              <span class="currency-name">Omani Riyal</span>
            </button>
            <button class="currency-option" data-currency="mur">
              <span class="currency-code">MUR</span>
              <span class="currency-name">Mauritian Rupee</span>
            </button>
            <button class="currency-option" data-currency="sar">
              <span class="currency-code">SAR</span>
              <span class="currency-name">Saudi Arabian Riyal</span>
            </button>
            <button class="currency-option" data-currency="sgd">
              <span class="currency-code">SGD</span>
              <span class="currency-name">Singapore dollar</span>
            </button>
            <button class="currency-option" data-currency="thb">
              <span class="currency-code">THB</span>
              <span class="currency-name">Thai Baht</span>
            </button>
            <button class="currency-option" data-currency="try">
              <span class="currency-code">TRY</span>
              <span class="currency-name">Turkish Lira</span>
            </button>
            <button class="currency-option" data-currency="uzs">
              <span class="currency-code">UZS</span>
              <span class="currency-name">Uzbekistani sum</span>
            </button>
            <button class="currency-option" data-currency="vnd">
              <span class="currency-code">VND</span>
              <span class="currency-name">Vietnamese Dong</span>
            </button>
            <button class="currency-option" data-currency="zar">
              <span class="currency-code">ZAR</span>
              <span class="currency-name">South African Rand</span>
            </button>
          </div>
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
    (function() {
      const modal = document.getElementById('currency-modal');
      const openBtn = document.getElementById('currency-selector-open');
      const closeBtn = document.getElementById('currency-modal-close');
      const langLabel = document.querySelector('.lang-label');
      const currencyLabel = document.querySelector('.currency-label');

      // Open modal
      openBtn?.addEventListener('click', function() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
      });

      // Close modal
      closeBtn?.addEventListener('click', function() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
      });

      // Close on overlay click
      modal?.addEventListener('click', function(e) {
        if (e.target === this) {
          this.classList.remove('active');
          document.body.style.overflow = '';
        }
      });

      // Language selection
      document.querySelectorAll('.lang-option').forEach(btn => {
        btn.addEventListener('click', function() {
          document.querySelectorAll('.lang-option').forEach(b => b.classList.remove('active'));
          this.classList.add('active');
          langLabel.textContent = this.textContent;
        });
      });

      // Currency selection
      document.querySelectorAll('.currency-option').forEach(btn => {
        btn.addEventListener('click', function() {
          document.querySelectorAll('.currency-option').forEach(b => b.classList.remove('active'));
          this.classList.add('active');
          currencyLabel.textContent = this.querySelector('.currency-code').textContent;
        });
      });

      // Close on Escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
          modal.classList.remove('active');
          document.body.style.overflow = '';
        }
      });
    })();
  </script>

```