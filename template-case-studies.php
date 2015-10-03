<?php
/**
 * Template Name: Case Studies
 *
 *  @since  1.0
 */
 global $wd_wt;
 global $swap_color;
 $swap_color = new stdClass();
 $swap_color->logo = 'purple-gradient-dark';
 $swap_color->main_menu = 'purple-gradient';
 $swap_color->social_menu = 'purple-gradient';

?>
<?php get_header();?>
<?php get_template_part('templates/sections/header/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/header/section', 'inner-head'); ?>
<?php get_template_part('templates/sections/header/section', 'more-menu'); ?>
<?php get_template_part('templates/sections/header/section', 'nav-bottom'); ?>
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
    <div class="sideBar">

    </div>
    <div class="s2content">
        <div class="wrapper">
			<?php
			$args = array(
				'post_type' => 'casestudy',
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();?>
						<div class="case-study">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('image_580x400');
							} ?>
							<div class="hover-info">
								<h2><?php the_title();?></h2>
								<p><?php echo substr(get_the_excerpt(),0,230); ?>...</p>
								<a class="button" href="<?php the_permalink(); ?>">View Case Study</a>
							</div>
						</div>
				<?php }
			} else {}
			wp_reset_postdata();?>
        </div>
    </div>
</section>

<section class="sec-2">

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
