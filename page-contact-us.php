<?php get_header(); ?>
<div class="container align-center">
    <div class="stripe stripe__page bg-color-orange">
        <h1 class="text-l font-bebas color-white padding_title">CONTACT US</h1>
    </div>
    <div class="page-container flex-layout">
        <div class="page-container__main page-container__main--contact">
            <img class="map" src="<?php bloginfo('template_url'); ?>/images/map.png" />
            <div class="flex-layout flex-layout--nowrap flex-layout--contact">
                <div class="contact__textblock">
                    <p class="text-xs color-gray">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus
                        enim,
                        veniam
                        minima accusantium dolore molestias exercitationem cupiditate hic provident quisquam maxime
                        ipsum
                        eveniet, dolor, laboriosam autem ullam! Quaerat, iste aliquam!
                    </p>
                    <p class="text-xs color-gray"><b><span class="color-orange">Best PSD Freebies</span></b>
                        <br>328 Ave C
                        <br>Saskatoon, SK
                        <br>S7R 2V9
                    </p>
                    <p class="text-xs color-gray">
                        <b>t:</b> (888)222-4444
                        <br><b>f:</b> (888)222-4444
                        <br><b>e:</b> psd@freebies.com
                    </p>
                </div>
                <div class="contact__formblock margin-top--plus">
                    <form class="contact__form">
                        <input type="text" placeholder="FIRSTNAME" class="contact__input color-orange font-bebas text-ssm"/>
                        <input type="text" placeholder="LASTNAME" class="contact__input color-orange font-bebas text-ssm"/>
                        <input type="text" placeholder="EMAIL" class="contact__input color-orange font-bebas text-ssm"/>
                        <textarea type="text" placeholder="MESSAGE" class="contact__input color-orange font-bebas text-ssm"></textarea>
                        <input type="button" class="button align-left font-bebas color-white bg-color-orange text-sm" value="submit"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="page-container__side">
            <div class="page-container__sideblock">
                <div class="flex-layout flex-layout--nowrap">
                    <p class="side__title font-bebas color-orange text-m">ABOUT JETRO</p>
                    <div class="dashed"></div>
                </div>
                <p class="text-xs color-gray">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus enim,
                    veniam
                    minima accusantium dolore molestias exercitationem cupiditate hic provident quisquam maxime ipsum
                    eveniet, dolor, laboriosam autem ullam! Quaerat, iste aliquam!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus obcaecati cumque quod cum
                    voluptatem sapiente voluptas veniam hic esse incidunt, amet aliquid officiis dolor quam quia vitae
                    minus
                    asperiores. Placeat!
                </p>
            </div>
            <div class="page-container__sideblock">
                <div class="flex-layout flex-layout--nowrap">
                    <p class="side__title font-bebas color-orange text-m">CATEGORIES</p>
                    <div class="dashed"></div>
                </div>
                <p class="text-xs color-gray">
                    Video(3)
                    <br>Sport(5)
                    <br>Media(2)
                    <br>Entertainment(7)
                    <br>Life(4)
                    <br>Super Cool Stuff(8)
                </p>
            </div>
            <div class="page-container__sideblock">
                <div class="flex-layout flex-layout--nowrap">
                    <p class="side__title font-bebas color-orange text-m">PHOTO GALLERY</p>
                    <div class="dashed"></div>
                </div>
                <div class="grid-layout">
                    <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" />
                    <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" />
                    <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" />
                    <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" />
                    <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" />
                    <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" />
                    <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" />
                    <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png" />
                </div>
            </div>
        </div>
    </div>
    <section>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
    <?php get_footer(); ?>