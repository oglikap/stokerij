<?php

# Template name: De jonge stokerij

 get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'jong' ); ?>

  <?php endwhile; ?>
<?php get_footer(); ?>
