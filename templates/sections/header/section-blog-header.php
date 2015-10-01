<?php global $wd_wt; ?>
<nav class="nav-top">
    <div class="logoWrapper">
      <a href="<?php echo site_url(); ?>" >
        <img class="logo" title="WorkingThree Logo" src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
      </a>
    </div>
    <div class="navWrapper">
        <?php  $has_enabled = cs_get_option( 'wd_enable_newsletter' );?>
          <?php if( $has_enabled ){ ?>
          <p class="ns-text">
            <a class="ns-link" href="#" onclick="toggle_visibility('dNewsletter');">
            Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img class="ns-arrow" src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"/>
            </a>
          </p>
          <?php } ?>

        <?php
        $defaults = array(
          'theme_location'  => 'primary_navigation',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'navMenu',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'            => new WorkingThree_Walker()
        );
         wp_nav_menu( $defaults );
        ?>
    </div>
    <div class="socialWrapper">
        <ul class="soc-menu">
                  <?php  $social_link = cs_get_option( 'social_icon_linkedin' ); ?>
                    <?php if( ! empty( $social_link ) ){ ?>
                      <li class="soc-icons"><a class="soc-link" href="<?php echo cs_get_option( 'social_icon_linkedin' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
                    <?php } ?>

                    <?php  $social_link = cs_get_option( 'social_icon_facebook' ); ?>
                    <?php if( ! empty( $social_link ) ){ ?>
                      <li class="soc-icons"><a class="soc-link" href="<?php echo cs_get_option( 'social_icon_facebook' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
                    <?php } ?>

                    <?php  $social_link = cs_get_option( 'social_icon_twitter' ); ?>
                    <?php if( ! empty(  $social_link ) ){ ?>
                      <li class="soc-icons"><a class="soc-link" href="<?php echo cs_get_option( 'social_icon_twitter' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
                    <?php } ?>
        </ul>
        <?php $general_contact = cs_get_option( 'wd_contact_number' ); ?>
        <?php if( ! empty( $general_contact ) ){ ?>
            <p class="soc-phone"><?php echo $general_contact;?></p>
        <?php } ?>
    </div>
</nav>
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
