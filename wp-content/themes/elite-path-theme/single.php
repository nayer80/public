<?php
/* Single post/article template */
get_header(); ?>

<div class="container">
  <div class="page-grid">
    <main class="page-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          
          <!-- Article Hero Image -->
          <?php if ( has_post_thumbnail() ) : ?>
            <section class="article-hero" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>')">
              <div class="article-hero-overlay"></div>
            </section>
          <?php endif; ?>

          <!-- Article Meta (top) -->
          <div class="article-meta">
            <div class="meta-item">
              <span class="label">By</span>
              <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                <?php the_author(); ?>
              </a>
            </div>
            <div class="meta-item">
              <span class="label">Published</span>
              <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                <?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
              </time>
            </div>
            <?php if ( has_category() ) : ?>
              <div class="meta-item">
                <span class="label">Category</span>
                <?php the_category( ', ' ); ?>
              </div>
            <?php endif; ?>
          </div>

          <!-- Article Title -->
          <h1 class="article-title"><?php the_title(); ?></h1>

          <!-- Article Content -->
          <div class="article-content">
            <?php the_content(); ?>
          </div>

          <!-- Article Footer Meta -->
          <div class="article-footer-meta">
            <?php if ( has_tag() ) : ?>
              <div class="article-tags">
                <strong>Tags:</strong>
                <?php the_tags( '', ', ' ); ?>
              </div>
            <?php endif; ?>
          </div>

        </article>

        <!-- Comments Section -->
        <section class="comments-section">
          <?php comments_template(); ?>
        </section>

        <!-- Post Navigation -->
        <nav class="post-navigation">
          <div class="nav-previous">
            <?php previous_post_link( '%link', '← Previous Post' ); ?>
          </div>
          <div class="nav-next">
            <?php next_post_link( '%link', 'Next Post →' ); ?>
          </div>
        </nav>

      <?php endwhile; ?>
    </main>

    <!-- Sidebar -->
    <aside class="page-sidebar">
      <?php
        if ( is_active_sidebar( 'primary-sidebar' ) ) {
          dynamic_sidebar( 'primary-sidebar' );
        } else {
          // Fallback: Show related posts
          $related_args = array(
            'posts_per_page' => 3,
            'post__not_in'   => array( get_the_ID() ),
            'orderby'        => 'date',
            'order'          => 'DESC',
          );
          $related = get_posts( $related_args );
          if ( $related ) {
            echo '<div class="widget widget-related-posts">';
            echo '<h3 class="widget-title">Related Posts</h3>';
            echo '<ul>';
            foreach ( $related as $post_item ) {
              echo '<li><a href="' . esc_url( get_permalink( $post_item->ID ) ) . '">' . esc_html( $post_item->post_title ) . '</a></li>';
            }
            echo '</ul>';
            echo '</div>';
          }
        }
      ?>
    </aside>
  </div>
</div>

<?php get_footer(); ?>
