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
        <div class="page-container__main page-container__main--blog">

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
               $slider = get_post_meta($post->ID, 'post_shortcode', true );
               $descr = get_post_meta($post->ID, 'post_description', true );
               $icon = get_post_meta($post->ID, 'post_icon', true );
               $media = get_post_meta($post->ID, 'post_media', true );
               $quote = get_post_meta($post->ID, 'post_quote', true );
               $url = get_post_meta($post->ID, 'post_url', true );
               $mtitle = get_post_meta($post->ID, 'meta_title', true );
               $mdesc = get_post_meta($post->ID, 'meta_desc', true );

               
               ?>
            <!-- BEGIN post -->
            <div class="post grid-layout grid-layout__post">

                <!-- BEGIN post__iconblock -->
                <div class="post__iconblock">

                    <!-- BEGIN post__icon -->
                    <div class="post__icon bg-color-orange">
                        <img src="<?php echo $icon['guid'] ?>" class="post__svg" />
                    </div>
                    <!-- END post__icon -->
                </div>
                <!-- END post__iconblock -->

                <!-- BEGIN post__content -->
                <div class="post__content">

                    <?php if($quote){
                    ?>
                    <!-- BEGIN post__quote -->
                    <div class="post__quote bg-color-lightgray">
                        <i class="maintext align-right"><span class="align-left margin-span__blog"><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="8.819mm" height="7.056mm">
                                    <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)" font-size="72px"
                                        x="0px" y="55px">
                                        <tspan font-size="72px" font-family="Georgia" fill="#E8663C">&#8220;</tspan>
                                    </text>
                                </svg></span><?php echo get_post_meta($post->ID, 'post_quote', true ); ?></i>
                    </div>
                    <!-- END post__quote -->
                    <?php } 
                     else if($url){ ?>

                    <!-- BEGIN post__info -->
                    <div class="post__info">
                        <h2 class="maintitle">SOME OF THE BEST FREEBIES ON THE WEB</h2>
                        <p class="post__metap">www.bestpsdfreebies.com</p>
                        <p class="maintext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos
                            at
                            aperiam magni
                            facere.
                            Mollitia laudantium rerum quasi corporis iure totam molestiae expedita, quibusdam magni,
                            accusamus illo
                            doloremque natus molestias tempore!
                        </p>
                    </div>
                    <!-- END post__info -->
                    <?php } 
                    else { 
                        if($slider){?>

                    <!-- BEGIN slider -->
                    <div class="slider block">
                        <?php echo get_post_meta($post->ID, 'post_slider', true ); ?>
                    </div>
                    <!-- END slider -->
                    <?php }
                        if($media){ ?>
                    <div class="block">
                        <img class="post__media" src="<?php echo $media['guid'] ?>" />
                    </div>

                    <?php }?>
                    <!-- BEGIN post__info -->
                    <div class="post__info flex-layout flex-layout--nowrap">

                        <!-- BEGIN post__metadata -->
                        <div class="post__metadata">
                            <p class="post__metatitle"><?php echo $mtitle ?></p>
                            <p class="post__metap"><?php echo $mdesc ?></p>
                        </div>
                        <!-- END post__metadata -->

                        <!-- BEGIN post__description -->
                        <div class="post__description">
                            <h2 class="maintitle"><?php the_title(); ?></h2>
                            <p class="maintext"><?php echo $descr ?>
                            </p>
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

            <!-- BEGIN page-container__sideblock -->
            <div class="page-container__sideblock">

                <!-- BEGIN dashed-title -->
                <div class="dashed-title flex-layout flex-layout--nowrap">
                    <p class="side__title maintitle">ABOUT JETRO</p>
                    <div class="dashed"></div>
                </div>
                <!-- END dashed-title -->

                <p class="maintext">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus enim,
                    veniam
                    minima accusantium dolore molestias exercitationem cupiditate hic provident quisquam maxime ipsum
                    eveniet, dolor, laboriosam autem ullam! Quaerat, iste aliquam!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus obcaecati cumque quod cum
                    voluptatem sapiente voluptas veniam hic esse incidunt, amet aliquid officiis dolor quam quia vitae
                    minus
                    asperiores. Placeat!
                </p>
            </div>
            <!-- END page-container__sideblock -->

            <!-- BEGIN page-container__sideblock -->
            <div class="page-container__sideblock">

                <!-- BEGIN dashed-title -->
                <div class="dashed-title flex-layout flex-layout--nowrap">
                    <p class="side__title maintitle">CATEGORIES</p>
                    <div class="dashed"></div>
                </div>
                <!-- END dashed-title -->
                <!-- BEGIN category-block -->
                <div class="category-block">
                    <a href="#" class="">Video(3)</a>
                    <a href="#" class="">Sport(5)</a>
                    <a href="#" class="">Media(2)</a>
                    <a href="#" class="">Entertainment(7)</a>
                    <a href="#" class="">Life(4)</a>
                    <a href="#" class="">Super Cool Stuff(8)</a>
                </div>
                <!-- END category-block -->
            </div>
            <!-- END page-container__sideblock -->

            <!-- BEGIN page-container__sideblock -->
            <div class="page-container__sideblock">

                <!-- BEGIN dashed-title -->
                <div class="dashed-title flex-layout flex-layout--nowrap">
                    <p class="side__title maintitle">PHOTO GALLERY</p>
                    <div class="dashed"></div>
                </div>
                <!-- END dashed-title -->

                <!-- BEGIN min-gallery -->
                <div class="min-gallery grid-layout">
                    <a href="#"><img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" /></a>
                    <a href="#"><img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" /></a>
                    <a href="#"><img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" /></a>
                    <a href="#"><img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" /></a>
                    <a href="#"><img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" /></a>
                    <a href="#"><img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" /></a>
                    <a href="#"><img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" /></a>
                    <a href="#"><img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" /></a>
                </div>
                <!-- END min-gallery -->
            </div>
            <!-- END page-container__sideblock -->
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