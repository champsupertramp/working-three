<?php global $wd_wt; ?>
<nav class="nav-bot">
    <div id="our-work-menu" style="display: none;">
        <a class="menu-case" href="">Case studies</a>
        <a class="menu-who" href="">Who we work with</a>
    </div>
    <div class="nav-bot-wrap">
        <div class="nav-bot-link">
            <a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-services.svg"></a>

            <p><a href="">Services</a></p>
        </div>
        <div class="nav-bot-link" onclick="toggle_visibility('our-work-menu');">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-work.svg">

            <p><span class="tablet">Our </span>Work</p>
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
        <div class="nav-bot-link" onclick="toggle_visibility('#more-m');">
            <div><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/icn-more.svg"></div>

            <p>More</p>
        </div>
    </div>
</nav>