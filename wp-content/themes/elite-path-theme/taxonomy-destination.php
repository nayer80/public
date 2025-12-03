<?php
/* Taxonomy template for destinations (category-destination or taxonomy-destination) */
get_header(); ?>

<?php 
  $term = get_queried_object();
  $term_desc = term_description();
?>

<section class="page-header">
  <div class="container">
    <h1 class="page-title"><?php echo esc_html( $term->name ); ?></h1>
    <p class="page-intro">Tours and experiences in <?php echo esc_html( $term->name ); ?></p>
  </div>
</section>

<?php if ( ! empty( $term_desc ) ) : ?>
  <section class="section destination-intro">
    <div class="container">
      <div class="intro-text">
        <?php echo wp_kses_post( $term_desc ); ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<div class="container">
  <section class="section">
    <?php if ( have_posts() ) : ?>
      <h2>Available Tours</h2>
      <div class="grid cards-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a class="card-media" href="<?php the_permalink(); ?>" style="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>')"></a>
            <?php endif; ?>
            <div class="card-body">
              <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="card-meta">
                <span><?php echo esc_html( get_post_meta( get_the_ID(), 'tour_duration', true ) ); ?></span> | 
                <span><?php echo esc_html( get_post_meta( get_the_ID(), 'tour_price', true ) ); ?></span>
              </p>
              <p class="card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
              <a class="btn btn-ghost" href="<?php the_permalink(); ?>">View Details</a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <div class="pagination"><?php the_posts_pagination(); ?></div>
    <?php else : ?>
      <p><?php printf( __( 'No tours found for %s.', 'elite-path' ), esc_html( $term->name ) ); ?></p>
    <?php endif; ?>
  </section>
</div>

<?php get_footer(); ?>
