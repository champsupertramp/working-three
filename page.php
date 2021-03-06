<?php
/**
 * Page
 * @since  1.0
 */
 global $wd_wt;
?>
<?php get_header();?>
<?php get_template_part('templates/sections/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/section', 'inner-head'); ?>

<?php
 if( have_posts() ):
  while( have_posts() ) : the_post();
 ?>
<section class="section1">
    <div class="sideBar"></div>
    <div class="s1Content">
        <div class="s1Title"><?php _e( get_the_title(),"workingthree");  ?></div>
        <div class="s1Text">
            <p><?php the_time('jS, F Y') ?></p>
        </div>
    </div>
</section>

<section class="section2">
    <div class="sideBar">
        <nav class="nav-side nav-side-grey">

          <p>Share this article</p>
                  <ul class="socials">
                    <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-in-grey.png"></a></li>
                    <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb-grey.png"></a></li>
                    <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-tw-grey.png"></a></li>
                    <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-st-grey.png"></a></li>
                  </ul>
        </nav>
    </div>
    <div class="s2content">
        <div class="wrapper">
            <p class="heading-blog">
              <?php echo get_post_meta(get_the_ID(),'wd_blog_second_heading',true); ?>
            </p>
            <div class="blog-content">
              <?php the_content(); ?>
            </div>

        </div>
     </div>
</section>
<?php endwhile;
 endif; ?>


<section class="sec-2">
    <div class="sec-2-sidebar purple-dark"></div>
    <div class="sec-2-bg purple">
        <div class="sec-2-content">
            <p class="p2">Subscribe to our newsletter for the latest in <br>customer experience, design and big data.
            </p>
            <p class="p2-t">Pop your email in so we can send
                you updates about what we're doing.</p>

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
<?php get_template_part('templates/sections/section', 'footer-contact'); ?>
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

<?php get_footer();?>
