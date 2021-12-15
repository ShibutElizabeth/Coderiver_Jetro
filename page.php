<?php get_header(); ?>
<div class="container aligncenter">
<div class="slider">
		<?php echo do_shortcode('[URIS id=55]'); ?>
		</div>
<div class="posts">
	<div class="post">
		
			<img class="post__img" src="<?php bloginfo('template_url'); ?>/images/icon1.png"/>
			<h2 class="post__title">CHECK OUT MY LATEST PORTFOLIO</h2>
		
		<p class="post__description">Decription</p>
	</div>
	<div class="post">
		<div></div>
			<img class="post__img" src="<?php bloginfo('template_url'); ?>/images/icon2.png"/>
			<h2 class="post__title">OFFER TOP NOTCH QUALITY</h2>
		
		<p class="post__description">Decription</p>
	</div>
	<div class="post">
		
			<img class="post__img" src="<?php bloginfo('template_url'); ?>/images/icon3.png"/>
			<h2 class="post__title">CHECK OUT MY LATEST PORTFOLIO</h2>
		
		<p class="post__description">Decription</p>
	</div>
	<section>
	
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
    </section>

</div>
<?php get_footer(); ?>