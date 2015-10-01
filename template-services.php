<?php
/**
 * Template Name: How We Work ( Services )
 *
 * @since  1.0
 */

 global $wd_wt;
 global $swap_color;
 $swap_color = new stdClass();
 $swap_color->logo = 'purple-gradient-dark';
 $swap_color->main_menu = 'purple-gradient';
 $swap_color->social_menu = 'purple-gradient';

?>
<?php get_header();?>
<?php get_template_part('templates/sections/header/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/header/section', 'inner-head'); ?>
<?php get_template_part('templates/sections/header/section', 'more-menu'); ?>
<?php get_template_part('templates/sections/header/section', 'nav-bottom'); ?>

<section class="section1">
    <div class="sideBar"></div>
    <!--<div class="navBlock"></div>-->
    <div class="s1Content">
      <?php while( have_posts() ){ the_post();?>
        <div class="s1Title"><?php the_title(); ?></div>
        <div class="s1Text">
        <?php the_content(); ?>
        </div>
      <?php } ?>
    </div>
</section>
<section class="section2">
    <div class="sideBar"></div>
    <div class="s2content">
        <div class="wrapper">
            <p class="title">Insight</p>
            <img src="<?php echo $wd_wt->tpl_url['assets']; ?>img/insight-purple.png">

            <div class="contentWrapper">
                <p class="text">We ask questions seek answers everything. We make
                    sure we find every opportunity to grow your business
                    and make your customer smile.</p>

                <p class="subText">Customer, business and market analysis, underpinned with leading data analysis
                    techniques, identify the opportunities to be outstanding in your market.</p>
            </div>
        </div>
        <div class="wrapper">
            <p class="title">Strategy</p>
            <img src="<?php echo $wd_wt->tpl_url['assets']; ?>img/strategy-purple.png">

            <div class="contentWrapper">
                <p class="text">We create a game plan that all stakeholders can
                    understand and get behind. We understand the
                    importance of making it easy to navigate the strategy
                    through the business, from development to execution.</p>

                <p class="subText">We'll work with you to set the strategic direction, build the business case and
                    identify
                    and manage the change required to realise value.</p>
            </div>
        </div>
        <div class="wrapper">
            <p class="title">Design</p>
            <img src="<?php echo $wd_wt->tpl_url['assets']; ?>img/design-purple.png">

            <div class="contentWrapper">
                <p class="text">Whether a beautiful website or an internal platform,
                    good design creates great experiences, both for the
                    customer and the client.</p>

                <p class="subText">Our problem solving approach encompasses organisational design, service design,
                    experience design and process design. This means you can ensure the right projects are
                    executed for the right reasons.</p>
            </div>
        </div>
        <div class="wrapper">
            <p class="title">Technology</p>
            <img src="<?php echo $wd_wt->tpl_url['assets']; ?>img/technology-purple.png">

            <div class="contentWrapper">
                <p class="text">The way that customers engage is changing at an
                    ever-increasing pace. We give your business the tools to
                    keep up with that change, and be the leaders in your
                    field.</p>

                <p class="subText">To be outstanding in today's market you need to know how to utilise your customer
                    data
                    to create the experiences your customers will value. W3's technology team ensure the
                    most effective systems are in place [and they are integrated into your entire business.</p>
            </div>
        </div>
    </div>
</section>
<section class="section3">
    <div class="sideBar"></div>
    <div class="content">
        <div class="wrapper">
            <p class="title"><span>The sum</span> of our parts</p>

            <p class="text">The combined ???? of these capabilities help us create better experiences for your
                customers. Good experiences increase engagement and return business, lowering costs
                and increasing profits.</p>

            <p class="text">Most importantly, they lay the foundation for a meaningful relationship with a loyal
                customer.</p>

            <p class="subText">Be outstanding.</p>

            <div class="button"><a href="">Let's get to work&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets']; ?>img/btn-arrow.png"></a>
            </div>
        </div>
    </div>
</section>
<section class="contact">
    <div class="contactDark"></div>
    <div class="contactContent">
        <p>Create outstanding digital experiences for you and your customers</p>

        <div class="contactButton"><a href="">Contact Us&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets']; ?>img/btn-arrow.png"></a></div>
    </div>
</section>
<footer>
    <div class="footerDark"></div>
    <div class="footerContent">
        <p class="footerD">41 Cubitt Street, Cremorne VIC 3121, Australia Copyright © Working Three&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+61
            3 8060 4700</p>
        <p class="footerT">41 Cubitt Street, Cremorne VIC 3121, Australia <br>Copyright © Working Three</p>
        <p class="footerT">+61 3 8060 4700</p>
    </div>
</footer>
<div class="mSpace">asd</div>
<div class="tSpace">asd</div>

<?php get_footer(); ?>
