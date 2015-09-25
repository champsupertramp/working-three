<?php
/**
 * Template Name: Contact Us
 *
 *  @since  1.0
 */
 global $wd_wt;
?>
<?php get_header();?>
<?php get_template_part('templates/sections/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/section', 'contact-head'); ?>

<section class="sec-1">
    <div class="sec-1-sidebar blue-dark"></div>
    <div class="sec-1-bg blue">
        <div class="sec-1-content">
            <h1><span class="underline">Let's talk</span> numbers</h1>

            <p class="p1">We love talking about customers, the data they create, and the
                opportunities it contains.</p>

            <p class="p1">A quick chat with us can help discover where your business has the
                most to gain, and how we can realise that potential together.</p>

            <p class="p2">Follow our journey as we change the way businesses engage</p>
            <ul class="soc-menu">
                <li class="soc-icons"><a class="soc-link" href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
                <li class="soc-icons"><a class="soc-link" href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
                <li class="soc-icons"><a class="soc-link" href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
            </ul>
        </div>
    </div>
</section>
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
<section class="sec-3">
    <div class="sec-3-sidebar white-dark"></div>
    <div class="sec-3-bg white">
        <div class="sec-3-content">
            <h2 class="title">Call us on <span>+61 3 8060 4700</span></h2>

            <p class="p2">Or send us a message...</p>

            <form class="signup-form" action="" method="post">
                <div class="input-name">
                    <label for="name">Name*</label>
                    <input id="name" type="text" value="" name="name" required>
                </div>
                <div class="input-email">
                    <label for="email">Email*</label>
                    <input id="email" type="text" value="" name="email" required>
                </div>
                <div class="input-company">
                    <label for="company">Company</label>
                    <input id="company" type="text" value="" name="company">
                </div>
                <div class="input-message">
                    <label for="message">Message</label>
                    <input id="message" type="text" value="" name="message" required>
                </div>
                <div class="form-button">
                    <button class="button" type="submit">Introduce me&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png">
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php get_template_part('templates/sections/section', 'inner-contact-footer'); ?>
<?php  get_footer(); ?>
