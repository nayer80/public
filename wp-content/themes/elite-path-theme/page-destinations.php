<?php
/* Template Name: Destinations */
get_header(); ?>

<section class="page-header">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <p class="page-intro">Explore our featured destinations and curated experiences.</p>
  </div>
</section>

<div class="container">
  <section class="section">
    <div class="grid cards-grid">
      <?php
        // Example loop: replace with a dynamic term loop as needed
        $featured = array(
          array('title'=>'Dubai','excerpt'=>'City tours, desert safaris, and attractions','image'=>'assets/images/dubai.jpg'),
          array('title'=>'Abu Dhabi','excerpt'=>'Cultural highlights and nature escapes','image'=>'assets/images/abu-dhabi.jpg'),
          array('title'=>'Ras Al Khaimah','excerpt'=>'Adventure and beach-front resorts','image'=>'assets/images/ras-al-khaimah.jpg'),
          array('title'=>'Singapore','excerpt'=>'City tours and family attractions','image'=>'assets/images/singapore.jpg'),
        );

        foreach ( $featured as $dst ) : ?>
          <article class="card">
            <a href="#" class="card-media" style="background-image:url('<?php echo get_template_directory_uri() . '/' . $dst['image']; ?>')"></a>
            <div class="card-body">
              <h3 class="card-title"><?php echo esc_html( $dst['title'] ); ?></h3>
              <p class="card-excerpt"><?php echo esc_html( $dst['excerpt'] ); ?></p>
              <a class="btn btn-ghost" href="#">Explore</a>
            </div>
          </article>
        <?php endforeach; ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>
