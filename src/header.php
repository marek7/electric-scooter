<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
		<!-- header -->
		<header id="myHeader" class="header clear" role="banner">

			<div class="wrapper flex">

				<!-- logo -->
				<div class="logo">
					<a href="<?php echo esc_url( home_url() ); ?>">
						<?php
						/*
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Logo" class="logo-img">
						*/
						?>
						<h1><?php echo get_bloginfo('name'); ?></h1>
					</a>
				</div>					
				<!-- /logo -->
				
				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>
				<!-- /nav -->

			</div>

			<script type="text/javascript">
			/*
				window.onscroll = function() {myFunction()};

				var header = document.getElementById("myHeader");
				var sticky = header.offsetTop;

				function myFunction() {
					if (window.pageYOffset > 100) {
						header.classList.add("sticky-header");
					} else {
						header.classList.remove("sticky-header");
					}
				}
			*/		
			</script>

		</header>
		<!-- /header -->

		<!-- wrapper -->
		<div class="wrapper">
		

<?php /*
<!-- Marka icon example. Only awailable Bars and Times for hamburger menu -->

<i id="menu_icon"></i>

<!--  Example for fancybox and slick slider -->
<div class="your-class">
	<div>your content</div>
	<div>your content</div>
	<div>your content</div>
</div>

<a data-fancybox="gallery" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"></a>
<a data-fancybox="gallery" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"></a>

*/?>