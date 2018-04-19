<?php get_header(); ?>

  <?php if( have_posts() ) : ?>

<section class="wrapper">

  <div class="container">

    <article id="main" class="special">

      <?php if( ! is_paged() ) {
        echo wpautop( term_description() );
      } ?>

      <hr />

      <?php while ( have_posts() ) : the_post(); ?>

      <?php endwhile; endif; ?>

      <?php include( get_template_directory() . '/includes/jong.php' ); ?>

    </article>

  </div>

</section>

<?php get_footer(); ?>
