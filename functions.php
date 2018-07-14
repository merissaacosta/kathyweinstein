<?php

/*  Register Scripts and Style */

function theme_register_scripts() {
    wp_enqueue_style( 'olympos-css', get_stylesheet_uri() );
    wp_enqueue_script( 'olympos-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'js/olympos.min.js' ), array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );



function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
/*
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap-grid.min.css' );
    wp_enqueue_script( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap-reboot.min.css' );
    wp_enqueue_script( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
*/
    wp_enqueue_script( 'tether-script', 'https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js', array( 'jquery' ) );
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' );
    wp_enqueue_script( 'custom-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js' );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


/* Add menu support */
// if (function_exists('add_theme_support')) {
//     add_theme_support('menus');
// }

function theme_setup(){
    add_theme_support("menus");
    register_nav_menu('primary', 'Primery Header Nav');
}

add_action('init', 'theme_setup');

/* Add post image support */
add_theme_support( 'post-thumbnails' );


/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    //add_image_size( 'custom-image-size', 500, 500, true );
}

/* Add widget support */
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'SidebarOne',
	    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'SidebarTwo',
	    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));


/*  EXCERPT
    Usage:

    <?php echo excerpt(100); ?>
*/

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}


// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}


add_filter('uwpqsf_result_tempt', 'customize_output', '', 4);
function customize_output($results , $arg, $id, $getdata ){
	 // The Query
            $apiclass = new uwpqsfprocess();
             $query = new WP_Query( $arg );
		ob_start();	$result = '';
			// The Loop

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();global $post;
																echo '<div class="col-sm-4">';
                                echo '<a href="'.get_permalink().'">';
                                echo '<div class="recipes-img-cont">';
                                echo '<img src="'.types_render_field( "recipe-image", array( 'raw' => true) ). '" width="100%" height="auto"">';
                                echo '<p>View</p>';
                                echo '</div>';
                                echo '</a>';
                                echo '<p class="allrec-title">'.get_the_title().'</p>';
                                echo '</div>';
			}
                        echo  $apiclass->ajax_pagination($arg['paged'],$query->max_num_pages, 4, $id, $getdata);
		 } else {
					 echo  '';
				}
				/* Restore original Post Data */
				wp_reset_postdata();

		$results = ob_get_clean();
			return $results;
}

function register_header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_header_menu' );

// ini_set('display_errors', true);
// error_reporting(E_ALL);

// Register Custom Navigation Walker
// require('/wp-content/themes/olympos/wp_bootstrap_navwalker.php');

// require_once($_SERVER['DOCUMENT_ROOT'].'wp_bootstrap_navwalker.php');

// echo getcwd();
