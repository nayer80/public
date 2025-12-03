<?php
/* Visa Services page template */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <!-- Page Header -->
  <section class="page-header visa-header">
    <div class="container">
      <h1 class="page-title">Visa Services</h1>
      <p class="page-intro">Simplify your travel with our comprehensive visa assistance for destinations worldwide</p>
    </div>
  </section>

  <div class="container">
    <div class="page-grid">
      <main class="page-content">

        <!-- Visa Finder Section -->
        <section class="section visa-finder-section">
          <div class="visa-finder">
            <h2>Find Your Visa Requirements</h2>
            <p class="visa-finder-intro">Select your passport country and destination to discover visa requirements and processing times</p>
            
            <form class="visa-finder" method="GET" action="#" aria-label="Visa Requirements Finder">
              <div class="visa-finder-row">
                <div class="visa-finder-field">
                  <label for="passport_country">Your Passport Country <abbr title="required">*</abbr></label>
                  <select id="passport_country" name="passport_country" required aria-required="true">
                    <option value="">-- Select Country --</option>
                    <option value="UAE">United Arab Emirates</option>
                    <option value="Saudi">Saudi Arabia</option>
                    <option value="Egypt">Egypt</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Philippines">Philippines</option>
                    <option value="UK">United Kingdom</option>
                    <option value="USA">United States</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                  </select>
                </div>

                <div class="visa-finder-field">
                  <label for="destination_country">Destination Country <abbr title="required">*</abbr></label>
                  <select id="destination_country" name="destination_country" required aria-required="true">
                    <option value="">-- Select Country --</option>
                    <option value="Dubai">Dubai (UAE)</option>
                    <option value="Riyadh">Riyadh (Saudi Arabia)</option>
                    <option value="Cairo">Cairo (Egypt)</option>
                    <option value="London">London (United Kingdom)</option>
                    <option value="New York">New York (USA)</option>
                    <option value="Sydney">Sydney (Australia)</option>
                    <option value="Bangkok">Bangkok (Thailand)</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Tokyo">Tokyo (Japan)</option>
                    <option value="Paris">Paris (France)</option>
                  </select>
                </div>
              </div>

              <div class="visa-finder-actions">
                <button type="submit" class="btn btn-primary btn-lg">Check Requirements</button>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-ghost btn-lg">Need Help?</a>
              </div>
            </form>
          </div>
        </section>

        <!-- Destination Grid Section -->
        <section class="section visa-destinations-section">
          <div class="block-header">
            <h2>Popular Visa Destinations</h2>
            <p>Explore visa requirements for the most sought-after travel destinations</p>
          </div>

          <div class="visa-destination-grid">
            <div class="visa-destination-card">
              <div class="card-flag">🇦🇪</div>
              <h3 class="card-title">Dubai, UAE</h3>
              <div class="card-difficulty">
                <span class="difficulty-badge easy">Easy</span>
              </div>
              <ul class="card-info">
                <li><strong>Processing Time:</strong> 5-7 days</li>
                <li><strong>Validity:</strong> 30-90 days</li>
                <li><strong>Required:</strong> Valid passport, hotel booking</li>
              </ul>
              <a href="#" class="btn btn-ghost btn-sm">Learn More</a>
            </div>

            <div class="visa-destination-card">
              <div class="card-flag">🇸🇦</div>
              <h3 class="card-title">Riyadh, Saudi Arabia</h3>
              <div class="card-difficulty">
                <span class="difficulty-badge moderate">Moderate</span>
              </div>
              <ul class="card-info">
                <li><strong>Processing Time:</strong> 10-14 days</li>
                <li><strong>Validity:</strong> 30 days</li>
                <li><strong>Required:</strong> Passport, sponsor letter</li>
              </ul>
              <a href="#" class="btn btn-ghost btn-sm">Learn More</a>
            </div>

            <div class="visa-destination-card">
              <div class="card-flag">🇬🇧</div>
              <h3 class="card-title">London, UK</h3>
              <div class="card-difficulty">
                <span class="difficulty-badge hard">Challenging</span>
              </div>
              <ul class="card-info">
                <li><strong>Processing Time:</strong> 15-30 days</li>
                <li><strong>Validity:</strong> 6 months - 2 years</li>
                <li><strong>Required:</strong> Passport, bank statements, proof of funds</li>
              </ul>
              <a href="#" class="btn btn-ghost btn-sm">Learn More</a>
            </div>

            <div class="visa-destination-card">
              <div class="card-flag">🇺🇸</div>
              <h3 class="card-title">New York, USA</h3>
              <div class="card-difficulty">
                <span class="difficulty-badge hard">Challenging</span>
              </div>
              <ul class="card-info">
                <li><strong>Processing Time:</strong> 20-45 days</li>
                <li><strong>Validity:</strong> 6 months - 10 years</li>
                <li><strong>Required:</strong> Passport, financial docs, interview</li>
              </ul>
              <a href="#" class="btn btn-ghost btn-sm">Learn More</a>
            </div>

            <div class="visa-destination-card">
              <div class="card-flag">🇹🇭</div>
              <h3 class="card-title">Bangkok, Thailand</h3>
              <div class="card-difficulty">
                <span class="difficulty-badge easy">Easy</span>
              </div>
              <ul class="card-info">
                <li><strong>Processing Time:</strong> 3-5 days</li>
                <li><strong>Validity:</strong> 60 days</li>
                <li><strong>Required:</strong> Valid passport, passport photo</li>
              </ul>
              <a href="#" class="btn btn-ghost btn-sm">Learn More</a>
            </div>

            <div class="visa-destination-card">
              <div class="card-flag">🇸🇬</div>
              <h3 class="card-title">Singapore</h3>
              <div class="card-difficulty">
                <span class="difficulty-badge moderate">Moderate</span>
              </div>
              <ul class="card-info">
                <li><strong>Processing Time:</strong> 5-10 days</li>
                <li><strong>Validity:</strong> 30 days</li>
                <li><strong>Required:</strong> Passport, hotel booking, ITR</li>
              </ul>
              <a href="#" class="btn btn-ghost btn-sm">Learn More</a>
            </div>
          </div>
        </section>

        <!-- Visa Process Section -->
        <section class="section visa-process-section">
          <div class="block-header">
            <h2>Our Visa Process</h2>
            <p>How we simplify your visa journey in 4 easy steps</p>
          </div>

          <div class="visa-process-steps">
            <div class="visa-process-step">
              <div class="step-number">1</div>
              <h3>Consultation</h3>
              <p>We review your passport, travel dates, and destination to determine visa requirements and processing time.</p>
            </div>

            <div class="visa-process-step">
              <div class="step-number">2</div>
              <h3>Document Preparation</h3>
              <p>We guide you through gathering all required documents and ensure everything is complete and accurate.</p>
            </div>

            <div class="visa-process-step">
              <div class="step-number">3</div>
              <h3>Application Submission</h3>
              <p>We submit your application to the embassy or consulate on your behalf and track its progress.</p>
            </div>

            <div class="visa-process-step">
              <div class="step-number">4</div>
              <h3>Delivery & Support</h3>
              <p>Once approved, we deliver your visa and provide travel tips to ensure a smooth journey.</p>
            </div>
          </div>
        </section>

        <!-- FAQ Section -->
        <section class="section visa-faq-section">
          <div class="block-header">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions about our visa services</p>
          </div>

          <div class="visa-faq">
            <div class="visa-info-block">
              <h3 class="faq-question">How long does visa processing typically take?</h3>
              <p class="faq-answer">Processing times vary by destination and visa type, typically ranging from 3-45 days. We provide estimated timelines after reviewing your specific requirements. Standard processing: 10-20 days. Expedited options available for an additional fee.</p>
            </div>

            <div class="visa-info-block">
              <h3 class="faq-question">What documents do I need to apply for a visa?</h3>
              <p class="faq-answer">Required documents vary by country and visa type. Generally, you'll need: valid passport, completed visa application form, passport-sized photos, proof of financial means, travel itinerary, accommodation booking, and travel insurance. We'll provide a complete checklist specific to your destination.</p>
            </div>

            <div class="visa-info-block">
              <h3 class="faq-question">Can you guarantee visa approval?</h3>
              <p class="faq-answer">While we cannot guarantee approval, our expert team ensures your application is complete, accurate, and meets all requirements. Our success rate exceeds 95% for properly prepared applications. We also assist with appeals if needed.</p>
            </div>

            <div class="visa-info-block">
              <h3 class="faq-question">Do you offer rush processing?</h3>
              <p class="faq-answer">Yes! For urgent travel, we offer expedited processing services with faster turnaround times. Rush fees apply depending on the destination and timeline. Contact our team for availability and pricing on rush services.</p>
            </div>

            <div class="visa-info-block">
              <h3 class="faq-question">What if my visa application is rejected?</h3>
              <p class="faq-answer">We analyze the rejection reason and work with you to address concerns. Many rejections can be resolved with additional documentation or reapplication. We offer a rejection assistance program at no extra cost.</p>
            </div>

            <div class="visa-info-block">
              <h3 class="faq-question">Can you apply for visas on behalf of minors?</h3>
              <p class="faq-answer">Yes, we can assist with minor visa applications. Parents/guardians must provide consent and additional documentation. We handle all special requirements for minor applicants to ensure smooth processing.</p>
            </div>
          </div>
        </section>

        <!-- CTA Section -->
        <section class="visa-cta-section">
          <div class="cta-content">
            <h2>Ready to Simplify Your Visa Process?</h2>
            <p>Let Elite Path handle your visa requirements while you focus on planning your adventure</p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">Start Your Application</a>
          </div>
        </section>

      </main>

      <!-- Sidebar -->
      <aside class="page-sidebar">
        <?php
          if ( is_active_sidebar( 'primary-sidebar' ) ) {
            dynamic_sidebar( 'primary-sidebar' );
          } else {
            // Fallback: Quick Help Widget
            echo '<div class="widget widget-visa-help">';
            echo '<h3 class="widget-title">Quick Help</h3>';
            echo '<ul>';
            echo '<li><strong>Processing Times:</strong> 5-45 days depending on destination</li>';
            echo '<li><strong>Document Check:</strong> We verify all documents before submission</li>';
            echo '<li><strong>24/7 Support:</strong> Track your application anytime</li>';
            echo '<li><strong>Success Rate:</strong> 95%+ approval rate</li>';
            echo '</ul>';
            echo '<a href="' . esc_url( home_url( '/contact' ) ) . '" class="btn btn-primary btn-sm">Contact Us</a>';
            echo '</div>';
          }
        ?>
      </aside>
    </div>
  </div>

<?php endwhile; ?>

<?php get_footer(); ?>
