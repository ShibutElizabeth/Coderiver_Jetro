<?php get_header(); ?>
<?php 

/* Template Name: Blog */

?>
<!-- BEGIN container -->
<div class="container align-center">
    <div class="stripe stripe__page bg-color-orange">
        <h1 class="pagetitle"><?php the_title(); ?></h1>
    </div>

    <!-- BEGIN page-container -->
    <div class="page-container flex-layout">

        <!-- BEGIN page-container__main -->
        <div class="blog page-container__main page-container__main--blog">

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
               'post_type' => 'posst',
               'suppress_filters' => true,
           ));

           foreach($posts as $post){
               setup_postdata($post);
               $post_title = get_post_meta($post->ID, 'posst_title', true );
               $post_slider = get_post_meta($post->ID, 'post_shortcode', true );
               $post_descr = get_post_meta($post->ID, 'post_description', true );
               $post_icon = get_post_meta($post->ID, 'post_icon', true );
               $post_media = get_post_meta($post->ID, 'post_media', true );
               $post_quote = get_post_meta($post->ID, 'post_quote', true );
               $post_url = get_post_meta($post->ID, 'post_url', true );
               $post_idp = get_post_meta($post->ID, 'posst_id', false );
               
               ?>
            <!-- BEGIN post -->
            <div class="post grid-layout grid-layout__post">

                <!-- BEGIN post__iconblock -->
                <div class="post__iconblock">

                    <!-- BEGIN post__icon -->
                    <div class="post__icon bg-color-orange">
                        <img src="<?php echo $post_icon['guid'] ?>" class="post__svg" />
                    </div>
                    <!-- END post__icon -->
                </div>
                <!-- END post__iconblock -->

                <!-- BEGIN post__content -->
                <div class="post__content">

                    <?php if($post_quote){
                    ?>
                    <!-- BEGIN post__quote -->
                    <div class="post__quote bg-color-lightgray flex-layout flex-layout--nowrap">
                        <svg class="align-left margin-span__blog" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="10mm" height="7.056mm">
                            <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)" font-size="72px" x="0px"
                                y="55px">
                                <tspan font-size="72px" font-family="Georgia" fill="#E8663C">&#8220;</tspan>
                            </text>
                        </svg>
                        <i class="maintext align-right"><?php echo $post_quote ?></i>
                    </div>
                    <!-- END post__quote -->

                    <?php } 
                     else if($post_url){ ?>

                    <!-- BEGIN post__info -->
                    <div class="post__info">
                        <h2 class="maintitle"><?php echo $post_title ?></h2>
                        <?php echo $post_url?>
                        <?php echo $post_descr?>
                    </div>
                    <!-- END post__info -->
                    <?php } 
                    else { 
                        if($post_slider){ ?>

                    <!-- BEGIN slider -->
                    <div class="slider block">
                        <?php echo get_post_meta($post->ID, 'post_slider', true ); ?>
                    </div>
                    <!-- END slider -->
                    <?php }
                        if($post_media){ ?>
                    <div class="block">
                        <img class="post__media" src="<?php echo $post_media['guid'] ?>" />
                    </div>

                    <?php }?>

                    <!-- BEGIN post__info -->
                    <div class="post__info flex-layout flex-layout--nowrap">
                        <!-- BEGIN post__metadata -->
                        <div class="post__metadata">
                            <?php 
                            $metas = get_posts( array(
                                'numberposts' => -1,
                                'category' => 0,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'include' => array(),
                                'exclude' => array(),
                                'meta_key' => '',
                                'meta_value' => '',
                                'post_type' => 'meta',
                                'suppress_filters' => true,
                            ));
                            
                        foreach($metas as $meta){
                            setup_postdata($meta);
                            $meta_title = get_post_meta($meta->ID, 'meta_title', true );
                            $meta_descr = get_post_meta($meta->ID, 'meta_descr', true );
                            $post_ids = get_post_meta($meta->ID, 'posst_id', false );
                            foreach($post_ids as $id){
                                if($id['post_title'] == $post_title){
                            ?>

                            <h2 class="post__metatitle"><?php echo $meta_title ?></h2>
                            <p class="post__metap"><?php echo $meta_descr ?></p>

                            <?php 
                                }
                            }
                            }?>

                        </div>
                        <!-- END post__metadata -->

                        <!-- BEGIN post__description -->
                        <div class="post__description">
                            <h2 class="maintitle"><?php echo $post_title ?></h2>
                            <?php echo $post_descr ?>
                        </div>
                        <!-- END post__description -->

                    </div>
                    <!-- END post__info -->
                    <?php } 
                ?>
                    <div class="dashed dashed--post"></div>
                </div>
                <!-- END post__content -->
            </div>
            <!-- END post -->
            <?php
           }
        ?>


            <!-- BEGIN pagination-bar -->
            <nav class="filter-bar pagination-bar">
                <a href="#" class="is-active">1</a>
                <a href="#" class="">2</a>
                <a href="#" class="">3</a>
            </nav>
            <!-- END pagination-bar -->

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
</div>
<!-- END container -->
<?php get_footer(); ?>