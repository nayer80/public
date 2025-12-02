<?php
/* Template Name: Front Page */
get_header(); ?>

  <section class="hero hero-full" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');">
    <div class="hero-overlay"></div>
    <div class="container hero-inner">
      <div class="hero-left">
        <h1>Travel Curated For You</h1>
        <p>Handcrafted itineraries, local experts, and unforgettable experiences — explore with Elite Path.</p>
        <a class="btn btn-ghost" href="#about">Learn More</a>
      </div>

      <div class="hero-search" id="book">
        <form class="search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
          <div class="field"><label>Destination</label><input type="text" name="s" placeholder="Where do you want to go?"></div>
          <div class="field"><label>Check-in</label><input type="date" name="checkin"></div>
          <div class="field"><label>Guests</label><select name="guests"><option>1</option><option>2</option><option>3</option></select></div>
          <div class="field field-submit"><button class="btn btn-primary" type="submit">Search Tours</button></div>
        </form>
      </div>
    </div>
  </section>

  <section class="section services">
    <div class="container">
      <h2>Our Services</h2>
      <div class="owl-carousel services-carousel">
        <div class="item">Custom Tours</div>
        <div class="item">Group Travel</div>
        <div class="item">Business Travel</div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
