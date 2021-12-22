<?php get_header(); ?>
<!-- BEGIN container -->
<div class="container align-center margin-top">
    
    <!-- BEGIN slider -->
    <div class="slider block">
        <?php echo do_shortcode('[URIS id=55]'); ?>
    </div>
    <!-- END slider -->

    <!-- BEGIN services -->
    <div class="services flex-layout">

        <!-- BEGIN service -->
        <div class="service">

            <!-- BEGIN service__hat -->
            <div class="service__hat flex-layout">
                <img class="service__img" src="<?php bloginfo('template_url'); ?>/images/icon1.png" />
                <h2 class="service__title font-bebas color-orange text-m">CHECK OUT MY LATEST PORTFOLIO</h2>
            </div>
            <!-- END service__hat -->
            <p class="service__description text-sm color-lightgray">Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. Eius dolor,
                architecto dolorem aspernatur maxime incidunt exercitationem temporibus ducimus quibusdam sit iusto quae
                distinctio commodi! Ipsum qui repudiandae ut labore quasi!</p>
            <button class="button font-bebas color-white bg-color-orange text-sm">MORE</button>
        </div>
        <!-- END service -->

        <!-- BEGIN service -->
        <div class="service">

            <!-- BEGIN service__hat -->
            <div class="service__hat flex-layout">
                <img class="service__img" src="<?php bloginfo('template_url'); ?>/images/icon2.png" />
                <h2 class="service__title font-bebas color-orange text-m">OFFER TOP NOTCH QUALITY WORK & SERVICES</h2>
            </div>
            <!-- END service__hat -->
            <p class="service__description text-sm color-lightgray">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Tempora debitis
                eligendi nam facilis odio quam voluptates, laboriosam dolorem ut repellat fuga, quaerat doloribus illum,
                possimus enim. Quam nisi sapiente esse!</p>
            <button class="button font-bebas color-white bg-color-orange text-sm">MORE</button>
        </div>
        <!-- END service -->

        <!-- BEGIN service -->
        <div class="service">

            <!-- BEGIN service__hat -->
            <div class="service__hat flex-layout">
                <img class="service__img" src="<?php bloginfo('template_url'); ?>/images/icon3.png" />
                <h2 class="service__title font-bebas color-orange text-m">FOLLOW ME ON TWITTER, FACEBOOK & PINTEREST
                </h2>
            </div>
            <!-- END service__hat -->
            <p class="service__description text-sm color-lightgray">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Incidunt qui sunt,
                accusantium dolorum labore possimus voluptate velit a necessitatibus ea natus reiciendis quod
                repellendus autem nostrum ex exercitationem nobis! Molestias.</p>
            <button class="button font-bebas color-white bg-color-orange text-sm">MORE</button>
        </div>
        <!-- END service -->
    </div>
    <!-- END services -->

    <!-- BEGIN block -->
    <div class="block padding-top">

        <!-- BEGIN dashed-title -->
        <div class="dashed-title flex-layout flex-layout--nowrap">
            <p class="side__title font-bebas color-orange text-m">RECENT WORKS</p>
            <div class="dashed"></div>
        </div>
        <!-- END dashed-title -->

        <!-- BEGIN gallery -->
        <div class="gallery flex-layout">
            <!-- BEGIN card -->
            <div class="card">
                <img class="block" src="<?php bloginfo('template_url'); ?>/images/card1.png" />
                
                <!-- BEGIN card__text -->
                <div class="card__text">
                    <h2 class="font-bebas text-m color-lightgray">CHARACTER DESIGN</h2>
                    <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
                </div>
                <!-- END card__text -->
            </div>
            <!-- END card -->

            <!-- BEGIN card -->
            <div class="card">
                <img class="block" src="<?php bloginfo('template_url'); ?>/images/card2.png" />
                
                <!-- BEGIN card__text -->
                <div class="card__text">
                    <h2 class="font-bebas text-m color-lightgray">BROSCHURE DESIGN</h2>
                    <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
                </div>
                <!-- END card__text -->
            </div>
            <!-- END card -->

            <!-- BEGIN card -->
            <div class="card">
                <img class="block" src="<?php bloginfo('template_url'); ?>/images/card3.png" />
                
                <!-- BEGIN card__text -->
                <div class="card__text">
                    <h2 class="font-bebas text-m color-lightgray">SOCIAL MEDIA BUTTONS</h2>
                    <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
                </div>
                <!-- END card__text -->
            </div>
            <!-- END card -->

            <!-- BEGIN card -->
            <div class="card">
                <img class="block" src="<?php bloginfo('template_url'); ?>/images/card4.png" />

                <!-- BEGIN card__text -->
                <div class="card__text">
                    <h2 class="font-bebas text-m color-lightgray">10 AMAZING WEBSITES</h2>
                    <p class="card__description font-bebas text-s color-orange">June 14, 2020</p>
                </div>
                <!-- END card__text -->
            </div>
            <!-- END card -->
        </div>
        <!-- END gallery -->
    </div>
    <!-- END block -->

<section>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>
</div>
<!-- END container -->
<?php get_footer(); ?>