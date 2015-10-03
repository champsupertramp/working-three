<?php
/**
 * Template Name: Our Work
 *
 * @since  1.0
 */

 global $wd_wt;
?>
<?php get_header();?>
<?php get_template_part('templates/sections/header/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/header/section', 'inner-head'); ?>
<?php get_template_part('templates/sections/header/section', 'more-menu'); ?>
<?php get_template_part('templates/sections/header/section', 'nav-bottom'); ?>

<section class="sec-1">
    <div class="sec-1-sidebar blue-dark"></div>
    <div class="sec-1-bg blue">
        <div class="sec-1-content">
        <?php
        if( have_posts() ){
          while( have_posts() ){ the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <p class="p1"><?php the_content(); ?></p>
        <?php
          }
        }
        ?>
        </div>
    </div>
</section>
<section class="sec-2">
    <div class="sec-2-sidebar white-dark"></div>
    <div id="Container" class="container">
        <div class="controls">
            <button class="filter" data-filter="all">All</button>
            <button class="filter" data-filter=".sport">Sport</button>
            <button class="filter" data-filter=".retail">Retail</button>
            <button class="filter" data-filter=".consultation">Consultation</button>
            <button class="filter" data-filter=".agriculture">Agriculture</button>
            <button class="filter" data-filter=".education">Education</button>
            <button class="filter" data-filter=".government">Government</button>
            <button class="filter" data-filter=".not-for-profit">Not-for-profit</button>
            <button class="filter" data-filter=".technology">Technology</button>
        </div>
        <div class="mix-container">
		<?php
		if( have_rows('logos') ):
		    while ( have_rows('logos') ) : the_row();?>
		    <?php $cats = get_sub_field('category'); ?>
		        <div class="mix <?php echo implode(" ", $cats); ?>">
		            <img class="client-logo" src="<?php the_sub_field('logo');?>">
		            <?php if (get_sub_field('has_case_study')){?>
		            	<div class="mix-study-wrap">
		            		<a class="mix-study on" href="<?php the_sub_field('has_case_study');?>">VIEW CASE STUDY</a>
		          		</div>
		          	<?}?>
		        </div>
		    <?endwhile;
		else : endif; ?>
       </div>
    </div>
</section>
<script type="text/javascript">
jQuery(function () {
  jQuery('#Container').mixItUp();
});
</script>
<?php get_template_part('templates/sections/footer/section', 'footer-contact'); ?>
<?php get_template_part('templates/sections/footer/section', 'footer-copyright'); ?>
<?php get_footer();?>

