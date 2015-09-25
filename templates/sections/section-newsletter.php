<?php global $wd_wt;?>
<div id="dNewsletter" style="display: none;">
    <div class="closeWrap"><a class="closeButton" href="#" onclick="toggle_visibility('dNewsletter');">Close</a></div>
    <img class="newsletterLogo" src="<?php echo $wd_wt->tpl_url['img']; ?>/placeholder.jpe">
    <div class="newsletterContent">
        <div class="newsletterTitle">Be in the Know.</div>
        <div class="newsletterText">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                venenatis feugiat ex, a vestibulum turpis consequat in. Integer
                mi purus, tincidunt finibus ligula vel, vulputate facilisis tellus. Ut
                non consequat mauris.</p>
            <br>
            <p>Sed nec auctor lectus. Nullam quis ex ut magna lacinia placerat.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                erat volutpat.</p>
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
