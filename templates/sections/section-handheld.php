<?php  global $wd_wt; ?>
<!--MOBILE/TABLET-->

<div id="mobile">

<section class="mSection1">
    <a name="t1"></a>
    <header class="mHeader">
        <div class="logoWrapper">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
        </div>
        <p class="mNewsletter"><a href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>

        <div class="mSocWrapper">
            <ul>
              <?php  $social_link = cs_get_option( 'social_icon_linkedin' ); ?>
              <?php if( ! empty( $social_link ) ){ ?>
                <li><a href="<?php echo $social_link;?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
              <?php } ?>

              <?php  $social_link = cs_get_option( 'social_icon_facebook' ); ?>
              <?php if( ! empty( $social_link ) ){ ?>
                <li><a href="<?php echo $social_link;?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
              <?php } ?>

              <?php  $social_link = cs_get_option( 'social_icon_twitter' ); ?>
              <?php if( ! empty(  $social_link ) ){ ?>
                <li><a href="<?php echo $social_link;?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
              <?php } ?>
            </ul>

            <?php  $general_contact = cs_get_option( 'wd-contact-number' ); ?>
            <?php if( ! empty( $general_contact ) ){ ?>
            <p><?php echo $general_contact;?></p>
            <?php } ?>
        </div>
    </header>
    <nav class="tSideNav">
        <a class="tSideActive1" href="#t1">1</a>
        <a href="#t2">2</a>
        <a href="#t3">3</a>
        <a href="#t4">4</a>
        <a href="#t5">5</a>
    </nav>
    <div class="mContentWrapper">
        <div class="mContent">
            <h1>Common sense<br>for the<br><span>connected world</span></h1>

            <div class="mText">
                <p>W3 Digital is a customer and data focused consultancy.</p>

                <p>We solve complex problems and deliver success in a customer focused world.</p>

                <p>Change the way you interact with your customers.</p>
            </div>
            <div class="mButton">
                <a href="">Let's get to work&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
            </div>
        </div>
    </div>
    <nav class="mNav">
        <div class="mNavWrapper">
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-insights.png"></a>

                <p><a href="">Services</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-leadership.png"></a>

                <p><a href="">Work</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-contact.png"></a>

                <p><a href="">Contact</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.png"></a>

                <p><a href="">More</a></p>
            </div>
        </div>
    </nav>
    <nav class="tNav">
        <div class="tNavWrapper">
            <a href="">Services</a>
            <a href="">Our Work</a>
            <a href="">Leadership</a>
            <a href="">Insights</a>
            <a href="">Contact Us</a>
        </div>
    </nav>
</section>

<section class="mSection2">
    <a name="t2"></a>
    <header class="mHeader">
        <div class="logoWrapper">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
        </div>
        <p class="mNewsletter"><a href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>

        <div class="mSocWrapper">
            <ul>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
            </ul>
            <p>+61 3 8060 4700</p>
        </div>
    </header>
    <nav class="tSideNav">
        <a href="#t1">1</a>
        <a class="tSideActive2" href="#t2">2</a>
        <a href="#t3">3</a>
        <a href="#t4">4</a>
        <a href="#t5">5</a>
    </nav>
    <div class="mContentWrapper">
        <div class="mContent">
            <h1>Always be<br><span>outstandin</span>g</h1>

            <p>We invent, design and<br class="m2br"> implement outstanding<br class="m2br"> customer experiences.</p>

            <div class="<?php echo $wd_wt->tpl_url['assets'];?>imgWrapper">
                <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe" class="caseStudy" id="mCaseStudyOne">
                <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe" class="caseStudy" id="mCaseStudyTwo">
            </div>
            <div class="mButton">
                <a href="">See our work&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
            </div>
        </div>
    </div>
    <nav class="mNav">
        <div class="mNavWrapper">
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-insights.png"></a>

                <p><a href="">Services</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-leadership.png"></a>

                <p><a href="">Work</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-contact.png"></a>

                <p><a href="">Contact</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.png"></a>

                <p><a href="">More</a></p>
            </div>
        </div>
    </nav>
    <nav class="tNav">
        <div class="tNavWrapper">

        <?php
          $defaults = array(
            'theme_location'  => 'primary_navigation',
            'menu'            => '',
            'container'       => false,
          );

          wp_nav_menu( $defaults );
        ?>
        </div>
    </nav>
</section>

<section class="mSection3">
    <a name="t3"></a>
    <header class="mHeader">
        <div class="logoWrapper">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
        </div>
        <p class="mNewsletter"><a href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>

        <div class="mSocWrapper">
            <ul>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
            </ul>
            <p>+61 3 8060 4700</p>
        </div>
    </header>
    <nav class="tSideNav">
        <a href="#t1">1</a>
        <a href="#t2">2</a>
        <a class="tSideActive3" href="#t3">3</a>
        <a href="#t4">4</a>
        <a href="#t5">5</a>
    </nav>
    <div class="mContentWrapper">
        <div class="mContent">
            <h1><span>The skills</span> you<br>
                need, at the<br>
                pace you need<br>
                them</h1>

            <p>W3 Digital delivers high impact, simply articulated and actionable advice rapidly and cost
                effectively.</p>

            <div class="mTiles">
                <div>
                    <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/insight.png">

                    <div>
                        <h2>Insight</h2>

                        <p>Find the answers <br class="m2br">that matter.</p>
                    </div>
                </div>
                <div>
                    <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/strategy.png">

                    <div>
                        <h2>Strategy</h2>

                        <p>See the path ahead <br class="m2br">with clarity.</p>
                    </div>
                </div>
                <div>
                    <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/design.png">

                    <div>
                        <h2>Design</h2>

                        <p>Simple, <br class="m2br">elegant solutions.</p>
                    </div>
                </div>
                <div>
                    <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/technology.png">

                    <div>
                        <h2>Technology</h2>

                        <p>Find your <br class="m2br">competitive edge.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="mNav">
        <div class="mNavWrapper">
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-insights.png"></a>

                <p><a href="">Services</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-leadership.png"></a>

                <p><a href="">Work</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-contact.png"></a>

                <p><a href="">Contact</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.png"></a>

                <p><a href="">More</a></p>
            </div>
        </div>
    </nav>
    <nav class="tNav">
        <div class="tNavWrapper">
            <a href="">Services</a>
            <a href="">Our Work</a>
            <a href="">Leadership</a>
            <a href="">Insights</a>
            <a href="">Contact Us</a>
        </div>
    </nav>
</section>

<section class="mSection4">
    <a name="t4"></a>
    <header class="mHeader">
        <div class="logoWrapper">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
        </div>
        <p class="mNewsletter"><a href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>

        <div class="mSocWrapper">
            <ul>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
            </ul>
            <p>+61 3 8060 4700</p>
        </div>
    </header>
    <nav class="tSideNav">
        <a href="#t1">1</a>
        <a href="#t2">2</a>
        <a href="#t3">3</a>
        <a class="tSideActive4" href="#t4">4</a>
        <a href="#t5">5</a>
    </nav>
    <div class="mContentWrapper">
        <div class="mContent">
            <h1><span>What we</span> know<br> to be true</h1>

            <p>FOCUS ON THE CUSTOMER.<br>Everything else will follow.</p>

            <p>MAKE IT SIMPLE.<br>Work hard at making <br class="m2br">things easy.</p>

            <p>BE CURIOUS.<br>The market never stops <br class="m2br">evolving. <br class="m3br">Stay interested.</p>

            <p>Discover more about what <br class="m2br">we <br class="m3br"> believe in and who we are.</p>

            <div class="mButton">
                <a href="">Discover&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
            </div>
        </div>
    </div>
    <nav class="mNav">
        <div class="mNavWrapper">
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-insights.png"></a>

                <p><a href="">Services</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-leadership.png"></a>

                <p><a href="">Work</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-contact.png"></a>

                <p><a href="">Contact</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.png"></a>

                <p><a href="">More</a></p>
            </div>
        </div>
    </nav>
    <nav class="tNav">
        <div class="tNavWrapper">
            <a href="">Services</a>
            <a href="">Our Work</a>
            <a href="">Leadership</a>
            <a href="">Insights</a>
            <a href="">Contact Us</a>
        </div>
    </nav>
</section>

<section class="mSection5">
    <a name="t5"></a>
    <header class="mHeader">
        <div class="logoWrapper">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
        </div>
        <p class="mNewsletter"><a href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>

        <div class="mSocWrapper">
            <ul>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
                <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
            </ul>
            <p>+61 3 8060 4700</p>
        </div>
    </header>
    <nav class="tSideNav">
        <a href="#t1">1</a>
        <a href="#t2">2</a>
        <a href="#t3">3</a>
        <a href="#t4">4</a>
        <a class="tSideActive5" href="#t5">5</a>
    </nav>
    <div class="mContentWrapper">
        <div class="mContent">
            <h1>Thoughts<br>from <span>the<br>front line</span></h1>

            <div>
                <p class="mBlogTitle" id="mBlogTitle1">DISCUSSION WITH CATHERINE HEATH FROM HUGE INC.</p>

                <p class="mBlogDate" id="mBlogDate1">25th, Oct 2014 in <span class="mBlogSection" id="mBlogSection1">Digital, Innovation</span>
                </p>

                <p class="mBlogSnip" id="mBlogSnip1">Innovation can be a tricky beast to tame, especially in the
                    digital
                    space. It's far too easy to get excited about ideas early on and jump into a project without
                    understanding what impact it may have...</p>

                <div class="mButton">
                    <a href="">Read More&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                </div>
            </div>
            <div>
                <p class="mBlogTitle" id="mBlogTitle2">DISCUSSION WITH CATHERINE HEATH FROM HUGE INC.</p>

                <p class="mBlogDate" id="mBlogDate2">25th, Oct 2014 in <span class="mBlogSection" id="mBlogSection2">Digital, Innovation</span>
                </p>

                <p class="mBlogSnip" id="mBlogSnip2">Innovation can be a tricky beast to tame, especially in the
                    digital
                    space. It's far too easy to get excited about ideas early on and jump into a project without
                    understanding what impact it may have...</p>

                <div class="mButton">
                    <a href="">Read More&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="mNav">
        <div class="mNavWrapper">
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-insights.png"></a>

                <p><a href="">Services</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-leadership.png"></a>

                <p><a href="">Work</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-contact.png"></a>

                <p><a href="">Contact</a></p>
            </div>
            <div class="mNavLink">
                <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.png"></a>

                <p><a href="">More</a></p>
            </div>
        </div>

    </nav>
    <nav class="tNav">
        <div class="tNavWrapper">
            <a href="">Services</a>
            <a href="">Our Work</a>
            <a href="">Leadership</a>
            <a href="">Insights</a>
            <a href="">Contact Us</a>
        </div>
    </nav>
</section>

<section class="mContact">
    <div class="mContactContent">
        <p>Create outstanding digital experiences <br class="m3br">for you and your customers</p>

        <div class="mButton"><a href="">Contact Us&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a></div>
    </div>
</section>

<footer>
    <div class="mFooter">
        <p>41 Cubitt Street,<br class="m2br">Cremorne VIC 3121, Australia<br>Copyright © Working Three</p>

        <p>+61 3 8060 4700</p>
    </div>
</footer>
<div class="mSpace">asd</div>
<div class="tSpace">asd</div>

</div>
