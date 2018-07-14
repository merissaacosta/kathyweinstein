<?php
/**
 * Template Name: Contact Page
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

		<div class="row" id="contact">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div id="contactHead" class="row" style="background-image:url( '<?php the_field('background_image', 277); ?>');">
						<div class="col-sm-12">
							<h1>Contact</h1>
						</div>
					</div>


					<div id="contactBody" class="row">
						<div class="col-sm-6 offset-sm-3 cb-wrap">
							<h4>Kathleen Weinstein Photogrpahy</h4>
							<p><?php the_field('address', 277); ?></p>
							<p><?php the_field('phone_number', 277); ?></p>
							<p><?php the_field('email_address', 277); ?></p>
							<br>
							<h3>Send us a message</h3>
							<?php echo do_shortcode('[contact-form-7 id="280" title="Contact Form"]')?>
						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
