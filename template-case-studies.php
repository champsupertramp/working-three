<?php
/**
 * Template Name: Case Studies
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
      <?php while( have_posts() ): the_post(); ?>
        <div class="s1Title"><?php the_title();?></div>
        <div class="s1Text">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>
</section>

<section class="section2">
    <div class="sideBar">

    </div>
    <div class="s2content">
        <div class="wrapper">
			<?php
			$args = array(
				'post_type' => 'casestudy',
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();?>
						<div class="case-study">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('image_580x400');
							} ?>
							<div class="hover-info">
								<h2><?php the_title();?></h2>
								<p><?php echo substr(get_the_excerpt(),0,230); ?>...</p>
								<a class="button" href="<?php the_permalink(); ?>">View Case Study</a>
							</div>
						</div>
				<?php }
			} else {}
			wp_reset_postdata();?>
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
<?php get_template_part('templates/sections/section', 'footer-contact'); ?>
<footer>
    <div class="footerDark"></div>
    <div class="footerContent">
        <p class="footerD"><?php echo cs_get_option("wd_copyright");?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo cs_get_option("wd_contact_number");?></p>
        <p class="footerT"><?php echo cs_get_option("wd_copyright");?></p>
        <p class="footerT"><?php echo cs_get_option("wd_contact_number");?></p>
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
