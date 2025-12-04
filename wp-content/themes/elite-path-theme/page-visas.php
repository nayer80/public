<?php
/* Visa Services page template - Rayna Tours style */
get_header(); ?>

  <!-- Page Header with Hero -->
  <section class="page-header visas-header">
    <div class="container">
      <h1 class="page-title">International Visas</h1>
      <p class="page-intro">Get your visa hassle-free. Fast, easy, and secure international visa application.</p>
      
      <div class="visas-search">
        <div class="search-field">
          <input type="text" placeholder="Search Visas..." class="search-input">
          <button class="search-btn">🔍</button>
        </div>
      </div>
    </div>
  </section>

  <div class="container visas-container">
    <aside class="visas-sidebar">
      <div class="sidebar-nav">
        <h3>Visa Categories</h3>
        <ul class="category-list">
          <li><a href="#popular" class="category-link active">Popular Visas</a></li>
          <li><a href="#travel-abroad" class="category-link">Travel Visas</a></li>
        </ul>
      </div>

      <div class="sidebar-help">
        <h4>Need Help?</h4>
        <p>Our visa experts are ready to assist you 24/7</p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-sm">Contact Us</a>
      </div>
    </aside>

    <main class="visas-main">

      <!-- Popular Visas Section -->
      <section class="visas-section" id="popular">
        <div class="section-header">
          <h2>Apply for Your eVisa Hassle-Free</h2>
          <p>Skip long queues—apply for your eVisa online effortlessly from anywhere.</p>
        </div>

        <div class="visas-grid">
          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇦🇪</div></div>
            <div class="visa-card-body">
              <span class="visa-badge-new">New</span>
              <h3><a href="#dubai">Dubai Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 5-7 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇸🇦</div></div>
            <div class="visa-card-body">
              <span class="visa-badge-new">New</span>
              <h3><a href="#saudi">Saudi Arabia Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 10-14 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇮🇳</div></div>
            <div class="visa-card-body">
              <span class="visa-badge-new">New</span>
              <h3><a href="#india">India Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 5-10 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇧🇭</div></div>
            <div class="visa-card-body">
              <span class="visa-badge-new">New</span>
              <h3><a href="#bahrain">Bahrain Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 3-5 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇹🇷</div></div>
            <div class="visa-card-body">
              <span class="visa-badge-new">New</span>
              <h3><a href="#turkey">Turkey Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 7-10 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇶🇦</div></div>
            <div class="visa-card-body">
              <span class="visa-badge-new">New</span>
              <h3><a href="#qatar">Qatar Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 5-7 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇹🇭</div></div>
            <div class="visa-card-body">
              <span class="visa-badge-new">New</span>
              <h3><a href="#thailand">Thailand Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 3-5 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇲🇾</div></div>
            <div class="visa-card-body">
              <span class="visa-badge-new">New</span>
              <h3><a href="#malaysia">Malaysia Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 5-7 days</span></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Travel Abroad Section -->
      <section class="visas-section" id="travel-abroad">
        <div class="section-header">
          <h2>Travel Abroad? Apply for Your Visa Today</h2>
          <p>Fast, easy, and secure international visa application</p>
        </div>

        <div class="visas-grid">
          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇺🇸</div></div>
            <div class="visa-card-body">
              <h3><a href="#usa">USA Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 15-30 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇬🇧</div></div>
            <div class="visa-card-body">
              <h3><a href="#uk">UK Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 15-30 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇦🇺</div></div>
            <div class="visa-card-body">
              <h3><a href="#australia">Australia Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 10-15 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇨🇦</div></div>
            <div class="visa-card-body">
              <h3><a href="#canada">Canada Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 15-20 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇨🇳</div></div>
            <div class="visa-card-body">
              <h3><a href="#china">China Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 10-15 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇪🇬</div></div>
            <div class="visa-card-body">
              <h3><a href="#egypt">Egypt Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 5-7 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇪🇺</div></div>
            <div class="visa-card-body">
              <h3><a href="#schengen">Schengen Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 15-30 days</span></div>
            </div>
          </div>

          <div class="visa-card">
            <div class="visa-card-image"><div class="visa-flag">🇭🇰</div></div>
            <div class="visa-card-body">
              <h3><a href="#hong-kong">Hong Kong Visa</a></h3>
              <div class="visa-info"><span class="processing-time">⏱ 5-10 days</span></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Visa CTA Section -->
      <section class="visa-cta-section">
        <h2>Ready to Travel?</h2>
        <p>Get your visa processed quickly and securely. Start your journey today!</p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white">Get Started</a>
      </section>

    </main>
  </div>

<?php get_footer(); ?>
