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
<div class="wrapper">
    <header>
		<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo" class="logo"></a>
		<div class="header__nav flex-layout alignright text-sm">
		<a href="home" class="is-active">HOME</a>
		<a href="about-us">ABOUT US</a>
		<a href="blog">BLOG</a>
		<a href="portfolio">PORTFOLIO</a>
		<a href="contact-us">CONTACT US</a>
		</div>
	</header>
	<div class="stripe stripe__header"></div>
</div>