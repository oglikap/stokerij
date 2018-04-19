<?php if( have_rows('row') ): ?>

<section class="wrapper style1">
  <div class="container">

  <?php while( have_rows('row') ): the_row(); ?>

    <article id="main" class="special">
      <header>
        <h2><?php the_title(); ?></h2>
        <p style="font-variant:all-small-caps";><?php if( get_sub_field('subtitle') ): the_sub_field('subtitle'); endif; ?></p>
      </header>
      <?php the_content(); ?>
      <span class="image featured">
        <?php the_post_thumbnail('landscape'); ?>
      </span>

      <?php include( get_template_directory() . '/includes/jong.php' ); ?>

      <footer>
        <p>
          <?php $link = get_sub_field('interest');
          if( $link ): ?>
          BENIEUWD WAT DE JONGE STOKERIJ AL GEDAAN HEEFT? <a href="<?php echo $link['url'];?>"><?php echo $link['title']; ?></a>
        <?php endif; ?>
        </p>
        <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
      </footer>

    <?php endwhile ?><!-- have_rows('row') -->

    </article><!-- #main -->
  </div><!-- .container -->
</section>

<?php endif; ?>
