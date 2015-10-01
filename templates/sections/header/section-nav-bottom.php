<?php global $wd_wt; ?>
<nav class="nav-bot">
    <div id="our-work-menu" style="display: none;">
        <a class="menu-case" href="">Case studies</a>
        <a class="menu-who" href="">Who we work with</a>
    </div>
    <div class="nav-bot-wrap">
                <?php $menuitems = cs_get_option("wd_mobile_menu_items"); ?>

                <?php if( isset( $menuitems ) && ! empty( $menuitems ) ){ ?>
                    <?php foreach( $menuitems as $menuitem ){?>
			        <div class="nav-bot-link">
			            <a href="<?php echo get_page_link($menuitem["wd_mobile_menu_item_link"]); ?>"><img src="<?php echo $menuitem["wd_mobile_menu_item_icon"];?>"></a>

			            <p><a href="<?php echo get_page_link($menuitem["wd_mobile_menu_item_link"]); ?>"><?php echo $menuitem["wd_mobile_menu_item_title"];?></a></p>
			        </div>
                    <?php } ?>
                <?php } ?>

		        <div class="nav-bot-link" onclick="toggle_visibility('#more-m');">
		            <div><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.svg"></div>

		            <p>More</p>
		        </div>
    </div>
</nav>