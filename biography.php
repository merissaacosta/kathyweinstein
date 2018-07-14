<?php
/**
 * Template Name: Biography Page
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

		<div class="row" id="biography">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div id="bioHead" class="row">
						<div class="col-sm-4 offset-sm-2 bh-left">
							<img src="/wp-content/uploads/2017/04/bio-pic.png" alt="Kathleen Weinstein"/>
						</div>
						<div class="col-sm-4 bh-right">
							<p>BIOGRAPHY</p>
							<h1>Kathleen Weinstein</h1>
						</div>
					</div>


					<div id="bioBody" class="row">
						<div class="col-sm-8 offset-sm-2 bb-wrap">
							<p><?php the_field('paragraph', 187); ?></p>
						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
