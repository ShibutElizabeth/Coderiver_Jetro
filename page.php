<?php get_header(); ?>
<div class="container aligncenter">
<div class="slider">
		<?php echo do_shortcode('[URIS id=55]'); ?>
		</div>
<div class="posts flex-layout"> 
	<div class="post">
	<div class="post__hat flex-layout">
			<img class="post__img" src="<?php bloginfo('template_url'); ?>/images/icon1.png"/>
			<h2 class="font-title post__title">CHECK OUT MY LATEST PORTFOLIO</h2>
		</div>
		<p class="post__description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius dolor, architecto dolorem aspernatur maxime incidunt exercitationem temporibus ducimus quibusdam sit iusto quae distinctio commodi! Ipsum qui repudiandae ut labore quasi!</p>
		<button class="font-title post__button">MORE</button>
	</div>
	<div class="post">
		<div class="post__hat flex-layout">
			<img class="post__img" src="<?php bloginfo('template_url'); ?>/images/icon2.png"/>
			<h2 class="font-title post__title">OFFER TOP NOTCH QUALITY     WORK & SERVICES</h2>
		</div>			
		<p class="post__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora debitis eligendi nam facilis odio quam voluptates, laboriosam dolorem ut repellat fuga, quaerat doloribus illum, possimus enim. Quam nisi sapiente esse!</p>
		<button class="font-title post__button">MORE</button>
	</div>
	<div class="post">
	<div class="post__hat flex-layout">
			<img class="post__img" src="<?php bloginfo('template_url'); ?>/images/icon3.png"/>
			<h2 class="font-title post__title">FOLLOW ME ON TWITTER, FACEBOOK & PINTEREST</h2>
		</div>
		<p class="post__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt qui sunt, accusantium dolorum labore possimus voluptate velit a necessitatibus ea natus reiciendis quod repellendus autem nostrum ex exercitationem nobis! Molestias.</p>
		<button class="font-title post__button">MORE</button>
	</div>
	<div class="recent">
		<div class="recent__title-block">
		<p class="font-title post__title recent__title">RECENT WORKS</p>
		<div class="recent__dashed"></div>
		</div>
		<div class="gallery-min flex-layout">
			<div class="card">
				<img class="card__img" src="<?php bloginfo('template_url'); ?>/images/card1.png"/>
				<div class="card__text">
				   <h2 class="font-title">CHARACTER DESIGN</h2>
				<p class="font-title card__description">June 14, 2020</p>
			    </div>
			</div>
			<div class="card">
			<img class="card__img" src="<?php bloginfo('template_url'); ?>/images/card2.png"/>
			<div class="card__text">
				<h2 class="font-title">BROSCHURE DESIGN</h2>
				<p class="font-title card__description">June 14, 2020</p>
			</div>	
			</div>
			<div class="card">
			<img class="card__img" src="<?php bloginfo('template_url'); ?>/images/card3.png"/>
			<div class="card__text">	
			<h2 class="font-title">SOCIAL MEDIA BUTTONS</h2>
				<p class="font-title card__description">June 14, 2020</p>
			</div>
			</div>
			<div class="card">
			<img class="card__img" src="<?php bloginfo('template_url'); ?>/images/card4.png"/>
			<div class="card__text">
				<h2 class="font-title">10 AMAZING WEBSITES</h2>
				<p class="font-title card__description">June 14, 2020</p>
			</div> 
			</div>
		</div>
	</div>
	
	<section>
	
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
    </section> 
</div>
<?php get_footer(); ?>