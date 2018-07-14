<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<!-- <link rel="stylesheet" type="text/css" href="/wp-content/themes/olympos/css/component.css" /> -->

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<!-- <div id="home-header" class="row">
						<div class="col-sm-12">
							<img src="/wp-content/uploads/2017/02/kw-text-whtie.png" alt="Kathleen Weinstein Photography" width="100%" height="auto">
						</div>
					</div> -->
					<!-- carousel -->
					<div id="carouselExampleIndicators" class="carousel slide homeCarousel" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner" role="listbox">
						    <div class="carousel-item active" style="background-image:url( '<?php the_field('homepage_slider_1', 58); ?>');background-size:100% auto;background-position:0px 13%;">
									<img class="logo-full" src="/wp-content/uploads/2017/02/kw-text-whtie.png" alt="Kathleen Weinstein Photography" width="100%" height="auto">
						    </div>
						    <div class="carousel-item" style="background-image:url( '<?php the_field('homepage_slider_2', 58); ?>');background-size:cover;background-position:center 12%;">

						    </div>
						    <div class="carousel-item" style="background-image:url( '<?php the_field('homepage_slider_3', 58); ?>');background-size:cover;background-position:top center;">
						      <!-- <img class="d-block img-fluid" src="/wp-content/uploads/2017/02/kw-home-head.jpg" alt="Third slide"> -->
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

					<div data-scroll-reveal="enter left and move 50px over 1.5s" id="homeIntro" class="row">
						<div class="col-sm-8 offset-sm-2">
							<hr>
							<h5><?php the_field('intro', 32); ?></h5>
							<hr>
						</div>
					</div>

					<div id="home-galleries" class="row">
						<div class="col-sm-8 offset-sm-2">
							<h2>Galleries</h2>
							<div class="row">
								<div class="col-sm-4 tilt-cont">
									<a href="/?page_id=54" class="tilter tilter--1">
										<figure class="tilter__figure">
											<img class="tilter__image" src="/wp-content/uploads/2017/02/kw_family_home.jpg" alt="Children and Families" />
											<div class="tilter__deco tilter__deco--shine"><div></div></div>
											<figcaption class="tilter__caption">
												<h3 class="tilter__title">Children & Families</h3>
												<span></span>
											</figcaption>
										</figure>
									</a>
								</div>
								<div class="col-sm-4 tilt-cont">
									<a href="/?page_id=177" class="tilter tilter--1">
										<figure class="tilter__figure">
											<img class="tilter__image" src="/wp-content/uploads/2017/04/home_dance-3.jpg" alt="Dance" />
											<div class="tilter__deco tilter__deco--shine"><div></div></div>
											<figcaption class="tilter__caption">
												<h3 class="tilter__title">Dance</h3>
												<span></span>
											</figcaption>
										</figure>
									</a>
								</div>
								<div class="col-sm-4 tilt-cont">
									<a href="/?page_id=95" class="tilter tilter--1">
										<figure class="tilter__figure">
											<img class="tilter__image" src="/wp-content/uploads/2017/04/pb-home.jpg" alt="Personal Branding" />
											<div class="tilter__deco tilter__deco--shine"><div></div></div>
											<figcaption class="tilter__caption">
												<h3 class="tilter__title">Personal Branding</h3>
												<span></span>
											</figcaption>
										</figure>
									</a>
								</div>
								<div class="col-sm-4 offset-sm-2 tilt-cont">
									<a href="/?page_id=286" class="tilter tilter--1">
										<figure class="tilter__figure">
											<img class="tilter__image" src="/wp-content/uploads/2017/02/kw_babies_home.jpg" alt="Babies and Maternity" />
											<div class="tilter__deco tilter__deco--shine"><div></div></div>
											<figcaption class="tilter__caption">
												<h3 class="tilter__title">Babies & Maternity</h3>
												<span></span>
											</figcaption>
										</figure>
									</a>
								</div>
								<div class="col-sm-4 tilt-cont">
									<a href="/?page_id=288" class="tilter tilter--1">
										<figure class="tilter__figure">
											<img class="tilter__image" src="/wp-content/uploads/2017/02/kw_portrait_home.jpg" alt="Portrait Paintings" />
											<div class="tilter__deco tilter__deco--shine"><div></div></div>
											<figcaption class="tilter__caption">
												<h3 class="tilter__title">Painted Portrait Art</h3>
												<span></span>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div id="testimonials" class="row">
						<div class="wrapper">
					    <div class="testimonial">
					      <ul class="testimonial-ul">
					        <li class="testimonial-slide active">
					          <p class="slidePara"> <?php the_field('testimonial_1', 58); ?>
											<br>
											<span><?php the_field('testimonial_1_source', 58); ?></span>
										</p>
					        </li>
					        <li class="testimonial-slide">
										<p class="slidePara"> <?php the_field('testimonial_2', 58); ?>
											<br>
											<span><?php the_field('testimonial_2_source', 58); ?></span>
										</p>
					        </li>
					        <li class="testimonial-slide">
										<p class="slidePara"> <?php the_field('testimonial_3', 58); ?>
											<br>
											<span><?php the_field('testimonial_3_source', 58); ?></span>
										</p>
					        </li>
					        <span class="top-left"></span>
					        <span class="top-right"></span>
					      </ul>
					    </div>
						</div>
					</div>

					<div id="home-charity" class="row">
						<div class="col-sm-4 offset-sm-4 char-p-cont">
							<p>Ask about our charitable giving.</p>
							<hr>
						</div>
					</div>

					<div id="instagram" class="row">
						<div class="col-sm-8 offset-sm-2">
							<?php echo do_shortcode("[instagram-feed]"); ?>
						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->



<?php get_footer(); ?>
