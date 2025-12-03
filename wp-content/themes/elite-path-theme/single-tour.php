<?php
/* Single template for Tour post type */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="tour-hero" style="background-image:url('<?php echo get_the_post_thumbnail_url(null,'large'); ?>')">
    <div class="tour-hero-overlay"></div>
    <div class="container">
      <h1 class="page-title"><?php the_title(); ?></h1>
      <p class="page-intro"><?php echo get_post_meta( get_the_ID(), 'tour_subtitle', true ); ?></p>
    </div>
  </section>

  <div class="container page-grid">
    <main class="content page-content">
      <article class="tour-detail">
        <div class="tour-meta">
          <span class="meta-duration"><?php echo esc_html( get_post_meta( get_the_ID(), 'tour_duration', true ) ); ?></span>
          <span class="meta-price"><?php echo esc_html( get_post_meta( get_the_ID(), 'tour_price', true ) ); ?></span>
        </div>
        <div class="tour-content"><?php the_content(); ?></div>
      </article>
    </main>

    <aside class="sidebar">
      <div class="widget">
        <h4>Book this tour</h4>
        <p>From <strong><?php echo esc_html( get_post_meta( get_the_ID(), 'tour_price', true ) ); ?></strong></p>
        <a class="btn btn-primary" href="#book">Request Booking</a>
      </div>
    </aside>
  </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
