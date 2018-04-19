<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'single' ); ?>

  <?php endwhile; ?>
This is the single post file
<?php get_footer(); ?>
