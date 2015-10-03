<?php
/**
 * Template Name: Blog
 *
 *  @since  1.0
 */
 global $wd_wt;
  global $swap_color;
 $swap_color = new stdClass();
 $swap_color->main_menu = 'red-gradient';
 $swap_color->social_menu = 'red-gradient';
?>
<?php get_header();?>
<?php get_template_part('templates/sections/header/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/header/section', 'inner-head'); ?>
<?php get_template_part('templates/sections/header/section', 'more-menu'); ?>
<?php get_template_part('templates/sections/header/section', 'nav-bottom'); ?>
<section class="sec-1">
    <div class="sec-1-side"></div>
    <div class="sec-1-content-wrap">
        <div class="sec-1-content">
			<?php while( have_posts() ): the_post(); ?>
				<h1 class="title"><?php the_title();?></h1>
				<?php the_content(); ?>
      		<?php endwhile; ?>
        </div>
    </div>
</section>
<section class="sec-2">
    <div class="sec-2-side">
		<?php get_sidebar(); ?>
    </div>
    <div class="sec-2-content-wrap">
        <div class="sec-2-content">
		<?php
			if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
			elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
			else { $paged = 1; }
			$case_study_category_id = 0;
			$arr = array(
                'post_type' => 'post',
                'posts_per_page' => get_option('posts_per_page'),
                'paged' => $paged
            );
            if( $case_study_category_id ){
                 $arr['category'] = $case_study_category_id;
            }
            $the_query = new WP_Query( $arr );
			while(  $the_query->have_posts() ){
          		$the_query->the_post();
          		$categories = get_the_category();
          		$arr_category = array();
	            if( ! empty( $categories ) ){
					foreach ($categories as $category) {
	                  array_push( $arr_category , '<a href="'.esc_url( get_category_link( $category->term_id ) ).'" class="cat-link-'.$category->name.'" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'workingthree' ), $category->name ) ) . '">'.$category->name.'</a>');
	                }
	            }
        ?>
            <div class="blog-item">
                <p class="blogTitle" id="blogTitle1"><?php echo strtoupper(get_the_title()); ?></p>

                <p class="blogDate" id="blogDate1"><?php the_time('jS, M Y') ?> in <span class="blogSection" id="blogSection1"><?php echo implode(", ",$arr_category);?></span>
                </p>

                <p class="blogSnip" id="blogSnip1"><?php echo substr(get_the_excerpt(), 0,120); ?></p>

                <div class="button">
                    <a href="<?php the_permalink(); ?>">Read More&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
                </div>
            </div>
        <?php }  ?>
      		<div class="pagination">
                <p class="blog_pagination">
		             <?php
		              echo paginate_links( array(
		                  'base' => str_replace( $the_query->found_posts, '%#%', esc_url( get_pagenum_link( $the_query->found_posts ) ) ),
		                  'format' => '/page/%#%',
		                  'current' => max( 1, get_query_var('paged') ),
		                  'total' => $the_query->max_num_pages,
		                  'prev_text' => '&#8592;',
		                  'next_text' => '&#8594;'
		                ) );
		              ?>
                </p>
            </div>
        </div>
    </div>
</section>



<section class="sec-4" id="Section4">
    <div class="sec-4-sidebar purple-dark"></div>
    <div class="sec-4-bg purple">
        <div class="sec-4-content">
            <p class="p2">Pop your email in so we can send
                you updates about what we're doing.
            </p>

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
<?php get_template_part('templates/sections/footer/section', 'footer-contact'); ?>
<?php get_template_part('templates/sections/footer/section', 'footer-copyright'); ?>

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
