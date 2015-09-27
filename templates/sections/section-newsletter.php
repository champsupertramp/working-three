<?php global $wd_wt;?>
<?php
  $title       = cs_get_option( 'wd_newsletter_title' );
  $logo        = cs_get_option( 'wd_newsletter_logo' );
  $content     = cs_get_option( 'wd_newsletter_content' );
  $has_enabled = cs_get_option( 'wd_enable_newsletter' );
?>
<div id="dNewsletter" style="display: none;">
    <div class="closeWrap"><a class="closeButton" href="#" onclick="toggle_visibility('dNewsletter');">Close</a></div>

    <?php if( ! empty(  $logo )  ){?>
    <img class="newsletterLogo" src="<?php echo $wd_wt->tpl_url['img']; ?>/placeholder.jpe">
    <?php }else{ ?>
    <img class="newsletterLogo" src="<?php echo $logo; ?>"/>
    <?php } ?>

    <div class="newsletterContent">
        <div class="newsletterTitle"><?php _e( $title ,'workingthree');?></div>
        <div class="newsletterText">
        <?php _e( $content ,'workingthree');?>
        </div>
        <form class="signupForm" action="" method="post">
            <div style="float:left;margin-right:20px;">
                <label for="name">Name*</label>
                <input id="name" type="text" value="" name="name">
            </div>

            <div style="float:left;">
                <label for="email">Email*</label>
                <input id="email" type="text" value="" name="email">
            </div>
            <div class="nsButton">
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>
