<?php
/**
 * Single Visa template
 * Template for displaying single `visa` CPT items with tabbed details and accordion fallback
 */
get_header();
?>

<section class="page-header visa-header">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="visa-hero-image"><?php the_post_thumbnail('large'); ?></div>
    <?php endif; ?>
    <p class="page-intro"><?php echo get_the_excerpt(); ?></p>
  </div>
</section>

<div class="container page-grid">
  <main class="content page-content">
    <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('visa-detail'); ?>>

        <div class="visa-meta">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="visa-thumbnail"><?php the_post_thumbnail('medium'); ?></div>
          <?php endif; ?>
        </div>

        <div class="visa-tabs" id="visaTabs" role="tablist" aria-label="Visa details tabs">
          <ul class="tabs-list">
            <li><button role="tab" aria-selected="true" data-target="#overview">Overview</button></li>
            <li><button role="tab" aria-selected="false" data-target="#requirements">Requirements</button></li>
            <li><button role="tab" aria-selected="false" data-target="#documents">Documents</button></li>
            <li><button role="tab" aria-selected="false" data-target="#fees">Fees</button></li>
            <li><button role="tab" aria-selected="false" data-target="#faq">FAQ</button></li>
            <li><button role="tab" aria-selected="false" data-target="#contact">Contact</button></li>
          </ul>

          <div class="tabs-panels">
            <section id="overview" class="tab-panel" role="tabpanel">
              <h2>Overview</h2>
              <div class="tab-content"><?php the_content(); ?></div>
            </section>

            <section id="requirements" class="tab-panel" role="tabpanel" aria-hidden="true">
              <h2>Requirements</h2>
              <div class="tab-content">
                <?php
                // Try to load a custom field 'visa_requirements' if present, otherwise fallback to placeholder
                $req = get_post_meta( get_the_ID(), 'visa_requirements', true );
                if ( $req ) {
                  echo wp_kses_post( wpautop( $req ) );
                } else {
                  echo '<p>Typical requirements include a valid passport, completed application form, and supporting documents. Add custom content via the <code>visa_requirements</code> custom field.</p>';
                }
                ?>
              </div>
            </section>

            <section id="documents" class="tab-panel" role="tabpanel" aria-hidden="true">
              <h2>Documents</h2>
              <div class="tab-content">
                <?php
                $docs = get_post_meta( get_the_ID(), 'visa_documents', true );
                if ( $docs ) {
                  echo wp_kses_post( wpautop( $docs ) );
                } else {
                  echo '<ul><li>Passport copy</li><li>Passport photo</li><li>Proof of accommodation</li></ul>';
                }
                ?>
              </div>
            </section>

            <section id="fees" class="tab-panel" role="tabpanel" aria-hidden="true">
              <h2>Fees</h2>
              <div class="tab-content">
                <?php
                $fees = get_post_meta( get_the_ID(), 'visa_fees', true );
                if ( $fees ) {
                  echo wp_kses_post( wpautop( $fees ) );
                } else {
                  echo '<p>Processing fees vary by nationality and visa type. Please enquire for a precise quotation.</p>';
                }
                ?>
              </div>
            </section>

            <section id="faq" class="tab-panel" role="tabpanel" aria-hidden="true">
              <h2>FAQ</h2>
              <div class="tab-content">
                <?php
                $faq = get_post_meta( get_the_ID(), 'visa_faq', true );
                if ( $faq ) {
                  echo wp_kses_post( wpautop( $faq ) );
                } else {
                  echo '<p>No FAQs yet. Add them via the <code>visa_faq</code> custom field.</p>';
                }
                ?>
              </div>
            </section>

            <section id="contact" class="tab-panel" role="tabpanel" aria-hidden="true">
              <h2>Contact & Apply</h2>
              <div class="tab-content">
                <p>If you would like assistance with this visa, please <a href="<?php echo esc_url( home_url('/contact/') ); ?>">contact us</a> or call our helpline.</p>
                <a class="btn btn-primary" href="<?php echo esc_url( home_url('/contact/') ); ?>">Request Assistance</a>
              </div>
            </section>

          </div><!-- .tabs-panels -->
        </div><!-- .visa-tabs -->

        <!-- Mobile accordion fallback -->
        <div class="visa-accordion" aria-hidden="true">
          <details open>
            <summary>Overview</summary>
            <div><?php the_content(); ?></div>
          </details>
          <details>
            <summary>Requirements</summary>
            <div><?php echo wp_kses_post( wpautop( get_post_meta( get_the_ID(), 'visa_requirements', true ) ) ); ?></div>
          </details>
          <details>
            <summary>Documents</summary>
            <div><?php echo wp_kses_post( wpautop( get_post_meta( get_the_ID(), 'visa_documents', true ) ) ); ?></div>
          </details>
          <details>
            <summary>Fees</summary>
            <div><?php echo wp_kses_post( wpautop( get_post_meta( get_the_ID(), 'visa_fees', true ) ) ); ?></div>
          </details>
        </div>

      </article>

    <?php endwhile; ?>
  </main>

  <aside class="sidebar">
    <div class="widget">
      <h3>Need Help?</h3>
      <p>Call our visa team: <strong>+971 420 87112</strong></p>
      <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-white">Contact Us</a>
    </div>
  </aside>
</div>

<script>
(function(){
  // Simple tab behaviour
  const tabs = document.querySelectorAll('#visaTabs .tabs-list button');
  const panels = document.querySelectorAll('#visaTabs .tab-panel');
  function activateTab(button){
    tabs.forEach(b => b.setAttribute('aria-selected','false'));
    panels.forEach(p => p.setAttribute('aria-hidden','true'));
    button.setAttribute('aria-selected','true');
    const target = document.querySelector(button.dataset.target);
    if(target) target.setAttribute('aria-hidden','false');
  }
  tabs.forEach((btn, i) => {
    btn.addEventListener('click', () => activateTab(btn));
    // set first panel visible
    if(i === 0) activateTab(btn);
  });
})();
</script>

<?php get_footer(); ?>
