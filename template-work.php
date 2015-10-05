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
<div id="No-case-study" class="no-case-study" style="display: none;">
    <div class="ncs-wrap">
    	<div id="close-icon"><img src="<?php echo $wd_wt->tpl_url['assets'];?>img/close-icon.png"></div>
        <img id="NCS-logo" class="ncs-logo" src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe">
        <p class="p2">Want more info?</p>
        <p class="p1">This case study isn't quite ready, or for privacy reasons, we can't publicly display this case study.
        Though if you want to find out more information on what was done with this client, feel free to contact us.</p>
        <div class="button">
            <a href="">Get in touch</a>
        </div>
    </div>
</div>
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
		    <?php
		    $cats = get_sub_field('category');
			if (empty($cats)){
				$cats = array();
			}else{}
			?>
		        <div class="mix <?php echo implode(" ", $cats); ?>" <?php if (!get_sub_field('has_case_study')){?>data-logo="<?php the_sub_field('logo');?>"<?php } ?>>
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

    jQuery(document).ready(function(){
        if ( jQuery(window).width() < 960) {
            jQuery('.controls').slick({
                centerMode: true,
                centerPadding: 0,
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: true,
                swipeToSlide: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            centerMode: true,
                            centerPadding: 0,
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            arrows: true,
                            swipeToSlide: true
                        }
                    }]
            });

        }
    });


jQuery(document).ready(function(){
	jQuery( ".mix" ).on( "click", function() {
		if (jQuery(this).attr('data-logo')) {
			var logourl = jQuery(this).data("logo");
		  	jQuery("#NCS-logo").attr("src",logourl);
		  	jQuery( "#No-case-study" ).toggle();

		}
	});
		  	jQuery( "#No-case-study" ).on( "click", function(e) {
		  		if(e.target != this) return;
		  		jQuery( "#No-case-study" ).toggle();
		  	});
		  	jQuery( "#close-icon" ).on( "click", function(e) {
		  		jQuery( "#No-case-study" ).toggle();
		  	});
});

</script>
<?php get_template_part('templates/sections/footer/section', 'footer-contact'); ?>
<?php get_template_part('templates/sections/footer/section', 'footer-copyright'); ?>
<?php get_footer();?>

