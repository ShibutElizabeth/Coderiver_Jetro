<?php get_header(); ?>
<?php 

/* Template Name: Portfolio Item */

?>
<!-- BEGIN container -->
<div class="container align-center">
<div class="stripe stripe__page bg-color-orange">
        <h1 class="pagetitle"><?php the_title(); ?></h1>
    </div>
    <!-- BEGIN block -->
    <div class="block">
        <img class="item__img post__media" src="<?php bloginfo('template_url'); ?>/images/portfolio-item.png" />
        <p class="maintext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos at aperiam magni
            facere.
            Mollitia laudantium rerum quasi corporis iure totam molestiae expedita, quibusdam magni, accusamus illo
            doloremque natus molestias tempore!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis amet, at provident quam quibusdam
            quisquam, explicabo exercitationem consequuntur mollitia nesciunt voluptatum quis perferendis nihil
            numquam optio perspiciatis excepturi. Id, voluptas.
        </p>
        <p class="maintext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos at aperiam magni
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
            <p class="side__title maintitle">RELATED ITEMS</p>
            <div class="dashed"></div>
        </div>
        <!-- END dashed-title -->

        <!-- BEGIN gallery -->
        <div class="gallery flex-layout">
        <?php 
           
           $posts = get_posts( array(
               'numberposts' => 4,
               'category' => 0,
               'orderby' => 'date',
               'order' => 'DESC',
               'include' => array(),
               'exclude' => array(),
               'meta_key' => '',
               'meta_value' => '',
               'post_type' => 'card',
               'suppress_filters' => true,
           ));

           foreach($posts as $post){
               setup_postdata($post);
               $icon = get_post_meta($post->ID, 'service_icon', true );
               
               ?>
            <?= console_log($icon); ?>
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN portfolio__block -->
                <div class="portfolio__block">
                    <a href="portfolio-item"><img class="block portfolio__more"
                            src="<?php bloginfo('template_url'); ?>/images/more.png" /></a>
                    <img class="block portfolio__img" src="<?php echo get_the_post_thumbnail_url(); ?>" />
                </div>
                <!-- END portfolio__block -->
                <!-- BEGIN card__text -->
                <div class="card__text">
                    <h2 class="maintitle maintitle--lightgray"><?php the_title(); ?></h2>
                    <p class="card__description"><?php echo get_post_meta(get_the_ID(), 'card_date', true); ?></p>
                </div>
                <!-- END card__text -->
            </div>
            <!-- END card -->

            <?php
           }
        ?>
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