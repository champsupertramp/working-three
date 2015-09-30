<?php global $wd_wt; ?>
<div class="nav-side-bg"></div>
<nav class="nav-top">
    <?php get_template_part('templates/sections/header/section', 'head-logo'); ?>
    <div class="menu-wrap blue-gradient">
        <?php  $has_enabled = cs_get_option( 'wd_enable_newsletter' );?>
          <?php if( $has_enabled ){ ?>
          <p class="ns-text"><a class="ns-link" href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign
              Up&nbsp;&nbsp;&nbsp;<img
                      class="ns-arrow" src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>
          </p>
        <?php } ?>
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
          'walker'            => new WorkingThree_Walker(),
        );


          wp_nav_menu( $defaults );
        ?>
    </div>
    <div class="soc-wrap blue-gradient">
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
