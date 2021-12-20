<?php get_header(); ?>
<div class="container aligncenter">
<div class="stripe stripe__page">
        <h1 class="text-xlg">CONTACT US</h1>
    </div>
    <div class="about flex-layout">
        <div class="about__main contact-us__main">
            <img class="map" src="<?php bloginfo('template_url'); ?>/images/map.png"/>
            <div class="flex-layout flex-layout__contact">
                <div class="text-block">
                <p class="about__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus enim, veniam
                    minima accusantium dolore molestias exercitationem cupiditate hic provident quisquam maxime ipsum
                    eveniet, dolor, laboriosam autem ullam! Quaerat, iste aliquam!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus obcaecati cumque quod cum
                    voluptatem sapiente voluptas veniam hic esse incidunt, amet aliquid officiis dolor quam quia vitae
                    minus asperiores. Placeat!
                </p>
                <p class="about__text"><b><span class="color-orange">Best PSD Freebies</span></b>
                <br>328 Ave C
                <br>Saskatoon, SK
                <br>S7R 2V9
                </p>
                <p class="about__text">
                <b>t:</b> (888)222-4444
                <br><b>f:</b> (888)222-4444
                <br><b>e:</b> psd@freebies.com
                </p>
                </div>
                <div class="form-block">
                    <form>
                        <input type="text" placeholder="name"/>
                        <input type="text" placeholder="last name"/>
                        <input type="text" placeholder="email"/>
                        <textarea type="text" placeholder="message"></textarea>
</form>
                </div>
            </div>
        </div>
        <div class="about__side">
            <div class="flex-layout side__titleblock">
                <p class="font-title post__title recent__title side__title">ABOUT JETRO</p>
                <div class="dashed"></div>
            </div>
            <p class="about__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus enim, veniam
                minima accusantium dolore molestias exercitationem cupiditate hic provident quisquam maxime ipsum
                eveniet, dolor, laboriosam autem ullam! Quaerat, iste aliquam!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus obcaecati cumque quod cum
                voluptatem sapiente voluptas veniam hic esse incidunt, amet aliquid officiis dolor quam quia vitae minus
                asperiores. Placeat!
            </p>
            <div class="flex-layout side__titleblock">
                <p class="font-title post__title recent__title side__title">CATEGORIES</p>
                <div class="dashed"></div>
            </div>
            <p class="about__text">
                Video(3)
                <br>Sport(5)
                <br>Media(2)
                <br>Entertainment(7)
                <br>Life(4)
                <br>Super Cool Stuff(8)
            </p>
            <div class="flex-layout side__titleblock">
                <p class="font-title post__title recent__title side__title">PHOTO GALLERY</p>
                <div class="dashed"></div>
            </div>
            <div class="grid-layout__side">
                <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png"/>
                <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png"/>
                <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png"/>
                <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png"/>
                <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png"/>
                <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png"/>
                <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png"/>
                <img class="sq" src="<?php bloginfo('template_url'); ?>/images/square.png"/>
            </div>
        </div>
    <section>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
    <?php get_footer(); ?>