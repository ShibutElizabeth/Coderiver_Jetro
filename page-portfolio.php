<?php get_header(); ?>
<div class="container aligncenter">
    <div class="stripe stripe__page">
        <h1 class="text-xlg">PORTFOLIO</h1>
    </div>
    <div class="filter-bar text-sm">
        <p class="is-active">ALL</p>
        <p>PRINT</p>
        <p>WEB</p>
        <p>PHOTOSHOP</p>
        <p>WORDPRESS</p>
    </div>
    <div class="flex-layout gallery-min">
        <div class="card">
            
        <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/card1.png" />
            
            <div class="card__text">
                <h2 class="font-title">CHARACTER DESIGN</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/card2.png" />

            <div class="card__text">
                <h2 class="font-title">BROSCHURE DESIGN</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/card3.png" />
            <div class="card__text">
                <h2 class="font-title">SOCIAL MEDIA BUTTONS</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/card4.png" />
            <div class="card__text">
                <h2 class="font-title">10 AMAZING WEBSITES</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/item5.png" />
            <div class="card__text">
                <h2 class="font-title">CHARACTER DESIGN</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/item6.png" />
            <div class="card__text">
                <h2 class="font-title">BROSCHURE DESIGN</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/item7.png" />
            <div class="card__text">
                <h2 class="font-title">SOCIAL MEDIA BUTTONS</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/item8.png" />
            <div class="card__text">
                <h2 class="font-title">10 AMAZING WEBSITES</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/item9.png" />
            <div class="card__text">
                <h2 class="font-title">CHARACTER DESIGN</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/item10.png" />
            <div class="card__text">
                <h2 class="font-title">BROSCHURE DESIGN</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/item11.png" />
            <div class="card__text">
                <h2 class="font-title">SOCIAL MEDIA BUTTONS</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="card__img" src="<?php bloginfo('template_url'); ?>/images/item12.png" />
            <div class="card__text">
                <h2 class="font-title">10 AMAZING WEBSITES</h2>
                <p class="font-title card__description">June 14, 2020</p>
            </div>
        </div>
    </div>
    <section>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
    <?php get_footer(); ?>