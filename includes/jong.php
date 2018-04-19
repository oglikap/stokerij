<?php $args = array('category' => '7, -9', 'order' => 'ASC');
$postslist = get_posts( $args );
foreach ($postslist as $post) :
  setup_postdata( $post );
 ?>

 <header>
   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
   <p style="font-variant:all-small-caps">
     <?php the_excerpt(); ?>
   </p>
 </header>
 <?php the_content(); ?>
 <hr />
<?php
wp_reset_postdata();
endforeach; ?>
