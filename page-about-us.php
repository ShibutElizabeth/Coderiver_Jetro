<?php get_header(); ?>
<?php 

/* Template Name: About Us */

?>
<!-- BEGIN container -->
<div class="container align-center">
    <div class="stripe stripe__page bg-color-orange">
        <h1 class="pagetitle"><?php the_title(); ?></h1>
    </div>

    <!-- BEGIN page-container -->
    <div class="page-container flex-layout about">

        <!-- BEGIN page-container__main -->
        <div class="about page-container__main">

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
               'post_type' => 'about-text',
               'suppress_filters' => true,
           ));

           foreach($posts as $post){
               setup_postdata($post);
               $post_paragraph = get_post_meta($post->ID, 'paragraph', true );
               $post_col1 = get_post_meta($post->ID, 'col-1', true );
               $post_col2 = get_post_meta($post->ID, 'col-2', true );
               $post_col3 = get_post_meta($post->ID, 'col-3', true );
               $post_quote = get_post_meta($post->ID, 'quote', true );
               $post_media = get_post_meta($post->ID, 'text-media', true );
               $post_letter = get_post_meta($post->ID, 'letter', true );
               $post_pos = get_post_meta($post->ID, 'media_position', true );
               
               ?>
            <?= console_log($post_pos); ?>
            <?php if($post_paragraph){
                        if($post_media){
                            if($post_pos == 1){
                    ?>
            <div class="paragraphs align-left">
            <img class="about__img align-right margin-left_about" src="<?php echo $post_media['guid'] ?>" />    
            <?php echo $post_paragraph ?>
            </div>
            <?php } 
                    else { ?>
            <div class="paragraphs align-right">
                <img class="about__img align-left margin-right_about" src="<?php echo $post_media['guid'] ?>" />
                <?php echo $post_paragraph ?>
            </div>

            <?php } 
                        }
                    else if($post_letter){ ?>
            <div class="paragraphs flex-layout flex-layout--nowrap">
                <div class="align-right">
                    <svg class="about__svg align-left margin-right_about" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="8.467mm" height="8.930mm">
                        <text kerning="auto" font-family="Bebas Neue" fill="rgb(0, 0, 0)" font-size="36px" x="0px"
                            y="34px">
                            <tspan font-size="36px" font-family="HelveticaNeue" font-weight="bold" fill="#E8603C">
                                <?php echo $post_letter?></tspan>
                        </text>
                    </svg>
                    <?php echo $post_paragraph ?>
                </div>
            </div>
            <?php } 
                    else{ ?>
            <div class="paragraphs">
                <?php echo $post_paragraph ?>
            </div>
            <?php }
                    
                    }
                     else if($post_quote){ ?>

            <!-- BEGIN about__quote -->
            <div class="paragraphs about__quote flex-layout flex-layout--nowrap">
                <div class="about__quote-stripe align-left margin-right_about"></div>
                <i class="maintext align-right">
                    <?php echo $post_quote?>
                </i>
            </div>
            <!-- END about__quote -->

            <?php } 
                    else if($post_col1){?>
            <!-- BEGIN block -->
            <div class="paragraphs block flex-layout flex-layout--nowrap">

                <?php if($post_col2 && !$post_col3){   ?>
                <div class="align-left margin-right_about"><?php echo $post_col1 ?></div>
                <div class="align-right"><?php echo $post_col2 ?></div>
                <?php }
                        else if($post_col2 && $post_col3){ ?>
                <div class="about__p"><?php echo $post_col1 ?>
                </div>
                <div class="about__p"><?php echo $post_col2 ?>
                </div>
                <div class="about__p"><?php echo $post_col3 ?>
                </div>

                <?php }?>
            </div>
            <!-- END block -->
            <?php  
                 
           }
        }
        ?>
        </div>
        <!-- END page-container__main -->

        <!-- BEGIN page-container__side -->
        <div class="page-container__side">

            <?php 
                    $sidebar_id = 341;
                    $sidebar = get_post( $sidebar_id );
                    $sb_about = get_post_meta($sidebar_id, 'about_jetro', true );
                    $sb_categories = get_post_meta($sidebar_id, 'categories', false );
                    $sb_gallery = get_post_meta($sidebar_id, 'gallery', false );
               ?>
            <!-- BEGIN page-container__sideblock -->
            <div class="page-container__sideblock">

                <!-- BEGIN dashed-title -->
                <div class="dashed-title flex-layout flex-layout--nowrap">
                    <h2 class="side__title maintitle">ABOUT JETRO</h2>
                    <div class="dashed"></div>
                </div>
                <!-- END dashed-title -->
                <?php echo $sb_about ?>
            </div>
            <!-- END page-container__sideblock -->

            <!-- BEGIN page-container__sideblock -->
            <div class="page-container__sideblock">

                <!-- BEGIN dashed-title -->
                <div class="dashed-title flex-layout flex-layout--nowrap">
                    <h2 class="side__title maintitle">CATEGORIES</h2>
                    <div class="dashed"></div>
                </div>
                <!-- END dashed-title -->
                <!-- BEGIN category-block -->
                <div class="category-block">
                    <?php 
                    foreach($sb_categories as $item){
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
            </div>
            <!-- END page-container__sideblock -->

            <!-- BEGIN page-container__sideblock -->
            <div class="page-container__sideblock">

                <!-- BEGIN dashed-title -->
                <div class="dashed-title flex-layout flex-layout--nowrap">
                    <h2 class="side__title maintitle">PHOTO GALLERY</h2>
                    <div class="dashed"></div>
                </div>
                <!-- END dashed-title -->
                
                <!-- BEGIN min-gallery -->
                <div class="min-gallery grid-layout">

                    <?php
                    foreach($sb_gallery as $sq){
                        $sq_link = get_post_meta($sq['ID'], 'gallery_link', true );
                        $sq_img = get_the_post_thumbnail_url($sq['ID']);
                    ?>
                    <a href="<?php echo $sq_link ?>"><img class="sq" src="<?php echo $sq_img ?>" /></a>
                    <?php 
                    }
                    ?>
                </div>
                <!-- END min-gallery -->
            </div>
            <!-- END page-container__sideblock -->
        </div>
        <!-- END page-container__side -->
    </div>
    <!-- END page-container -->

</div>
<!-- END container -->
<?php get_footer(); ?>