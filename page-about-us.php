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
               $paragraph = get_post_meta($post->ID, 'paragraph', true );
               $col1 = get_post_meta($post->ID, 'col-1', true );
               $col2 = get_post_meta($post->ID, 'col-2', true );
               $col3 = get_post_meta($post->ID, 'col-3', true );
               $quote = get_post_meta($post->ID, 'quote', true );
               $media = get_post_meta($post->ID, 'text-media', true );
               $letter = get_post_meta($post->ID, 'letter', true );
               $pos = get_post_meta($post->ID, 'media_position', true );
               
               ?>
            <?= console_log($pos); ?>
            <?php if($paragraph){
                        if($media){
                    ?>

            <div class="paragraphs align-right">
                <img class="about__img align-left margin-right_about" src="<?php echo $media['guid'] ?>" />
                <?php echo $paragraph ?>
            </div>

            <?php } 
                    else if($letter){ ?>
            <div class="paragraphs flex-layout flex-layout--nowrap">
                <div class="align-right">
                    <svg class="about__svg align-left margin-right_about" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="8.467mm" height="8.930mm">
                        <text kerning="auto" font-family="Bebas Neue" fill="rgb(0, 0, 0)" font-size="36px" x="0px"
                            y="34px">
                            <tspan font-size="36px" font-family="HelveticaNeue" font-weight="bold" fill="#E8603C">
                                <?php echo $letter?></tspan>
                        </text>
                    </svg>
                    <?php echo $paragraph ?>
                </div>
            </div>
            <?php } 
                    else{ ?>
            <div class="paragraphs">
                <?php echo $paragraph ?>
            </div>
            <?php }
                    
                    }
                     else if($quote){ ?>

            <!-- BEGIN about__quote -->
            <div class="paragraphs about__quote flex-layout flex-layout--nowrap">
                <div class="about__quote-stripe align-left margin-right_about"></div>
                <i class="maintext align-right">
                    <?php echo $quote?>
                </i>
            </div>
            <!-- END about__quote -->

            <?php } 
                    else if($col1){?>
            <!-- BEGIN block -->
            <div class="paragraphs block flex-layout flex-layout--nowrap">

                <?php if($col2 && !$col3){   ?>
                <div class="align-left margin-right_about"><?php echo $col1 ?></div>
                <div class="align-right"><?php echo $col2 ?></div>
                <?php }
                        else if($col2 && $col3){ ?>
                <div class="about__p"><?php echo $col1 ?>
                </div>
                <div class="about__p"><?php echo $col2 ?>
                </div>
                <div class="about__p"><?php echo $col3 ?>
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
           
           $posts = get_posts( array(
               'numberposts' => -1,
               'category' => 0,
               'orderby' => 'date',
               'order' => 'ASC',
               'include' => array(),
               'exclude' => array(),
               'meta_key' => '',
               'meta_value' => '',
               'post_type' => 'side-block',
               'suppress_filters' => true,
           ));

           foreach($posts as $post){
               setup_postdata($post);
               $paragraph = get_post_meta($post->ID, 'side_text', true );
               $list = get_post_meta($post->ID, 'side_list', true );
               
               ?>
            <!-- BEGIN page-container__sideblock -->
            <div class="page-container__sideblock">

                <!-- BEGIN dashed-title -->
                <div class="dashed-title flex-layout flex-layout--nowrap">
                    <h2 class="side__title maintitle"><?php the_title();?></h2>
                    <div class="dashed"></div>
                </div>
                <!-- END dashed-title -->


                <?php if($paragraph){
                        
                    ?>
                <div class="paragraphs">
                    <?php echo $paragraph ?>
                </div>
                <?php }
                    
                     else if($list){ ?>

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
                <?php } 
                    ?>

            </div>
            <!-- END page-container__sideblock -->

            <?php  
                 
           }
        
        ?>
            <!-- BEGIN page-container__sideblock -->
            <div class="page-container__sideblock">

                <!-- BEGIN dashed-title -->
                <div class="dashed-title flex-layout flex-layout--nowrap">
                    <h2 class="side__title maintitle">ABOUT JETRO</h2>
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
                    <h2 class="side__title maintitle">CATEGORIES</h2>
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
                    <h2 class="side__title maintitle">PHOTO GALLERY</h2>
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