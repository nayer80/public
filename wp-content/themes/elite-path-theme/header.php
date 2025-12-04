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
          <button class="topbar-account-btn" id="account-menu-toggle" aria-label="My Account" title="Account">👤</button>
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

  <!-- Account Menu Sidebar -->
  <div class="account-sidebar-overlay" id="account-sidebar">
    <div class="account-sidebar">
      <button class="sidebar-close" id="account-sidebar-close" aria-label="Close">&times;</button>
      
      <h2>My Account</h2>
      
      <div class="auth-section">
        <p>Already have an account?</p>
        <a href="<?php echo esc_url(home_url('/login/')); ?>" class="btn-login-now">Login Now</a>
      </div>

      <div class="account-section">
        <h3>My Account</h3>
        <ul class="account-menu">
          <li>
            <a href="<?php echo esc_url(home_url('/cart/')); ?>" class="account-link">
              <span class="account-icon">🛒</span>
              <span class="account-label">Cart</span>
              <span class="account-count">0 Item</span>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/bookings/')); ?>" class="account-link">
              <span class="account-icon">📅</span>
              <span class="account-label">My Bookings</span>
              <span class="account-count">0 Item</span>
            </a>
          </li>
          <li class="account-setting">
            <a href="#" class="account-link currency-setting">
              <span class="account-icon">💱</span>
              <span class="account-label">Currency</span>
              <span class="account-value">AED</span>
            </a>
          </li>
          <li class="account-setting">
            <a href="#" class="account-link language-setting">
              <span class="account-icon">🌐</span>
              <span class="account-label">Language</span>
              <span class="account-value">English</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="compliance-section">
        <h3>Compliance</h3>
        <ul class="compliance-menu">
          <li><a href="<?php echo esc_url(home_url('/terms-conditions/')); ?>" class="compliance-link">Terms & Conditions</a></li>
          <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="compliance-link">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="support-section">
        <h3>Help & Support</h3>
        <ul class="support-menu">
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="support-link">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="support-link">Contact Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/faq/')); ?>" class="support-link">FAQ</a></li>
        </ul>
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

    // Account Sidebar Menu
    (function() {
      const accountBtn = document.getElementById('account-menu-toggle');
      const accountSidebar = document.getElementById('account-sidebar');
      const closeSidebarBtn = document.getElementById('account-sidebar-close');

      // Open sidebar
      accountBtn?.addEventListener('click', function() {
        accountSidebar.classList.add('active');
        document.body.style.overflow = 'hidden';
      });

      // Close sidebar
      closeSidebarBtn?.addEventListener('click', function() {
        accountSidebar.classList.remove('active');
        document.body.style.overflow = '';
      });

      // Close on overlay click
      accountSidebar?.addEventListener('click', function(e) {
        if (e.target === this) {
          this.classList.remove('active');
          document.body.style.overflow = '';
        }
      });

      // Close on Escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
          accountSidebar?.classList.remove('active');
          document.body.style.overflow = '';
        }
      });
    })();
  </script>

  <script>
    (function(){
      // Inject SVG icons into primary menu links that match known slugs.
      const iconMap = {
        activities: '<svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>',
        holidays: '<svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M20 8c0 3.3-3.6 6-8 6s-8-2.7-8-6 3.6-6 8-6 8 2.7 8 6zm-8 4.5c2.5 0 4.5-1.1 4.5-2.5S14.5 7.5 12 7.5 7.5 8.6 7.5 10 9.5 12.5 12 12.5zM4 18v2h16v-2c0-1.7-3.6-3-8-3s-8 1.3-8 3z"/></svg>',
        visas: '<svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M12 2a3 3 0 0 0-3 3v1H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-3V5a3 3 0 0 0-3-3zm0 5a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-4 8h8v2H8v-2z"/></svg>',
        cruises: '<svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M2 17c0 1.1.9 2 2 2h16v-2H4c-.6 0-1-.4-1-1 0-2.8 3.6-5 8-5s8 2.2 8 5c0 .6-.4 1-1 1h-1v2h1c1.1 0 2-.9 2-2 0-3.3-4.7-6-10-6S2 13.7 2 17zM6 8h12v2H6V8zm0-4h12v2H6V4z"/></svg>'
      };

      function matchKeyFromHref(href){
        if(!href) return null;
        const h = href.toLowerCase();
        if(h.includes('/activities') || h.includes('activities')) return 'activities';
        if(h.includes('/holidays') || h.includes('holidays')) return 'holidays';
        if(h.includes('/visas') || h.includes('visas')) return 'visas';
        if(h.includes('/cruises') || h.includes('cruises')) return 'cruises';
        return null;
      }

      document.addEventListener('DOMContentLoaded', function(){
        const links = document.querySelectorAll('.main-nav .menu a');
        console.log('Found ' + links.length + ' menu links');
        links.forEach(function(a){
          const href = a.getAttribute('href') || '';
          console.log('Menu link href:', href);
          const key = matchKeyFromHref(href);
          console.log('Matched key:', key);
          if(key && iconMap[key]){
            const span = document.createElement('span');
            span.className = 'menu-icon';
            span.setAttribute('aria-hidden','true');
            span.innerHTML = iconMap[key];
            a.prepend(span);
            a.classList.add('menu-with-icon');
          }
        });
      });
    })();
  </script>

```