<?php
/* Archive template for Tours (post type: tour) */
get_header(); ?>

<section class="page-header">
  <div class="container">
    <h1 class="page-title">Tours</h1>
    <p class="page-intro">Browse our tours — filter by destination, duration, and price.</p>
  </div>
</section>

<div class="container">
  <section class="section">
    <?php if ( have_posts() ) : ?>
      <div class="grid cards-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a class="card-media" href="<?php the_permalink(); ?>" style="background-image:url('<?php the_post_thumbnail_url('large'); ?>')"></a>
            <?php endif; ?>
            <div class="card-body">
              <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
              <a class="btn btn-ghost" href="<?php the_permalink(); ?>">View Details</a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <div class="pagination"><?php the_posts_pagination(); ?></div>
    <?php else : ?>
      <p>No tours found.</p>
    <?php endif; ?>
  </section>
</div>

<?php get_footer(); ?>
