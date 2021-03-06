<?php get_header(); ?>
<?php 

/* Template Name: Portfolio */

?>
<!-- BEGIN container -->
<div class="container">
    <div class="stripe stripe--page bg-color-orange">
        <h1 class="pagetitle"><?php the_title(); ?></h1>
    </div>

    <!-- BEGIN filter-bar -->
    <nav class="filter-bar">
        <a href="#" class="is-active ">ALL</a>
        <a href="#">PRINT</a>
        <a href="#">WEB</a>
        <a href="#">PHOTOSHOP</a>
        <a href="#">WORDPRESS</a>
    </nav>
    <!-- END filter-bar -->

    <!-- BEGIN gallery -->
    <div class="flex-layout gallery">
    <?php
        $posts = get_posts( array(
            'numberposts' => -1,
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
    ?>

        <!-- BEGIN card -->
        <div class="card">

            <!-- BEGIN portfolio__block -->
            <div class="portfolio__block">
                <a href="<?php the_permalink(); ?>"><img class="block portfolio__more"
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

        <?php } ?>
    </div>
    <!-- END gallery -->
</div>
<!-- END container -->
<?php get_footer(); ?>