<?php get_header(); ?>
<div class="container align-center">
<div class="stripe stripe__page bg-color-orange">
        <h1 class="text-l font-bebas color-white padding_title">BLOG</h1>
    </div>
    <section>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
    <?php get_footer(); ?>