<?php global $wd_wt; ?>
<nav class="nav-bot">
    <div id="our-work-menu" style="display: none;">
    	<?php $ourwork = cs_get_option("wd_mobile_menu_our_work_items"); ?>
        <?php if( isset( $ourwork ) && ! empty( $ourwork ) ){?>
			<?php foreach( $ourwork as $ourworkitem ){?>
				<a class="menu-case" href="<?php echo get_page_link($ourworkitem["wd_mobile_more_menu_our_work_link"]); ?>">
					<?php echo $ourworkitem["wd_mobile_more_menu_our_work_title"];?>
				</a>
            <?php }	?>
        <?php } ?>
    </div>
    <div class="nav-bot-wrap">
                <?php $menuitems = cs_get_option("wd_mobile_menu_items"); ?>

                <?php if( isset( $menuitems ) && ! empty( $menuitems ) ){
                	$i = 1;
				?>
                    <?php foreach( $menuitems as $menuitem ){?>
                    	<?php if($i == 2){?>
			                <div class="nav-bot-link" id="ow-link" onclick="toggle_visibility('our-work-menu');">
        					<script>
        						if (jQuery(window).width() < 767) {
        							jQuery( "#ow-link" ).click(function() {
										window.location.href = "<?php echo get_page_link($menuitem["wd_mobile_menu_item_link"]); ?>";
									});
								}
        					</script>
            					<img src="<?php echo $menuitem["wd_mobile_menu_item_icon"];?>">
					            <p><?php echo $menuitem["wd_mobile_menu_item_title"];?></p>
        					</div>
                    	<?php }else{?>
					        <div class="nav-bot-link">
					            <a href="<?php echo get_page_link($menuitem["wd_mobile_menu_item_link"]); ?>"><img src="<?php echo $menuitem["wd_mobile_menu_item_icon"];?>"></a>
					            <p><a href="<?php echo get_page_link($menuitem["wd_mobile_menu_item_link"]); ?>"><?php echo $menuitem["wd_mobile_menu_item_title"];?></a></p>
					        </div>
                    	<?php }?>
                    <?php
                    $i++;
                    }
					?>
                <?php } ?>

		        <div class="nav-bot-link" onclick="toggle_visibility('#more-m');">
		            <div><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.svg"></div>

		            <p>More</p>
		        </div>
    </div>
</nav>