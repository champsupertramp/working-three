<?php
/**
 * Single post page
 * @since  1.0
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

<?php
 if( have_posts() ):
  while( have_posts() ) : the_post();
 ?>
 <section class="sec-1">
    <div class="sec-1-side"></div>
    <div class="sec-1-content-wrap">
        <div class="sec-1-content">
            <h1 class="title"><?php _e( get_the_title(),"workingthree");  ?></h1>
        </div>
        <div class="search">
            <p class="date"><?php the_time('jS, F Y') ?></p>
            <a href="<?php bloginfo('rss_url'); ?>" class="rss-blog-post"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/white-rss.png"></a>
            <?php get_search_form(); ?>
        </div>
    </div>
</section>
<section class="sec-2">
    <div class="sec-2-side">
	    <div class="social-list">
	    	<p class="share-title">Share this article:</p>
			<?php do_action( 'custom_sharethis_widget' ); ?>
	    </div>
    </div>

    <div class="sec-2-content-wrap">
        <div class="blog-content">
        	<?php if(get_field('block_quote')){?>
              <p class="block-quote-1"><?php echo get_field('block_quote') ;?></p>
        	<?php } ?>


            <div class="content">
				<?php the_content(); ?>
				<?php
				$categories = get_the_category();
					$arr_category = array();
					if( ! empty( $categories ) ){
						foreach ($categories as $category) {
							array_push( $arr_category , '<a href="'.esc_url( get_category_link( $category->term_id ) ).'" class="cat-link-'.$category->name.'" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'workingthree' ), $category->name ) ) . '">'.$category->name.'</a>');
						}
					}
				?>
                <p class="blog-details">Published in <span class="cat-1"><?php echo implode(", ",$arr_category);?></p>
                <p class="date"><?php the_time('jS, F Y') ?></p>
                <?php edit_post_link('Edit this post', '<hr/><p>', '</p>'); ?>
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
                        <br />
                        <p class="position">Published in <span class="cat-1"><?php echo implode(", ",$arr_category);?></p>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
	$arr = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'post__not_in'  => array(get_the_ID()),
	);
?>
 <section class="sec-3">
    <div class="sec-3-side"></div>
    <div class="sec-3-content-wrap">
        <div class="sec-3-content">
			<?php
				$the_query = new WP_Query( $arr );
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
            <div class="blog-item">
                <p class="blogTitle" id="blogTitle1"><?php echo wp_trim_words( get_the_title(), 4 ); ?><?php // _e( strtoupper(get_the_title()),"workingthree"); ?></p>
                <p class="blogDate" id="blogDate1"><?php the_time('jS, M Y') ?> in <span class="blogSection" id="blogSection1"><?php echo implode(", ",$arr_category);?></span></p>
                <p class="blogSnip" id="blogSnip1"><?php echo get_the_excerpt(); ?></p>
				<div class="button">
					<a href="<?php the_permalink(); ?>">Read More&nbsp;&nbsp;&nbsp;<img src="<?php echo $wd_wt->tpl_url['assets'];?>img/btn-arrow.png"></a>
				</div>
            </div>
			<?php
				}
				$the_query->wp_reset_query();
			?>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>
<?php get_template_part('templates/sections/footer/section', 'footer-newsletter'); ?>
<?php get_template_part('templates/sections/footer/section', 'footer-contact'); ?>
<?php get_template_part('templates/sections/footer/section', 'footer-copyright'); ?>
<?php get_footer();?>