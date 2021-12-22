<?php get_header(); ?>
<!-- BEGIN container -->
<div class="container align-center">
    <div class="stripe stripe__page bg-color-orange">
        <h1 class="text-l font-bebas color-white padding_title">SLIDER PLUGIN</h1>
    </div>
    <!-- BEGIN block -->
    <div class="block">
        <img class="item__img post__media" src="<?php bloginfo('template_url'); ?>/images/portfolio-item.png" />
        <p class="text-xs color-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos at aperiam magni
            facere.
            Mollitia laudantium rerum quasi corporis iure totam molestiae expedita, quibusdam magni, accusamus illo
            doloremque natus molestias tempore!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis amet, at provident quam quibusdam
            quisquam, explicabo exercitationem consequuntur mollitia nesciunt voluptatum quis perferendis nihil
            numquam optio perspiciatis excepturi. Id, voluptas.
        </p>
        <p class="text-xs color-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos at aperiam magni
            facere.
            Mollitia laudantium rerum quasi corporis iure totam molestiae expedita, quibusdam magni, accusamus illo
            doloremque natus molestias tempore!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis amet, at provident quam quibusdam
            quisquam, explicabo exercitationem consequuntur mollitia nesciunt voluptatum quis perferendis nihil
            numquam optio perspiciatis excepturi. Id, voluptas.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos at aperiam magni
            facere.
            Mollitia laudantium rerum quasi corporis iure totam molestiae expedita, quibusdam magni, accusamus illo
            doloremque natus molestias tempore!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis amet, at provident quam quibusdam
            quisquam, explicabo exercitationem consequuntur mollitia nesciunt voluptatum quis perferendis nihil
            numquam optio perspiciatis excepturi. Id, voluptas.
        </p>
    </div>
    <!-- END block -->

    <!-- BEGIN block -->
    <div class="block padding-top">

        <!-- BEGIN dashed-title -->
        <div class="dashed-title flex-layout flex-layout--nowrap">
            <p class="side__title font-bebas color-orange text-m">RELATED ITEMS</p>
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