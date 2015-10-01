<?php
/**
 * Template Name: Blog
 *
 *  @since  1.0
 */
 global $wd_wt;
?>
<?php get_header();?>
<?php get_template_part('templates/sections/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/header/section', 'inner-head'); ?>

<section class="section1">
    <div class="sideBar"></div>
    <!--<div class="navBlock"></div>-->
    <div class="s1Content">
      <?php while( have_posts() ): the_post(); ?>
        <div class="s1Title"><?php the_title();?></div>
        <div class="s1Text">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>
</section>

<section class="section2">
    <?php get_sidebar(); ?>
    <div class="s2content">
        <?php
            $case_study_category_id = 0;
            $arr = array(
                'post_type' => 'post',
                'posts_per_page' => get_option('posts_per_page'),
            );

            if( $case_study_category_id ){
                 $arr['category'] = $case_study_category_id;
            }

            $the_query = new WP_Query( $arr );

        $i = 1 ;
        while(  $the_query->have_posts() ){
          $the_query->the_post();
          $categories = get_the_category();
          $arr_category = array();
            if( ! empty( $categories ) ){
                foreach ($categories as $category) {
                  array_push( $arr_category , '<a href="'.esc_url( get_category_link( $category->term_id ) ).'" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'workingthree' ), $category->name ) ) . '">'.$category->name.'</a>');
                }
            }
        ?>
            <?php if(  $i%3 == 1){ ?>
            <div class="wrapper">
                <table>
                    <tr>
            <?php } ?>
                      <td>
                                    <p class="blogTitle" id="blogTitle1"><?php echo strtoupper(get_the_title()); ?></p>

                                    <p class="blogDate" id="blogDate1"><?php the_time('jS, M Y') ?> in <span class="blogSection" id="blogSection1"><?php echo implode(", ",$arr_category);?></span>
                                    </p>

                                    <p class="blogSnip" id="blogSnip1">
                                    <?php echo substr(get_the_excerpt(), 0,120); ?>
                                    </p>

                                    <div class="button">
                                        <a href="<?php the_permalink(); ?>">Read More&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                                    </div>
                      </td>
            <?php if(  $i%3 == 0 || ($the_query->post_count < 3   && $the_query->post_count == $i  ) ){ ?>
                  </tr>
              </table>
            </div>
            <?php } ?>
        <?php $i++; ?>
        <?php }  ?>
        <div class="wrapper">
             <p class="blog_pagination">

             <?php
              echo paginate_links( array(
                  'base' => str_replace( $the_query->found_posts, '%#%', esc_url( get_pagenum_link( $the_query->found_posts ) ) ),
                  'format' => '/page/%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $the_query->max_num_pages,
                  'prev_text' => '&lt;&lt;',
                  'next_text' => '&gt;&gt;'
                ) );
              ?>
   <!--          <a href="#1">&#8592;</a>
            <a href="#1">1</a>
            <a href="#2">2</a>
            <a href="#3">3</a>
            <a href="#4">4</a>
            <a href="#5">5</a>
            <a href="#6">6</a>
            <a href="#7">7</a>
            <a href="#7">&#8594;</a> -->
          </p>
        </div>

    </div>
</section>

<section class="sec-2">
    <div class="sec-2-sidebar purple-dark"></div>
    <div class="sec-2-bg purple">
        <div class="sec-2-content">
            <p class="p2">Subscribe to our newsletter for the latest in <br>customer experience, design and big data. </p>
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
        <p class="footerD"><?php echo cs_get_option("wd_copyright");?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo cs_get_option("wd_contact_number");?></p>
        <p class="footerT"><?php echo cs_get_option("wd_copyright");?></p>
        <p class="footerT"><?php echo cs_get_option("wd_contact_number");?></p>
    </div>
</footer>
<div class="mSpace">asd</div>
<div class="tSpace">asd</div>

<script type="text/css">
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(document).scrollTop() > $(window).height() * 0.55) {
                $(".topNav").addClass("scrolled2", 300, "linear");
            } else {
                $(".topNav").removeClass("scrolled2", 300, "linear");
            }

        });

    });
</script>
<?php get_footer(); ?>
