<?php get_header(); ?>
<?php 

/* Template Name: Contact Us */

?>
<!-- BEGIN container -->
<div class="container align-center">
    <div class="stripe stripe__page bg-color-orange">
        <h1 class="pagetitle"><?php the_title(); ?></h1>
    </div>

    <!-- BEGIN page-container -->
    <div class="page-container flex-layout">

        <!-- BEGIN page-container__main -->
        <div class="contact page-container__main page-container__main--contact">
            <?php 
           
           $medias = get_posts( array(
               'numberposts' => 1,
               'category' => 0,
               'orderby' => 'date',
               'order' => 'ASC',
               'include' => array(),
               'exclude' => array(),
               'meta_key' => '',
               'meta_value' => '',
               'post_type' => 'media',
               'suppress_filters' => true,
           ));

           foreach($medias as $media){
               setup_postdata($media);
               
               $media_map = get_post_meta($media->ID, 'map', true );
               
               ?>

            <?php echo $media_map ?>
            <!-- BEGIN flex -->
            <div class="flex-layout flex-layout--nowrap flex-layout--contact">
                <!-- BEGIN contact__textblock -->
                <div class="contact__textblock">
                
            <?php }
            $posts = get_posts( array(
                'numberposts' => -1,
                'category' => 0,
                'orderby' => 'date',
                'order' => 'ASC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'contact',
                'suppress_filters' => true,
            ));
            foreach($posts as $post){
                setup_postdata($post);
                $post_title = get_post_meta($post->ID, 'info_title', true );
                $post_info = get_post_meta($post->ID, 'info', true );
            
            ?>
            <div class="paragraphs">
            <h3 class="contact__title"><?php echo $post_title ?></h3>
            <?php echo $post_info ?>
            </div>
            <?php } ?>

                </div>
                <!-- END contact__textblock -->

                <!-- BEGIN contact__formblock -->
                <div class="contact__formblock margin-top--plus">
                    <form class="contact__form">
                        <input type="text" placeholder="FIRSTNAME" class="contact__input" />
                        <input type="text" placeholder="LASTNAME" class="contact__input" />
                        <input type="text" placeholder="EMAIL" class="contact__input" />
                        <textarea type="text" placeholder="MESSAGE" class="contact__input"></textarea>
                        <input type="button" class="button align-left" value="submit" />
                    </form>
                </div>
                <!-- END contact__formblock -->
            </div>
            <!-- END flex -->
        </div>
        <!-- END page-container__main -->

        <!-- BEGIN page-container__side -->
        <div class="page-container__side">

            <?php 
           
           $sides = get_posts( array(
               'numberposts' => -1,
               'category' => 0,
               'orderby' => 'date',
               'order' => 'ASC',
               'include' => array(),
               'exclude' => array(),
               'meta_key' => '',
               'meta_value' => '',
               'post_type' => 'side',
               'suppress_filters' => true,
           ));

           foreach($sides as $side){
               setup_postdata($side);
               $side_title = get_post_meta($side->ID, 'side_title', true );
               $side_text = get_post_meta($side->ID, 'side_text', true );
               $side_list = get_post_meta($side->ID, 'side_list', false );
               $side_gallery = get_post_meta($side->ID, 'gallery', false );
               
               ?>
            <!-- BEGIN page-container__sideblock -->
            <div class="page-container__sideblock">


                <!-- BEGIN dashed-title -->
                <div class="dashed-title flex-layout flex-layout--nowrap">
                    <h2 class="side__title maintitle"><?php echo $side_title ?></h2>
                    <div class="dashed"></div>
                </div>
                <!-- END dashed-title -->
                <?php if($side_text){ ?>
                <?php echo $side_text ?>
                <?php }
                if($side_list){ ?>
                <!-- BEGIN category-block -->
                <div class="category-block">
                    <?php 
                    foreach($side_list as $item){
                        $item_link = get_post_meta($item['ID'], 'item_link', true );
                        $item_size = get_post_meta($item['ID'], 'item_size', true );
                        $item_title = get_post_meta($item['ID'], 'item_title', true );
                    ?>
                    <a href="<?php echo $item_link ?>" class=""><?php echo $item_title ?>(<?php echo $item_size ?>)</a>
                    <?php 
                    }
                    ?>
                </div>
                <!-- END category-block -->
                <?php }
                if($side_gallery){?>
                <!-- BEGIN min-gallery -->
                <div class="min-gallery grid-layout">

                    <?php 
                    foreach($side_gallery as $sq){
                        $sq_link = get_post_meta($sq['ID'], 'gallery_link', true );
                        $sq_img = get_the_post_thumbnail_url($sq['ID']);
                    ?>
                    <a href="<?php echo $sq_link ?>"><img class="sq" src="<?php echo $sq_img ?>" /></a>
                    <?php 
                    }
                    ?>
                </div>
                <!-- END min-gallery -->
                <?php } ?>
            </div>
            <!-- END page-container__sideblock -->
            <?php }?>

        </div>
        <!-- END page-container__side -->
    </div>
    <!-- END page-container -->
    <section>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
</div>
<!-- END container -->
<?php get_footer(); ?>