<section class="wrapper style1">
  <div class="container">
    <article id="main" class="special">
      <header>
        <h2><?php the_title(); ?></h2>
      </header>
      <?php the_content(); ?>
      <span class="image featured">
        <?php the_post_thumbnail('landscape'); ?>
      </span>

      <footer>
        <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
      </footer>
    </article><!-- #main -->
  </div><!-- .container -->
</section>
