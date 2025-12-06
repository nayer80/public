<?php
/* Template Name: USA Visa */
get_header(); ?>

<section class="page-header visa-header">
  <div class="container">
    <h1 class="page-title">USA Visa</h1>
    <p class="page-intro">Everything you need to apply for a USA visa — requirements, processing times, and how we can help.</p>
  </div>
</section>

<div class="container page-grid">
  <main class="content page-content">
    <section class="usa-visa-overview">
      <h2>Overview</h2>
      <p>The United States offers several visa categories including tourist (B-2), business (B-1), student (F-1) and work visas. Processing times and requirements depend on the visa type and your country of residence.</p>

      <h3>Typical Requirements</h3>
      <ul>
        <li>Valid passport with at least 6 months remaining</li>
        <li>Completed application forms</li>
        <li>Passport-sized photos</li>
        <li>Proof of travel itinerary and accommodation</li>
        <li>Supporting documents depending on visa type</li>
      </ul>

      <h3>Processing Time</h3>
      <p>Estimated processing time: 15-30 days (varies by nationality and visa class).</p>

      <h3>Get Help</h3>
      <p>If you'd like assistance with your USA visa application, please <a href="<?php echo esc_url( home_url('/contact/') ); ?>">contact our team</a> or use the button below to start an application.</p>

      <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary">Contact Us</a>
    </section>

  </main>

  <aside class="sidebar">
    <div class="widget">
      <h3>Need Personalized Help?</h3>
      <p>Our specialists can guide you through the process and check your documents before submission.</p>
      <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-white">Request Assistance</a>
    </div>
  </aside>
</div>

<?php get_footer(); ?>
