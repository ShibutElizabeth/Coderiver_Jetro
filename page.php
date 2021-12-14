<?php get_header(); ?>
<div class="container aligncenter">
	<h1><?php the_title(); ?></h1>
	<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
    </section>
</div>
<?php get_footer(); ?>