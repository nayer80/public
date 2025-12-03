<?php
/* Search results template - displays tours and posts with sidebar filters */
get_header(); ?>

<section class="page-header">
  <div class="container">
    <h1 class="page-title">Search Results</h1>
    <p class="page-intro"><?php printf( __( 'Results for: <strong>%s</strong>', 'elite-path' ), get_search_query() ); ?></p>
  </div>
</section>

<div class="container page-grid">
  <main class="content page-content">
    <?php if ( have_posts() ) : ?>
      <div class="grid cards-grid">
        <?php while ( have_posts() ) : the_post(); 
          $post_type = get_post_type();
          $is_tour = ( 'tour' === $post_type );
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a class="card-media" href="<?php the_permalink(); ?>" style="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>')"></a>
            <?php endif; ?>
            <div class="card-body">
              <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php if ( $is_tour ) : ?>
                <p class="card-meta">
                  <span><?php echo esc_html( get_post_meta( get_the_ID(), 'tour_duration', true ) ); ?></span> | 
                  <span><?php echo esc_html( get_post_meta( get_the_ID(), 'tour_price', true ) ); ?></span>
                </p>
              <?php endif; ?>
              <p class="card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
              <a class="btn btn-ghost" href="<?php the_permalink(); ?>">Learn More</a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <div class="pagination"><?php the_posts_pagination(); ?></div>
    <?php else : ?>
      <p><?php _e( 'No results found. Try a different search term.', 'elite-path' ); ?></p>
    <?php endif; ?>
  </main>

  <aside class="sidebar">
    <div class="widget widget-search">
      <h4>Refine Search</h4>
      <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-filter">
        <input type="hidden" name="s" value="<?php echo get_search_query(); ?>">
        <div class="filter-group">
          <label>Post Type</label>
          <select name="post_type">
            <option value="">All</option>
            <option value="tour" <?php selected( get_query_var( 'post_type' ), 'tour' ); ?>>Tours</option>
            <option value="post" <?php selected( get_query_var( 'post_type' ), 'post' ); ?>>Articles</option>
          </select>
        </div>

        <?php
          // Category filter
          $categories = get_categories( array( 'taxonomy' => 'category', 'hide_empty' => true ) );
          if ( ! empty( $categories ) ) :
        ?>
          <div class="filter-group">
            <label>Category</label>
            <select name="cat">
              <option value="">All</option>
              <?php foreach ( $categories as $cat ) : ?>
                <option value="<?php echo esc_attr( $cat->term_id ); ?>" <?php selected( get_query_var( 'cat' ), $cat->term_id ); ?>>
                  <?php echo esc_html( $cat->name ); ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">Filter</button>
      </form>
    </div>

    <div class="widget widget-info">
      <h4>Search Tips</h4>
      <ul>
        <li>Use specific keywords (e.g., "Dubai," "desert safari")</li>
        <li>Filter by post type or category for better results</li>
        <li>Check tour duration and price to narrow down options</li>
      </ul>
    </div>
  </aside>
</div>

<?php get_footer(); ?>
