<?php
/* Template Name: Contact */
get_header(); ?>

<section class="page-header">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <p class="page-intro">Have a question or want a custom itinerary? Send us a message and we'll reply within 48 hours.</p>
  </div>
</section>

<div class="container page-grid">
  <main class="content page-content">
    <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    ?>

    <?php
      // Feedback messages after redirect (contact_status)
      $status = isset( $_GET['contact_status'] ) ? sanitize_text_field( wp_unslash( $_GET['contact_status'] ) ) : '';
      if ( $status ) {
        if ( 'success' === $status ) {
          echo '<div class="alert alert-success">Thanks — your message was sent. We will reply soon.</div>';
        } elseif ( 'validation_error' === $status ) {
          echo '<div class="alert alert-warning">Please complete all required fields and provide a valid email address.</div>';
        } elseif ( 'invalid_nonce' === $status ) {
          echo '<div class="alert alert-error">Security check failed. Please reload the page and try again.</div>';
        } else {
          echo '<div class="alert alert-error">There was an error sending your message. Please try again later.</div>';
        }
      }

    ?>

    <section class="contact-form">
      <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
        <?php wp_nonce_field('elite_path_contact','elite_path_nonce'); ?>
        <input type="hidden" name="action" value="elite_path_contact">

        <div class="row">
          <div class="field">
            <label for="cp-name">Name</label>
            <input id="cp-name" type="text" name="name" required>
          </div>

          <div class="field">
            <label for="cp-email">Email</label>
            <input id="cp-email" type="email" name="email" required>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label for="cp-phone">Phone</label>
            <input id="cp-phone" type="tel" name="phone">
          </div>

          <div class="field">
            <label for="cp-subject">Subject</label>
            <input id="cp-subject" type="text" name="subject">
          </div>
        </div>

        <div class="field">
          <label for="cp-message">Message</label>
          <textarea id="cp-message" name="message" required></textarea>
        </div>

        <div class="field field-submit">
          <button class="btn btn-primary" type="submit">Send Message</button>
        </div>
      </form>
    </section>
  </main>

  <aside class="sidebar">
    <div class="widget">
      <h3>Contact Details</h3>
      <p>Email: <a href="mailto:hello@elitepath.example">hello@elitepath.example</a></p>
      <p>Phone: <a href="tel:+1234567890">+1 (234) 567-890</a></p>
      <p>Address: 123 Traveler Lane, Suite 5</p>
    </div>
  </aside>
</div>

<?php get_footer(); ?>
