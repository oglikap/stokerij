<!-- Header -->
    <div id="header">

      <!-- Inner -->
        <div class="inner">
          <header>
            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="logo" style="width:70%;">
          </header>

          <?php
          $args = array( 'category' => 5, );
          $postslist = get_posts($args);
          foreach( $postslist as $post ) :
            setup_postdata( $post ); ?>
            <br />
            <article>
              <header>
                <h3>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>
              </header>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              <footer>
                <?php the_excerpt(); ?>
              </footer>
            </article>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>

          <footer>
            <a href="#banner" class="scrolly"><i style="font-size:3.5em;" class="fa fa-angle-double-down"></i></a>
          </footer>

        </div><!-- .inner -->

      <!-- Nav -->
        <nav id="nav">
          <?php wp_nav_menu( array( 'theme_location' => 'stokerij-menu', 'menu_class' => '' ) ); ?>
        </nav>

    </div><!-- #header -->
