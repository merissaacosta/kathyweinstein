<?php
/**
 * Template Name: Gallery - Personal Branding Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<!-- <link rel="stylesheet" type="text/css" href="/wp-content/themes/olympos/css/component.css" /> -->
<script src="/wp-content/themes/olympos/js/gallery.js"></script>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row" id="childrenFamilies">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<h1>Personal Branding</h1>

					<!-- gallery start -->


							<?php
								// get posts
								$posts = get_posts(array(
									'post_type'			=> 'pbranding',
									'posts_per_page'	=> -1,
									'orderby'			=> 'meta_value',
									'order'				=> 'DESC'
								));

								if( $posts ): ?>

								<div class="m-p-g">
									<div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">

									<?php foreach( $posts as $post ):

										setup_postdata( $post )

										?>

										<img src="<?php the_field('image'); ?>" data-full="<?php the_field('image'); ?>" class="m-p-g__thumbs-img" />

									<?php endforeach; ?>

										</div>

									<div class="m-p-g__fullscreen"></div>
									</div>

									<?php wp_reset_postdata(); ?>

								<?php endif; ?>



					<!-- gallery end -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<script>
var elem = document.querySelector('.m-p-g');

	document.addEventListener('DOMContentLoaded', function() {
		var gallery = new MaterialPhotoGallery(elem);
	});
</script>

<?php get_footer(); ?>
