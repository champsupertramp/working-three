<?php global $wd_wt; ?>
<div id="desktop">
<nav class="nav-top">
    <div class="logoWrapper">
        <img src="<?php echo $wd_wt->tpl_url['img']; ?>/w3logo.png">
    </div>
    <div class="navWrapper">
        <p class="newsletter">
        <?php  $has_enabled = cs_get_option( 'wd_enable_newsletter' );?>
        <?php if( $has_enabled ){ ?>
        <a href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['img']; ?>/newsletter-arrow.png"></a>
        <?php } ?>
        </p>

        <?php
          $defaults = array(
            'theme_location'  => 'primary_navigation',
            'menu'            => '',
            'container'       => false,
          );

          wp_nav_menu( $defaults );
        ?>

    </div>
    <div class="socialWrapper">
        <ul>
              <?php  $social_link = cs_get_option( 'social_icon_linkedin' ); ?>
              <?php if( ! empty( $social_link ) ){ ?>
                <li><a href="<?php echo cs_get_option( 'social_icon_linkedin' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
              <?php } ?>

              <?php  $social_link = cs_get_option( 'social_icon_facebook' ); ?>
              <?php if( ! empty( $social_link ) ){ ?>
                <li><a href="<?php echo cs_get_option( 'social_icon_facebook' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
              <?php } ?>

              <?php  $social_link = cs_get_option( 'social_icon_twitter' ); ?>
              <?php if( ! empty(  $social_link ) ){ ?>
                <li><a href="<?php echo cs_get_option( 'social_icon_twitter' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
              <?php } ?>
        </ul>
        <?php  $general_contact = cs_get_option( 'wd-contact-number' ); ?>
        <?php if( ! empty( $general_contact ) ){ ?>
            <p><?php echo $general_contact;?></p>
        <?php } ?>
    </div>
</nav>
<a name="1"></a>
<section class="sectionOne">
    <nav class="sideNav">
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
    <div class="mainWrapper">
        <h1>Common sense for<br>the <span>connected world</span></h1>

        <div class="contentWrapper">
            <p>W3 Digital is a customer and data focused consultancy.</p>

            <p>We solve complex problems and deliver success in a customer focused world.</p>

            <p>Change the way you interact with your customers.</p>
        </div>
        <div class="button">
            <a href="">Let's get to work&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
        </div>

    </div>

</section>

<a name="2"></a>
<nav class="nav-top" id="mobileSection2">
    <div class="logoWrapper">
        <img src="<?php echo $wd_wt->tpl_url['assets'];?>/img/w3logo.png">
    </div>
    <div class="navWrapper">
        <p class="newsletter"><a href="">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>
        </p>
        <ul>
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
<section class="sectionTwo">
    <nav class="sideNav">
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
    <div class="mainWrapper">
        <h1>Always be <span>outstandin</span>g</h1>

        <p>We invent, design and implement outstanding customer experiences.</p>

        <div>
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe" class="caseStudy" id="caseStudyOne">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe" class="caseStudy" id="caseStudyTwo">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe" class="caseStudy" id="caseStudyThree">
        </div>
        <div class="button">
            <a href="">See our work&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
        </div>
    </div>
</section>
<a name="3"></a>
<section class="sectionThree">
    <nav class="sideNav">
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
    <div class="mainWrapper">
        <div class="leftContent">
            <h1><span>The skills</span> you<br>need, at the pace<br>you need them</h1>

            <p>W3 Digital delivers high impact, simply articulated and actionable advice rapidly and cost
                effectively.</p>

            <div class="button">
                <a href="">See how we can help&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
            </div>
        </div>
        <div class="rightContent">
            <div>
                <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/insight.png">

                <div>
                    <h2>Insight</h2>

                    <p>Find the answers that matter.</p>
                </div>
            </div>
            <div>
                <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/strategy.png">

                <div>
                    <h2>Strategy</h2>

                    <p>See the path ahead with clarity.</p>
                </div>
            </div>
            <div>
                <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/design.png">

                <div>
                    <h2>Design</h2>

                    <p>Simple, elegant solutions.</p>
                </div>
            </div>
            <div>
                <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/technology.png">

                <div>
                    <h2>Technology</h2>

                    <p>Find your competitive edge.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<a name="4"></a>
<section class="sectionFour">
    <nav class="sideNav">
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
    <div class="mainWrapper">
        <h1><span>What we know</span><br>to be true</h1>
        <table>
            <tr>
                <td>FOCUS ON THE CUSTOMER.<br>Everything else will follow.</td>
                <td></td>
            </tr>
            <tr>
                <td>MAKE IT SIMPLE.<br>Work hard at making things easy.</td>
                <td></td>
            </tr>
            <tr>
                <td>BE CURIOUS.<br>The market never stops evolving.<br>Stay interested.</td>
                <td><br>Discover more about what we<br>believe in and who we are.</td>
            </tr>
        </table>
        <div class="button">
            <a href="">Discover&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
        </div>
    </div>
</section>
<a name="5"></a>
<section class="sectionFive">
    <nav class="sideNav">
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
                <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">5</a></span>
            </li>
            <li><a href="#5">five</a></li>
        </ul>
    </nav>
    <div class="mainWrapper">
        <h1>Thoughts<br>from <span>the<br>front line</span></h1>
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
        <p>41 Cubitt Street, Cremorne VIC 3121, Australia Copyright © Working Three&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+61
            3 8060 4700</p>
    </div>
</footer>

</div>
