<section class="wrapper style1">
  <div class="container">
    <article id="main" class="special">
      <header>
        <h2><?php the_title(); ?></h2>
      </header>
      <span class="image featured">
        <?php the_post_thumbnail('landscape'); ?>
      </span>
        <?php the_content(); ?>
        <section class="gallery">
          <?php
          $images = get_field('gallery');

          if( $images ): ?>
            <ul>
              <?php foreach( $images as $image ): ?>
                <li>
                  <a href="<?php echo $image['url']; ?>">
                    <img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </a>
                  <p><small><?php echo $image['caption']; ?></small></p>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </section>

      <footer>
        <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
      </footer>
    </article><!-- #main -->
  </div><!-- .container -->
</section>
