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
		<div class="header__nav alignright text-sm">
		<a href="/" class="is-active">HOME</a>
		<a href="/">ABOUT US</a>
		<a href="/">BLOG</a>
		<a href="/">PORTFOLIO</a>
		<a href="/">CONTACT US</a>
		</div>
	</header>
	<div class="stripe"></div>