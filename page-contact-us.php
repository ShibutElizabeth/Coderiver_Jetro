<?php get_header(); ?>
<div class="container aligncenter">
<h1>Contact us</h1>
    <section>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
    <?php get_footer(); ?>