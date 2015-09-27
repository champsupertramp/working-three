<?php
/**
 * Template Name: Blog
 *
 *  @since  1.0
 */
 global $wd_wt;
?>
<?php get_header();?>
<?php get_template_part('templates/sections/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/section', 'inner-head'); ?>
<nav class="bottomNav">
    <div class="mNavWrapper">
        <div class="mNavLink">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-services.svg"></a>

            <p><a href="">Services</a></p>
        </div>
        <div class="mNavLink">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-work.svg"></a>

            <p><a href=""><span class="tablet">Our </span>Work</a></p>
        </div>
        <div class="mNavLink">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-leadership.svg"></a>

            <p><a href="">Leadership</a></p>
        </div>
        <div class="mNavLink">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-insights.svg"></a>

            <p><a href="">Insights</a></p>
        </div>
        <div class="mNavLink">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-contact.svg"></a>

            <p><a href="">Contact<span class="tablet"> Us</span></a></p>
        </div>
        <div class="mNavLink">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.svg"></a>

            <p><a href="">More</a></p>
        </div>
    </div>
</nav>
<section class="section1">
    <div class="sideBar"></div>
    <!--<div class="navBlock"></div>-->
    <div class="s1Content">
        <div class="s1Title"><span>We think</span> about<br /> people and data <span>a lot</span></div>
        <div class="s1Text">
            <p>Read our blog to find insights into the changing ways customers and businesses are <br />engaging, and how we can use data to keep up.</p>
        </div>
    </div>
</section>
<nav class="nav-top" id="topNav2">
    <div class="logoWrapper">
        <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
    </div>
    <div class="navWrapper">
        <p class="newsletter"><a href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>
        </p>
        <ul class="navMenu">
            <li><a href=""><span>Services</span></a></li>
            <li><a href=""><span>Our Work</span></a></li>
            <li><a href=""><span>Leadership</span></a></li>
            <li><a href=""><span>Insights</span></a></li>
            <li><a href=""><span>Contact Us</span></a></li>
        </ul>
    </div>
    <div class="socialWrapper">
        <ul>
            <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
            <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
            <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
        </ul>
        <p>+61 3 8060 4700</p>
    </div>
</nav>
<section class="section2">
    <div class="sideBar">
        <nav class="nav-side nav-side-grey">
      <form action="" class="search-form" method="get" role="search">
        <input type="text" id="search" name="s" value="" placeholder="Search" class="sb-search-input">
      </form>
          <p>Filter articles by:</p>
            <ul>
                <li><a href="#" class="active">All</a></li>
                <li><a href="#">Insights</a></li>
                <li><a href="#">Strategy</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Technology</a></li>
            </ul>
        </nav>
    </div>
    <div class="s2content">
        <div class="wrapper">
                    <table>
                        <tr>
                            <td>
                                <p class="blogTitle" id="blogTitle1">DISCUSSION WITH CATHERINE HEATH FROM HUGE INC.</p>

                                <p class="blogDate" id="blogDate1">25th, Oct 2014 in <span class="blogSection" id="blogSection1"><a href="#">Digital</a>, <a href="#">Innovation</a></span>
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

                                <p class="blogDate" id="blogDate2">25th, Oct 2014 in <span class="blogSection" id="blogSection2"><a href="#">Thinking</a></span>
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

                                <p class="blogDate" id="blogDate3">25th, Oct 2014 in <span class="blogSection" id="blogSection3"><a href="#">Digital</a>, <a href="#">Innovation</a></span>
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
        <div class="wrapper">
                    <table>
                        <tr>
                            <td>
                                <p class="blogTitle" id="blogTitle1">DISCUSSION WITH CATHERINE HEATH FROM HUGE INC.</p>

                                <p class="blogDate" id="blogDate1">25th, Oct 2014 in <span class="blogSection" id="blogSection1"><a href="#">Digital</a>, <a href="#">Innovation</a></span>
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

                                <p class="blogDate" id="blogDate2">25th, Oct 2014 in <span class="blogSection" id="blogSection2"><a href="#">Thinking</a></span>
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

                                <p class="blogDate" id="blogDate3">25th, Oct 2014 in <span class="blogSection" id="blogSection3"><a href="#">Digital</a>, <a href="#">Innovation</a></span>
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
        <div class="wrapper">
                    <table>
                        <tr>
                            <td>
                                <p class="blogTitle" id="blogTitle1">DISCUSSION WITH CATHERINE HEATH FROM HUGE INC.</p>

                                <p class="blogDate" id="blogDate1">25th, Oct 2014 in <span class="blogSection" id="blogSection1"><a href="#">Digital</a>, <a href="#">Innovation</a></span>
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

                                <p class="blogDate" id="blogDate2">25th, Oct 2014 in <span class="blogSection" id="blogSection2"><a href="#">Thinking</a></span>
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

                                <p class="blogDate" id="blogDate3">25th, Oct 2014 in <span class="blogSection" id="blogSection3"><a href="#">Digital</a>, <a href="#">Innovation</a></span>
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
        <div class="wrapper">
          <p class="blog_pagination">
            <a href="#1">&#8592;</a>
            <a href="#1">1</a>
            <a href="#2">2</a>
            <a href="#3">3</a>
            <a href="#4">4</a>
            <a href="#5">5</a>
            <a href="#6">6</a>
            <a href="#7">7</a>
            <a href="#7">&#8594;</a>
          </p>
        </div>

    </div>
</section>
<nav class="nav-top">
    <div class="logoWrapper">
        <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
    </div>
    <div class="navWrapper">
        <p class="newsletter"><a href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>
        </p>
        <ul class="navMenu">
            <li><a href=""><span>Services</span></a></li>
            <li><a href=""><span>Our Work</span></a></li>
            <li><a href=""><span>Leadership</span></a></li>
            <li><a href=""><span>Insights</span></a></li>
            <li><a href=""><span>Contact Us</span></a></li>
        </ul>
    </div>
    <div class="socialWrapper">
        <ul>
            <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
            <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
            <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
        </ul>
        <p>+61 3 8060 4700</p>
    </div>
</nav>
<section class="sec-2">
    <div class="sec-2-sidebar purple-dark"></div>
    <div class="sec-2-bg purple">
        <div class="sec-2-content">
            <p class="p2">Subscribe to our newsletter for the latest in <br>customer experience, design and big data. </p>
            <form class="signup-form" action="" method="post">
                <div class="input-name">
                    <input id="sub-name" type="text" value="" name="name" placeholder="Name*" required>
                </div>
                <div class="input-email">
                    <input id="sub-email" type="text" value="" name="email" placeholder="Email*" required>
                </div>
                <div class="form-button">
                    <button class="button" type="submit">Sign me up&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png">
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="contact">
    <div class="contactDark"></div>
    <div class="contactContent">
        <p>Create outstanding digital experiences for you and your customers</p>

        <div class="contactButton"><a href="">Contact Us&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a></div>
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

<script type="text/css">
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(document).scrollTop() > $(window).height() * 0.55) {
                $(".topNav").addClass("scrolled2", 300, "linear");
            } else {
                $(".topNav").removeClass("scrolled2", 300, "linear");
            }

        });

    });
</script>
<?php get_footer(); ?>
