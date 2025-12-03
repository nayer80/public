<?php
/* About page template with flexible content blocks */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <!-- Page Header -->
  <section class="page-header">
    <div class="container">
      <h1 class="page-title"><?php the_title(); ?></h1>
      <p class="page-intro">Learn more about Elite Path and our passion for travel</p>
    </div>
  </section>

  <!-- Main Content -->
  <div class="container">
    <div class="page-grid">
      <main class="page-content">

        <!-- Hero Section -->
        <?php if ( has_post_thumbnail() ) : ?>
          <section class="about-hero">
            <div class="about-hero-image" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>')"></div>
          </section>
        <?php endif; ?>

        <!-- Mission/Vision Section -->
        <section class="about-block mission-vision">
          <div class="block-header">
            <h2>Our Mission & Vision</h2>
          </div>
          <div class="mission-grid">
            <div class="mission-item">
              <div class="mission-icon">🎯</div>
              <h3>Our Mission</h3>
              <p>To provide exceptional travel experiences that connect people with the world's most beautiful destinations, creating unforgettable memories and fostering cultural understanding through authentic adventures.</p>
            </div>
            <div class="mission-item">
              <div class="mission-icon">🌟</div>
              <h3>Our Vision</h3>
              <p>To be the leading travel company recognized for innovation, sustainability, and personalized service—empowering travelers to explore responsibly while supporting local communities worldwide.</p>
            </div>
          </div>
        </section>

        <!-- Statistics/Counter Section -->
        <section class="about-block stats-section">
          <div class="block-header">
            <h2>By The Numbers</h2>
            <p>Our Impact and Growth</p>
          </div>
          <div class="stats-grid">
            <div class="stat-card">
              <div class="stat-number">25+</div>
              <div class="stat-label">Years of Experience</div>
            </div>
            <div class="stat-card">
              <div class="stat-number">50,000+</div>
              <div class="stat-label">Happy Travelers</div>
            </div>
            <div class="stat-card">
              <div class="stat-number">120+</div>
              <div class="stat-label">Destinations Covered</div>
            </div>
            <div class="stat-card">
              <div class="stat-number">95%</div>
              <div class="stat-label">Customer Satisfaction</div>
            </div>
          </div>
        </section>

        <!-- Story Section -->
        <section class="about-block story-section">
          <div class="block-header">
            <h2>Our Story</h2>
          </div>
          <div class="story-content">
            <?php the_content(); ?>
          </div>
        </section>

        <!-- Team Section -->
        <section class="about-block team-section">
          <div class="block-header">
            <h2>Meet Our Team</h2>
            <p>Dedicated professionals passionate about travel</p>
          </div>
          <div class="team-grid">
            <div class="team-member">
              <div class="member-avatar">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='50' fill='%23cfe9fb'/%3E%3Ccircle cx='50' cy='35' r='15' fill='%23003149'/%3E%3Cpath d='M30 60 Q50 50 70 60 L70 80 Q50 90 30 80 Z' fill='%23003149'/%3E%3C/svg%3E" alt="Team Member" />
              </div>
              <h3 class="member-name">Rayna Hassan</h3>
              <p class="member-role">Founder & CEO</p>
              <p class="member-bio">With 25+ years of travel industry expertise, Rayna founded Elite Path to revolutionize how people experience the world.</p>
            </div>
            <div class="team-member">
              <div class="member-avatar">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='50' fill='%23cfe9fb'/%3E%3Ccircle cx='50' cy='35' r='15' fill='%23003149'/%3E%3Cpath d='M30 60 Q50 50 70 60 L70 80 Q50 90 30 80 Z' fill='%23003149'/%3E%3C/svg%3E" alt="Team Member" />
              </div>
              <h3 class="member-name">Ahmed Al-Mansouri</h3>
              <p class="member-role">Head of Operations</p>
              <p class="member-bio">Ahmed ensures seamless travel experiences with his meticulous attention to detail and deep knowledge of Middle Eastern destinations.</p>
            </div>
            <div class="team-member">
              <div class="member-avatar">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='50' fill='%23cfe9fb'/%3E%3Ccircle cx='50' cy='35' r='15' fill='%23003149'/%3E%3Cpath d='M30 60 Q50 50 70 60 L70 80 Q50 90 30 80 Z' fill='%23003149'/%3E%3C/svg%3E" alt="Team Member" />
              </div>
              <h3 class="member-name">Fatima Al-Noor</h3>
              <p class="member-role">Chief Curator</p>
              <p class="member-bio">Fatima curates unique experiences that showcase the rich culture and natural beauty of our featured destinations.</p>
            </div>
          </div>
        </section>

        <!-- Values Section -->
        <section class="about-block values-section">
          <div class="block-header">
            <h2>Our Core Values</h2>
          </div>
          <div class="values-grid">
            <div class="value-card">
              <div class="value-icon">✈️</div>
              <h3>Excellence</h3>
              <p>We deliver premium travel experiences with attention to every detail.</p>
            </div>
            <div class="value-card">
              <div class="value-icon">🌍</div>
              <h3>Sustainability</h3>
              <p>We protect our destinations for future generations through responsible tourism.</p>
            </div>
            <div class="value-card">
              <div class="value-icon">❤️</div>
              <h3>Community</h3>
              <p>We support local communities and create positive social impact.</p>
            </div>
            <div class="value-card">
              <div class="value-icon">🔒</div>
              <h3>Trust</h3>
              <p>We prioritize transparency and accountability in all our operations.</p>
            </div>
          </div>
        </section>

        <!-- Testimonials Section -->
        <section class="about-block testimonials-section">
          <div class="block-header">
            <h2>What Our Travelers Say</h2>
          </div>
          <div class="testimonials-grid">
            <div class="testimonial-card">
              <div class="testimonial-rating">
                <span class="stars">★★★★★</span>
              </div>
              <p class="testimonial-text">"Elite Path transformed my vacation into an unforgettable adventure. Every detail was perfectly planned!"</p>
              <div class="testimonial-author">
                <strong>Sarah Johnson</strong>
                <span class="testimonial-location">Dubai, UAE</span>
              </div>
            </div>
            <div class="testimonial-card">
              <div class="testimonial-rating">
                <span class="stars">★★★★★</span>
              </div>
              <p class="testimonial-text">"The customer service is outstanding. They went above and beyond to make our family trip special."</p>
              <div class="testimonial-author">
                <strong>Michael Chen</strong>
                <span class="testimonial-location">Singapore</span>
              </div>
            </div>
            <div class="testimonial-card">
              <div class="testimonial-rating">
                <span class="stars">★★★★★</span>
              </div>
              <p class="testimonial-text">"Best travel company I've ever worked with. Highly recommend Elite Path to anyone seeking authentic experiences!"</p>
              <div class="testimonial-author">
                <strong>Emma Rodriguez</strong>
                <span class="testimonial-location">Barcelona, Spain</span>
              </div>
            </div>
          </div>
        </section>

        <!-- CTA Section -->
        <section class="about-block cta-section">
          <div class="cta-content">
            <h2>Ready to Start Your Journey?</h2>
            <p>Let Elite Path create your next unforgettable adventure</p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Get In Touch</a>
          </div>
        </section>

      </main>

      <!-- Sidebar -->
      <aside class="page-sidebar">
        <?php
          if ( is_active_sidebar( 'primary-sidebar' ) ) {
            dynamic_sidebar( 'primary-sidebar' );
          } else {
            // Fallback: Quick Facts
            echo '<div class="widget widget-quick-facts">';
            echo '<h3 class="widget-title">Quick Facts</h3>';
            echo '<ul>';
            echo '<li><strong>Founded:</strong> 2000</li>';
            echo '<li><strong>Headquarters:</strong> Dubai, UAE</li>';
            echo '<li><strong>Team Size:</strong> 150+ professionals</li>';
            echo '<li><strong>Certifications:</strong> ISO 9001, ATTA Member</li>';
            echo '</ul>';
            echo '</div>';
          }
        ?>
      </aside>
    </div>
  </div>

<?php endwhile; ?>

<?php get_footer(); ?>
