<?php get_header(); ?>
<?php 

/* Template Name: Home */

?>
<!-- BEGIN container -->
<div class="container align-center margin-top">

    <!-- BEGIN slider -->
    <div class="slider block">
        <?php echo do_shortcode('[URIS id=55]'); ?>
    </div>
    <!-- END slider -->

    <!-- BEGIN services -->
    <div class="services flex-layout">

        <?php 
           
           $posts = get_posts( array(
               'numberposts' => -1,
               'category' => 0,
               'orderby' => 'date',
               'order' => 'ASC',
               'include' => array(),
               'exclude' => array(),
               'meta_key' => '',
               'meta_value' => '',
               'post_type' => 'service',
               'suppress_filters' => true,
           ));

           foreach($posts as $post){
               setup_postdata($post);
               $icon = get_post_meta($post->ID, 'service_icon', true );
               
               ?>
        <?= console_log($icon); ?>
        <!-- BEGIN service -->
        <div class="service">
            <!-- BEGIN service__hat -->
            <div class="service__hat flex-layout">
                <img class="service__img" src="<?php echo $icon['guid'] ?>" />
                <h2 class="service__title maintitle"><?php the_title(); ?></h2>
            </div>
            <!-- END service__hat -->
            <p class="service__description"><?php echo get_post_meta(get_the_ID(), 'service_description', true); ?></p>
            <button class="button">MORE</button>
        </div>
        <!-- END service -->

        <?php
           }
        ?>
    </div>
    <!-- END services -->

    <!-- BEGIN block -->
    <div class="block padding-top">

        <!-- BEGIN dashed-title -->
        <div class="dashed-title flex-layout flex-layout--nowrap">
            <p class="side__title maintitle">RECENT WORKS</p>
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