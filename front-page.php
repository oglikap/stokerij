<!DOCTYPE HTML>
<!--
	Helios by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<!--		<link rel="stylesheet" href="assets/css/main.css" />-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <?php wp_head(); ?>
	</head>
	<body class="homepage" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/body-bg2.jpg);background-attachment:fixed;">
		<div id="page-wrapper">

			<!-- Header -->

      <?php while( have_posts() ): the_post(); ?>

        <?php get_template_part( 'home-templates/content', 'header' ); ?>
        <?php get_template_part( 'home-templates/content', 'carousel_prod' ); ?>



			<!-- Main -->
				<div class="wrapper style2">

					<article id="main" class="container special">
<!--						<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>-->
						<header>
							<h2>Twitter</h2>
						</header>

						<?php if( have_rows('blocks') ): ?>
							<?php while( have_rows('blocks') ): the_row(); ?>

								<?php if( get_sub_field('twitter') ): the_sub_field('twitter'); endif; ?>

							<?php endwhile; endif; ?>

							<!-- N E W S -->
							<?php
							// The Query
							$exec_query = new WP_Query( array (
								'post_type' => 'news',
								'posts_per_page' => 6
							) );

							// The Loop
							if( $exec_query->have_posts() ) { ?>

								<header>
									<h2>Nieuws</h2>
								</header>

								<div class="carousel">

									<?php while( $exec_query->have_posts() ): $exec_query->the_post(); ?>

										<div class="reel">

											<article>
												<header>
													<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
												</header>
												<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('square'); ?></a>
												<?php the_excerpt(); ?>
											</article>

										<?php endwhile; ?>

										</div>

								</div>

								<?php wp_reset_postdata(); } ?>




						<!--<footer>
							<a href="#" class="button">Continue Reading</a>
						</footer>-->
					</article>

				</div>

			<!-- Features -->
				<!--<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2>Morbi ullamcorper et varius leo lacus</h2>
							<p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
						</header>
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Gravida aliquam penatibus</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Sed quis rhoncus placerat</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Magna laoreet et aliquam</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
						</div>
					</section>

				</div>-->
      <?php endwhile; ?>
				<div id="footer">
					<div class="container">

						<?php
						if ( is_active_sidebar( 'sidebar-2' ) ||
							 is_active_sidebar( 'sidebar-3' ) ) :
						?>

							<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
								<?php
								if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
									<div class="widget-column footer-widget-1">
										<?php dynamic_sidebar( 'sidebar-2' ); ?>
									</div>
								<?php }
								if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
									<div class="widget-column footer-widget-2">
										<?php dynamic_sidebar( 'sidebar-3' ); ?>
									</div>
								<?php } ?>
							</aside><!-- .widget-area -->

						<?php endif; ?>



						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<hr />
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<!--<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>-->
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li><?php echo date('Y') . '' ;?> &copy; De Stokerij Schiedam.</li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div><!-- Footer -->

		</div><!-- page-wrapper -->

		<!-- Scripts -->

			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->

      <?php wp_footer(); ?>
	</body>
</html>
