<?php
/* Template Name: Archive Page Custom */
get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'tmpl_archives' ); ?>

  <?php endwhile; ?>
<?php get_footer(); ?>
