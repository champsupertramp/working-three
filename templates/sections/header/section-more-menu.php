<?php global $wd_wt; ?>
<div id="#more-m" class="more-menu" style="display: none;">
    <div class="more-close" onclick="toggle_visibility('#more-m');">Close</div>
    <img class="more-logo" src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
    <menu class="more-menu-items">
    			 <?php $moremenuitems = cs_get_option("wd_mobile_menu_more_items"); ?>
                <?php if( isset( $moremenuitems ) && ! empty( $moremenuitems ) ){ ?>
                    <?php foreach( $moremenuitems as $moremenuitem ){?>
				        <a href="<?php echo get_page_link($moremenuitem["wd_mobile_more_menu_item_link"]); ?>" class="more-menu-item">
				        	<?php echo $moremenuitem["wd_mobile_more_menu_item_title"];?>
				        </a>
                    <?php } ?>
                <?php } ?>
        <p class="more-menu-item" onclick="toggle_visibility('dNewsletter');">Newsletter sign up</p>
    </menu>
</div>