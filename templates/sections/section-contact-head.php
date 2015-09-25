<?php global $wd_wt; ?>
<nav class="nav-top">
    <div class="logo-wrap hide-t blue-gradient-dark">
        <img class="logo" src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
    </div>
    <div class="menu-wrap blue-gradient">
        <p class="ns-text"><a class="ns-link" href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                class="ns-arrow" src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>
        </p>
<!--         <ul class="menu-top">
            <li class="menu-top-item"><a class="menu-top-link" href="">Services</a></li>
            <li class="menu-top-item"><a class="menu-top-link" href="">Our Work</a></li>
            <li class="menu-top-item"><a class="menu-top-link" href="">Leadership</a></li>
            <li class="menu-top-item"><a class="menu-top-link" href="">Insights</a></li>
            <li class="menu-top-item"><a class="menu-top-link" href="">Contact Us</a></li>
        </ul>
 -->
        <?php
        $defaults = array(
          'theme_location'  => 'primary_navigation',
          'menu'            => '',
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
          'items_wrap'      => '<ul id="%1$s" class="%2$s menu-top-item">%3$s</ul>',
          'depth'           => 0,
          'walker'          => ''
        );


          wp_nav_menu( $defaults );
        ?>
    </div>
    <div class="soc-wrap blue-gradient">
        <ul class="soc-menu">
            <li class="soc-icons"><a class="soc-link" href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
            <li class="soc-icons"><a class="soc-link" href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
            <li class="soc-icons"><a class="soc-link" href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
            <li class="stretch"></li>
        </ul>
        <p class="soc-phone">+61 3 8060 4700</p>
    </div>
</nav>
