<!doctype html>
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- BEGIN wrapper -->
	<div class="wrapper">
		<header>
			<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo" class="logo"></a>
			
			<!-- BEGIN header__nav -->
			<div class="header__nav flex-layout flex-layout--nowrap align-right">
				<a href="home" class="maintitle maintitle--lightgray is-active">HOME</a>
				<a href="about-us" class="maintitle maintitle--lightgray">ABOUT US</a>
				<a href="blog" class="maintitle maintitle--lightgray">BLOG</a>
				<a href="portfolio" class="maintitle maintitle--lightgray">PORTFOLIO</a>
				<a href="contact-us" class="maintitle maintitle--lightgray">CONTACT US</a>
			</div>
			<!-- END header__nav -->
		</header>
		<div class="stripe stripe__header bg-color-peach"></div>
	</div>
	<!-- END wrapper -->