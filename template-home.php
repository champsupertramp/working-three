<?php
/**
 * Template Name: Landing Page
 *
 * @since  1.0
 */

 global $wd_wt;
?>
<?php get_header();?>
<div class="home-bg">
    <?php get_template_part('templates/sections/section', 'newsletter'); ?>
    <div class="nav-side-bg"></div>
    <nav class="nav-top">
        <div class="logo-wrap">
            <img class="logo" src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
        </div>
        <div class="menu-wrap">
            <p class="ns-text"><a class="ns-link" href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                    class="ns-arrow" src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>
            </p>
            <?php
            $defaults = array(
              'theme_location'  => 'primary_navigation',
              'menu'            => '',
              'container'       => '',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'menu-top',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => ''
            );


              wp_nav_menu( $defaults );
            ?>
        </div>
        <div class="soc-wrap green-gradient">
            <ul class="soc-menu">
                 <?php  $social_link = cs_get_option( 'social_icon_linkedin' ); ?>
                  <?php if( ! empty( $social_link ) ){ ?>
                    <li class="soc-icons"><a class="soc-link"  href="<?php echo cs_get_option( 'social_icon_linkedin' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
                  <?php } ?>

                  <?php  $social_link = cs_get_option( 'social_icon_facebook' ); ?>
                  <?php if( ! empty( $social_link ) ){ ?>
                    <li class="soc-icons"><a class="soc-link"  href="<?php echo cs_get_option( 'social_icon_facebook' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
                  <?php } ?>

                  <?php  $social_link = cs_get_option( 'social_icon_twitter' ); ?>
                  <?php if( ! empty(  $social_link ) ){ ?>
                    <li class="soc-icons"><a class="soc-link"  href="<?php echo cs_get_option( 'social_icon_twitter' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
                  <?php } ?>
                  <li class="stretch"></li>

            </ul>
            <?php $general_contact = cs_get_option( 'wd-contact-number' ); ?>
            <?php if( ! empty( $general_contact ) ){ ?>
                <p class="soc-phone"><?php echo $general_contact;?></p>
            <?php } ?>
        </div>
    </nav>
    <div class="home-sections">

        <section class="sec-1">
            <a name="1"></a>
            <nav class="nav-side">
                <ul>
                    <li><a href="#1">one</a></li>
                    <li class="hoverable">
                        <span class="normal"><a href="#2">2</a></span><span class="hover"><a href="#2">two</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">four</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#5">5</a></span><span class="hover"><a href="#5">five</a></span>
                    </li>
                </ul>
            </nav>
            <div class="sec-1-content-wrap">
                <div class="sec-1-content">
                    <h1 class="title">Common sense for the <span class="underline">connected world</span></h1>


                    <p class="p1">W3 Digital is a customer and data focused consultancy.</p>

                    <p class="p1">We solve complex problems and deliver success in a customer focused world.</p>

                    <p class="p1">Change the way you interact with your customers.</p>

                    <div class="button">
                        <a href="">Let's get to work&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-2">
            <a name="2"></a>
            <nav class="nav-side">
                <ul>
                    <li class="hoverable">
                        <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                    </li>
                    <li><a href="#2">two</a></li>
                    <li class="hoverable">
                        <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">four</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#5">5</a></span><span class="hover"><a href="#5">five</a></span>
                    </li>
                </ul>
            </nav>
            <div class="sec-2-content-wrap">
                <div class="sec-2-content">
                    <h1 class="title">Always be <span class="underline">outstandin</span>g</h1>

                    <p class="p2">We invent, design and implement outstanding customer experiences.</p>

                    <div>
                        <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe" class="caseStudy" id="caseStudyOne">
                        <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe" class="caseStudy" id="caseStudyTwo">
                        <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe" class="caseStudy" id="caseStudyThree">
                    </div>
                    <div class="button">
                        <a href="">See our work&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-3">
            <a name="3"></a>
            <nav class="nav-side">
                <ul>
                    <li class="hoverable">
                        <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#2">2</a></span><span class="hover"><a href="#2">two</a></span>
                    </li>
                    <li><a href="#3">three</a></li>
                    <li class="hoverable">
                        <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">four</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#5">5</a></span><span class="hover"><a href="#5">five</a></span>
                    </li>
                </ul>
            </nav>
            <div class="sec-3-content-wrap">
                <div class="sec-3-col-a">
                    <h1 class="title"><span class="underline">The skills</span> you need, at the pace you need them</h1>

                    <p class="p1">W3 Digital delivers high impact, simply articulated and actionable advice rapidly and
                        cost
                        effectively.</p>

                    <div class="button">
                        <a href="">See how we can help&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                    </div>
                </div>
                <div class="sec-3-col-b">
                    <div class="col-b-item">
                        <img class="item-img" src="<?php echo $wd_wt->tpl_url['assets'];?>img/insight.png">

                        <div class="item-text">
                            <h2 class="subtitle">Insight</h2>

                            <p class="p1">Find the answers that matter.</p>
                        </div>
                    </div>
                    <div class="col-b-item">
                        <img class="item-img" src="<?php echo $wd_wt->tpl_url['assets'];?>img/strategy.png">

                        <div class="item-text">
                            <h2 class="subtitle">Strategy</h2>

                            <p class="p1">See the path ahead with clarity.</p>
                        </div>
                    </div>
                    <div class="col-b-item">
                        <img class="item-img" src="<?php echo $wd_wt->tpl_url['assets'];?>img/design.png">

                        <div class="item-text">
                            <h2 class="subtitle">Design</h2>

                            <p class="p1">Simple, elegant solutions.</p>
                        </div>
                    </div>
                    <div class="col-b-item">
                        <img class="item-img" src="<?php echo $wd_wt->tpl_url['assets'];?>img/technology.png">

                        <div class="item-text">
                            <h2 class="subtitle">Technology</h2>

                            <p class="p1">Find your competitive edge.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-4">
            <a name="4"></a>
            <nav class="nav-side">
                <ul>
                    <li class="hoverable">
                        <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#2">2</a></span><span class="hover"><a href="#2">two</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                    </li>
                    <li><a href="#4">four</a></li>
                    <li class="hoverable">
                        <span class="normal"><a href="#5">5</a></span><span class="hover"><a href="#5">five</a></span>
                    </li>
                </ul>
            </nav>
            <div class="sec-4-content-wrap">
                <div class="sec-4-col-a">
                    <h1 class="title"><span class="underline">What we know </span>to be true</h1>
                    <div class="p-wrap">
                        <p class="p2">FOCUS ON THE CUSTOMER.</p>

                        <p class="p2-2">Everything else will follow.</p>

                        <p class="p2">MAKE IT SIMPLE.</p>

                        <p class="p2-2">Work hard at making things easy.</p>

                        <p class="p2">BE CURIOUS.</p>

                        <p class="p2-2">The market never stops evolving. Stay interested.</p>
                    </div>
                </div>
                <div class="sec-4-col-b">
                    <p class="p2">Discover more about what we believe in and who we are.</p>
                    <div class="button">
                        <a href="">Discover&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-5">
            <a name="5"></a>
            <nav class="nav-side">
                <ul>
                    <li class="hoverable">
                        <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#2">2</a></span><span class="hover"><a href="#2">two</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">4</a></span>
                    </li>
                    <li><a href="#5">five</a></li>
                </ul>
            </nav>
            <div class="sec-5-content-wrap">
                <div class="sec-5-content">
                    <h1 class="title">Thoughts from <span class="underline">the front line</span></h1>
                    <table>
                        <tr>
                            <td>
                                <p class="blogTitle" id="blogTitle1">DISCUSSION WITH CATHERINE HEATH FROM HUGE INC.</p>

                                <p class="blogDate" id="blogDate1">25th, Oct 2014 in <span class="blogSection" id="blogSection1">Digital, Innovation</span>
                                </p>

                                <p class="blogSnip" id="blogSnip1">Innovation can be a tricky beast to tame, especially in the
                                    digital
                                    space. It's far too easy to get excited about ideas early on and jump into a project without
                                    understanding what impact it may have...</p>

                                <div class="button">
                                    <a href="">Read More&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                                </div>
                            </td>
                            <td>
                                <p class="blogTitle" id="blogTitle2">DISCUSSION WITH CATHERINE HEATH FROM HUGE INC.</p>

                                <p class="blogDate" id="blogDate2">25th, Oct 2014 in <span class="blogSection" id="blogSection2">Digital, Innovation</span>
                                </p>

                                <p class="blogSnip" id="blogSnip2">Innovation can be a tricky beast to tame, especially in the
                                    digital
                                    space. It's far too easy to get excited about ideas early on and jump into a project without
                                    understanding what impact it may have...</p>

                                <div class="button">
                                    <a href="">Read More&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                                </div>
                            </td>
                            <td>
                                <p class="blogTitle" id="blogTitle3">DISCUSSION WITH CATHERINE HEATH FROM HUGE INC.</p>

                                <p class="blogDate" id="blogDate3">25th, Oct 2014 in <span class="blogSection" id="blogSection3">Digital, Innovation</span>
                                </p>

                                <p class="blogSnip" id="blogSnip3">Innovation can be a tricky beast to tame, especially in the
                                    digital
                                    space. It's far too easy to get excited about ideas early on and jump into a project without
                                    understanding what impact it may have...</p>

                                <div class="button">
                                    <a href="">Read More&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                                </div>
                            </td>
                    </table>
                </div>
            </div>
        </section>
        <section class="sec-contact">
            <div class="sec-contact-sidebar black-dark"></div>
            <div class="sec-contact-bg black">
                <div class="sec-contact-content">
                    <p class="sec-contact-text">Create outstanding digital experiences for you and your customers</p>
                    <a class="button" href="">Contact us&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-sidebar grey-dark"></div>
            <div class="footer-bg grey">
                <div class="footer-content">
                    <p>41 Cubitt Street, <br class="br-m">Cremorne VIC 3121, Australia <br class="br-t">Copyright © Working Three</p>

                    <p>+61 3 8060 4700</p>
                </div>
            </div>
        </footer>
    </div>
</div>

<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('.home-bg, .menu-wrap, .soc-wrap').colorScroll({
        colors: [
            {
                color: '#00BCDD',
                position: '0%'
            },
            {
                color: '#FFD03E',
                position: '22%'
            },
            {
                color: '#AA7BC9',
                position: '44%'
            },
            {
                color: '#60C5BA',
                position: '66%'
            },
            {
                color: '#EB6852',
                position: '88%'
            }
        ]
    });

    jQuery('.nav-side-bg, .logo-wrap').colorScroll({
        colors: [
            {
                color: '#00AFD4',
                position: '0%'
            },
            {
                color: '#FFC627',
                position: '22%'
            },
            {
                color: '#906FB4',
                position: '44%'
            },
            {
                color: '#26B8B0',
                position: '66%'
            },
            {
                color: '#E95944',
                position: '88%'
            }
        ]
    });

    jQuery('.home-sections').snapscroll();
});

</script>
<?php get_footer();?>
