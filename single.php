<?php
/**
 * Single post page
 * @since  1.0
 */
 global $wd_wt;
?>
<?php get_header();?>
<?php get_template_part('templates/sections/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/section', 'inner-head'); ?>

<?php
 if( have_posts() ):
  while( have_posts() ) : the_post();
 ?>
<section class="section1">
    <div class="sideBar"></div>
    <div class="s1Content">
        <div class="s1Title"><?php _e( get_the_title(),"workingthree");  ?></div>
        <div class="s1Text">
            <p><?php the_time('jS, F Y') ?></p>
        </div>
    </div>
</section>

<section class="section2">
    <div class="sideBar">
        <nav class="nav-side nav-side-grey">

          <p>Share this article</p>
                  <ul class="socials">
                    <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-in-grey.png"></a></li>
                    <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb-grey.png"></a></li>
                    <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-tw-grey.png"></a></li>
                    <li><a href=""><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-st-grey.png"></a></li>
                  </ul>
        </nav>
    </div>
    <div class="s2content">
        <div class="wrapper">
            <p class="heading-blog">
              <?php $options = get_post_meta(get_the_ID(),'_custom_meta_options',true); ?>
              <?php echo $options['wd_blog_second_heading']; ?>
            </p>
            <div class="blog-content">
              <?php the_content(); ?>
            </div>
            <div class="blog-autor">
                <div class="member">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 164 ); ?>
                        <p class="name"><?php echo ucfirst(get_the_author()); ?></p>

                        <?php $position = get_the_author_meta( 'position', get_the_author_meta( 'ID' )  ); ?>
                        <?php if( ! empty( $position ) ){ ?>
                        <p class="position"><?php echo $position; ?></p>
                        <?php } ?>

                        <ul class="socials">
                        <?php $twitter = get_the_author_meta( 'twitter', get_the_author_meta( 'ID' )  ); ?>
                        <?php if( ! empty( $twitter ) ){ ?>
                          <li><a href="<?php echo $twitter;?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
                        <?php } ?>

                        <?php $linkedin = get_the_author_meta( 'linkedin', get_the_author_meta( 'ID' )  ); ?>
                        <?php if( ! empty( $linkedin ) ){ ?>
                          <li><a href="<?php echo $linkedin;?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
                        <?php } ?>
                        </ul>
                </div>
            </div>
        </div>
     </div>
</section>
<?php endwhile;
 endif; ?>
<section class="section2 grey">
    <div class="sideBar">
    </div>
    <div class="s2content">
        <div class="wrapper">
                    <table>
                        <tr>
                        <?php
                        while(  $the_query->have_posts() ){
                              $the_query->the_post();
                              $categories = get_the_category();
                              $arr_category = array();
                              if( ! empty( $categories ) ){
                                foreach ($categories as $category) {
                                  array_push( $arr_category , $category->name);
                                }
                              }
                        ?>
                            <td>
                                <p class="blogTitle" id="blogTitle1"><?php _e( strtoupper(get_the_title()),"workingthree"); ?></p>

                                <p class="blogDate" id="blogDate1"> <?php the_time('jS, M Y') ?> in <span class="blogSection" id="blogSection1"><?php echo implode(", ",$arr_category);?></span>
                                </p>

                                <p class="blogSnip" id="blogSnip1">
                                  <?php echo substr(get_the_excerpt(),0,130); ?>...
                                </p>

                                <div class="button">
                                    <a href="<?php the_permalink(); ?>">Read More&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                                </div>
                            </td>
                        <?php
                        }
                        $the_query->wp_reset_query();
                        ?>
                        </tr>
                    </table>
        </div>
    </div>
</section>

<section class="sec-2">
    <div class="sec-2-sidebar purple-dark"></div>
    <div class="sec-2-bg purple">
        <div class="sec-2-content">
            <p class="p2">Subscribe to our newsletter for the latest in <br>customer experience, design and big data.
            </p>
            <p class="p2-t">Pop your email in so we can send
                you updates about what we're doing.</p>

            <form class="signup-form" action="" method="post">
                <div class="input-name">
                    <input id="sub-name" type="text" value="" name="name" placeholder="Name*" required>
                </div>
                <div class="input-email">
                    <input id="sub-email" type="text" value="" name="email" placeholder="Email*" required>
                </div>
                <div class="form-button">
                    <button class="button" type="submit">Sign me up&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png">
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php get_template_part('templates/sections/section', 'footer-contact'); ?>
<footer>
    <div class="footerDark"></div>
    <div class="footerContent">
        <p class="footerD">41 Cubitt Street, Cremorne VIC 3121, Australia Copyright © Working Three&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+61
            3 8060 4700</p>
        <p class="footerT">41 Cubitt Street, Cremorne VIC 3121, Australia <br>Copyright © Working Three</p>
        <p class="footerT">+61 3 8060 4700</p>
    </div>
</footer>
<div class="mSpace">asd</div>
<div class="tSpace">asd</div>

<?php get_footer();?>
