<?php
/**
 * Template Name: Landing Page
 *
 * @since  1.0
 */

 global $wd_wt;
?>
<?php get_header();?>
<div class="home-bg">
    <?php get_template_part('templates/sections/section', 'newsletter'); ?>
    <div class="nav-side-bg"></div>
    <nav class="nav-top">
        <div class="logo-wrap">
         <?php get_template_part('templates/sections/section', 'head-logo'); ?>
        </div>
        <div class="menu-wrap">
            <p class="ns-text">
            <?php  $has_enabled = cs_get_option( 'wd_enable_newsletter' );?>
            <?php if( $has_enabled ){ ?>
              <a class="ns-link" href="#" onclick="toggle_visibility('dNewsletter');">Newsletter Sign Up&nbsp;&nbsp;&nbsp;<img
                    class="ns-arrow" src="<?php echo $wd_wt->tpl_url['assets'];?>img/newsletter-arrow.png"></a>
            <?php } ?>
            </p>
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
              'walker'          => ''
            );


              wp_nav_menu( $defaults );
            ?>
        </div>
        <div class="soc-wrap green-gradient">
            <ul class="soc-menu">
                 <?php  $social_link = cs_get_option( 'social_icon_linkedin' ); ?>
                  <?php if( ! empty( $social_link ) ){ ?>
                    <li class="soc-icons"><a class="soc-link"  href="<?php echo cs_get_option( 'social_icon_linkedin' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-li.png"></a></li>
                  <?php } ?>

                  <?php  $social_link = cs_get_option( 'social_icon_facebook' ); ?>
                  <?php if( ! empty( $social_link ) ){ ?>
                    <li class="soc-icons"><a class="soc-link"  href="<?php echo cs_get_option( 'social_icon_facebook' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-fb.png"></a></li>
                  <?php } ?>

                  <?php  $social_link = cs_get_option( 'social_icon_twitter' ); ?>
                  <?php if( ! empty(  $social_link ) ){ ?>
                    <li class="soc-icons"><a class="soc-link"  href="<?php echo cs_get_option( 'social_icon_twitter' );?>"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/social-twitter.png"></a></li>
                  <?php } ?>
                  <li class="stretch"></li>

            </ul>
            <?php $general_contact = cs_get_option( 'wd-contact-number' ); ?>
            <?php if( ! empty( $general_contact ) ){ ?>
                <p class="soc-phone"><?php echo $general_contact;?></p>
            <?php } ?>
        </div>
    </nav>
    <div class="home-sections">

        <section class="sec-1">
            <a name="1"></a>
            <nav class="nav-side">
                <ul>
                    <li><a href="#1">one</a></li>
                    <li class="hoverable">
                        <span class="normal"><a href="#2">2</a></span><span class="hover"><a href="#2">two</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">four</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#5">5</a></span><span class="hover"><a href="#5">five</a></span>
                    </li>
                </ul>
            </nav>
            <div class="sec-1-content-wrap">
                <div class="sec-1-content">
                    <h1 class="title"><?php _e( cs_get_option( 'wd_s1_title' ), "workingthree" ); ?></h1>

                    <?php _e( cs_get_option( 'wd_s1_description' ), "workingthree" ); ?>

                    <div class="button">
                        <a href="<?php echo cs_get_option( 'wd_s1_button_link' ); ?>"><?php _e( cs_get_option( 'wd_s1_button_text' ), "workingthree" ); ?>&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-2">
            <a name="2"></a>
            <nav class="nav-side">
                <ul>
                    <li class="hoverable">
                        <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                    </li>
                    <li><a href="#2">two</a></li>
                    <li class="hoverable">
                        <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">four</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#5">5</a></span><span class="hover"><a href="#5">five</a></span>
                    </li>
                </ul>
            </nav>
            <div class="sec-2-content-wrap">
                <div class="sec-2-content">
                    <h1 class="title"><?php _e( cs_get_option( 'wd_s2_title' ), "workingthree" ); ?></h1>

                    <?php _e( cs_get_option( 'wd_s2_description' ), "workingthree" ); ?>
                    <div>
                    <?php
                    $case_study_category_id = cs_get_option('wd_s2_add_posts');

                    $arr = array(
                          'post_type' => 'casestudy',
                          'posts_per_page' => 3,
                     );

                    if( $case_study_category_id ){
                        $arr['tax_query'] = array(
                                'taxonomy' => 'casestudy_categories',
                                'field' => 'term_id',
                                'terms' => array($case_study_category_id),
                                'operator' => 'IN',
                        );
                    }

                    $the_query = new WP_Query( $arr );

                    while(  $the_query->have_posts() ){
                      $the_query->the_post();
                      echo get_the_post_thumbnail( get_the_ID(), 'image_174x174', array( 'class' => 'caseStudy' ) );
                    }
                    $the_query->wp_reset_query();
                    ?>
                    </div>
                    <div class="button">
                        <a href="<?php echo cs_get_option( 'wd_s2_button_link' ); ?>"><?php _e( cs_get_option( 'wd_s2_button_text' ), "workingthree" ); ?>&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-3">
            <a name="3"></a>
            <nav class="nav-side">
                <ul>
                    <li class="hoverable">
                        <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#2">2</a></span><span class="hover"><a href="#2">two</a></span>
                    </li>
                    <li><a href="#3">three</a></li>
                    <li class="hoverable">
                        <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">four</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#5">5</a></span><span class="hover"><a href="#5">five</a></span>
                    </li>
                </ul>
            </nav>
            <div class="sec-3-content-wrap">
                <div class="sec-3-col-a">
                    <h1 class="title"><?php _e( cs_get_option( 'wd_s3_title' ), "workingthree" ); ?></h1>

                    <p class="p1"><?php _e( cs_get_option( 'wd_s3_description' ), "workingthree" ); ?></p>

                    <div class="button">
                        <a href="<?php echo cs_get_option( 'wd_s3_button_link' ); ?>"><?php echo cs_get_option( 'wd_s3_button_text' ); ?>&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                    </div>
                </div>

                <?php $skills = cs_get_option("wd_s3_skills_section"); ?>
                <div class="sec-3-col-b">
                    <?php foreach( $skills as $skill ){?>
                    <div class="col-b-item">
                        <img class="item-img" src="<?php echo $skill["wd_s3_skills_logo"];?>">

                        <div class="item-text">
                            <h2 class="subtitle"><?php echo $skill["wd_s3_skills_title"];?></h2>

                            <p class="p1"><?php echo $skill["wd_s3_skills_short_description"];?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="sec-4">
            <a name="4"></a>
            <nav class="nav-side">
                <ul>
                    <li class="hoverable">
                        <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#2">2</a></span><span class="hover"><a href="#2">two</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                    </li>
                    <li><a href="#4">four</a></li>
                    <li class="hoverable">
                        <span class="normal"><a href="#5">5</a></span><span class="hover"><a href="#5">five</a></span>
                    </li>
                </ul>
            </nav>
            <div class="sec-4-content-wrap">
                <div class="sec-4-col-a">
                    <h1 class="title"><?php _e( cs_get_option( 'wd_s4_title' ), "workingthree"); ?></h1>
                    <div class="p-wrap">
                    <?php _e( cs_get_option( 'wd_s4_description' ), "workingthree"); ?>
                    </div>
                </div>
                <div class="sec-4-col-b">
                    <p class="p2">
                      <?php _e( cs_get_option( 'wd_s4_short_description' ), "workingthree"); ?>
                    </p>
                    <div class="button">
                        <a href="<?php echo cs_get_option( 'wd_s4_button_link' );?>"><?php _e( cs_get_option( 'wd_s4_button_text' ), "workingthree"); ?>&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-5">
            <a name="5"></a>
            <nav class="nav-side">
                <ul>
                    <li class="hoverable">
                        <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#2">2</a></span><span class="hover"><a href="#2">two</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                    </li>
                    <li class="hoverable">
                        <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">4</a></span>
                    </li>
                    <li><a href="#5">five</a></li>
                </ul>
            </nav>
            <div class="sec-5-content-wrap">
                <div class="sec-5-content">
                    <h1 class="title"><?php _e( cs_get_option( 'wd_s5_title' ), "workingthree"); ?></h1>
                     <?php
                        $case_study_category_id = cs_get_option('wd_s5_add_posts');

                        $arr = array(
                              'post_type' => 'post',
                              'posts_per_page' => 3,
                         );

                        if( $case_study_category_id ){
                              $arr['category'] = $case_study_category_id;
                        }

                        $the_query = new WP_Query( $arr );
                    ?>
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
        <section class="sec-contact">
            <div class="sec-contact-sidebar black-dark"></div>
            <div class="sec-contact-bg black">
                <div class="sec-contact-content">
                    <p class="sec-contact-text">Create outstanding digital experiences for you and your customers</p>
                    <a class="button" href="">Contact us&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-sidebar grey-dark"></div>
            <div class="footer-bg grey">
                <div class="footer-content">
                    <p>41 Cubitt Street, <br class="br-m">Cremorne VIC 3121, Australia <br class="br-t">Copyright © Working Three</p>

                    <p>+61 3 8060 4700</p>
                </div>
            </div>
        </footer>
    </div>
</div>

<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('.home-bg, .menu-wrap, .soc-wrap').colorScroll({
        colors: [
            {
                color: '#00BCDD',
                position: '0%'
            },
            {
                color: '#FFD03E',
                position: '22%'
            },
            {
                color: '#AA7BC9',
                position: '44%'
            },
            {
                color: '#60C5BA',
                position: '66%'
            },
            {
                color: '#EB6852',
                position: '88%'
            }
        ]
    });

    jQuery('.nav-side-bg, .logo-wrap').colorScroll({
        colors: [
            {
                color: '#00AFD4',
                position: '0%'
            },
            {
                color: '#FFC627',
                position: '22%'
            },
            {
                color: '#906FB4',
                position: '44%'
            },
            {
                color: '#26B8B0',
                position: '66%'
            },
            {
                color: '#E95944',
                position: '88%'
            }
        ]
    });

    jQuery('.home-sections').snapscroll();
});

</script>
<?php get_footer();?>
