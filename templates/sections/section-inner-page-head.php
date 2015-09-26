<?php
 global $wd_wt;
?>
<nav class="nav-top">
    <div class="logo-wrap green-gradient-dark">
        <img class="logo" src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
    </div>
    <div class="menu-wrap green-gradient">
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
<nav class="nav-bot green-dark">
    <div class="nav-bot-wrap">
        <div class="nav-bot-link">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-services.svg"></a>

            <p><a href="">Services</a></p>
        </div>
        <div class="nav-bot-link">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-work.svg"></a>

            <p><a href=""><span class="tablet">Our </span>Work</a></p>
        </div>
        <div class="nav-bot-link">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-leadership.svg"></a>

            <p><a href="">Leadership</a></p>
        </div>
        <div class="nav-bot-link">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-insights.svg"></a>

            <p><a href="">Insights</a></p>
        </div>
        <div class="nav-bot-link">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-contact.svg"></a>

            <p><a href="">Contact<span class="tablet"> Us</span></a></p>
        </div>
        <div class="nav-bot-link">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.svg"></a>

            <p><a href="">More</a></p>
        </div>
    </div>
</nav>
