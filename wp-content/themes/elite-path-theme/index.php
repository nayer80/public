<?php get_header(); ?>

  <main id="site-content">
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>">
          <h2><?php the_title(); ?></h2>
          <div><?php the_content(); ?></div>
        </article>
      <?php endwhile; else: ?>
        <p><?php esc_html_e('No content found', 'elite-path'); ?></p>
      <?php endif; ?>
    </div>
  </main>

<?php get_footer(); ?>
