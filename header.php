<!doctype html>

<?php
  $slug = strtok($_SERVER["REQUEST_URI"],'?');
?>

<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,400i,500,600,700,700i" rel="stylesheet">
				<link rel="icon" type="image/png" href="/wp-content/themes/olympos/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
		<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

<nav class="navbar navbar-toggleable-md navbar-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div>
	  <a class="navbar-brand" href="http://staging.kathleenweinsteinphotography.com">
				 <img class="logo" src="/wp-content/uploads/2017/02/kwlogo.png" />
		</a>
  </div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<!-- <?php wp_nav_menu(); ?> -->
    <ul class="nav navbar-nav">
			<li class="nav-item">
        <a class="nav-link<?=$slug === '/' ? ' active': ''?>" href="http://staging.kathleenweinsteinphotography.com">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/?page_id=181">Biography</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/?page_id=54">Children & Families</a>
          <a class="dropdown-item" href="/?page_id=177">Dance</a>
          <a class="dropdown-item" href="/?page_id=95">Personal Branding</a>
          <a class="dropdown-item" href="#">Babies & Maternity</a>
          <a class="dropdown-item" href="#">Portrait Paintings</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="//shop.kathleenweinsteinphotography.com/RedCart/#7c1209">Client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/?page_id=9">Contact</a>
      </li>

    </ul>
  </div>
</nav>




<div class="row comp-row">
	<div class="col-sm-6 comp-left">
		<p>Enter email address for a complimentary consultation</p>
	</div>
	<div class="col-sm-6 comp-right">
		<?php echo do_shortcode('[contact-form-7 id="30" title="Complimentary Consultation Email"]'); ?>
	</div>
</div>


	</div><!-- .wrapper-navbar end -->
