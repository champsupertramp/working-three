<?php global $wd_wt; ?>
<div id="#more-m" class="more-menu" style="display: none;">
    <div class="more-close" onclick="toggle_visibility('#more-m');">Close</div>
    <img class="more-logo" src="<?php echo $wd_wt->tpl_url['assets'];?>img/w3logo.png">
    <menu class="more-menu-items">
        <a class="more-menu-item">Leadership</a>
        <a class="more-menu-item">Who we work for</a>
        <a class="more-menu-item">Insights</a>
        <p class="more-menu-item" onclick="toggle_visibility('dNewsletter');">Newsletter sign up</p>
    </menu>
</div>