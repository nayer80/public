<?php
// USA Visa template removed per user request.
// This file previously contained the USA Visa page template and has been cleared.
status_header( 404 );
nocache_headers();
?><!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Not Found</title>
  </head>
  <body>
    <h1>Not Found</h1>
    <p>This page has been removed.</p>
  </body>
</html>
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
