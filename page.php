<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page' ); ?>

  <?php endwhile; ?>
This is the page file
<?php get_footer(); ?>
