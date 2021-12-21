<?php get_header(); ?>
<div class="container align-center">
    <div class="stripe stripe__page bg-color-orange">
        <h1 class="text-l font-bebas color-white padding_title">PORTFOLIO</h1>
    </div>
    <div class="filter-bar text-m font-bebas">
        <p class="is-active">ALL</p>
        <p>PRINT</p>
        <p>WEB</p>
        <p>PHOTOSHOP</p>
        <p>WORDPRESS</p>
    </div>
    <div class="flex-layout gallery">
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/card1.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">CHARACTER DESIGN</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/card2.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">BROSCHURE DESIGN</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/card3.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">SOCIAL MEDIA BUTTONS</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/card4.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">10 AMAZING WEBSITES</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/item5.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">CHARACTER DESIGN</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/item6.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">BROSCHURE DESIGN</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/item7.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">SOCIAL MEDIA BUTTONS</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/item8.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">10 AMAZING WEBSITES</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/item9.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">CHARACTER DESIGN</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/item10.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">BROSCHURE DESIGN</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/item11.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">SOCIAL MEDIA BUTTONS</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
        <div class="card">
            <img class="block" src="<?php bloginfo('template_url'); ?>/images/item12.png" />
            <div class="card__text">
                <h2 class="font-bebas text-m color-lightgray">10 AMAZING WEBSITES</h2>
                <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
            </div>
        </div>
    </div>
    <section>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
    <?php get_footer(); ?>