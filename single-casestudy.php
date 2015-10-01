<?php
/**
 * Single post for casestudy post type
 * @since  1.0
 */
global $wd_wt;
 global $swap_color;
 $swap_color = new stdClass();
  $swap_color->main_menu = 'grey-gradient';
 $swap_color->social_menu = 'grey-gradient';

?>
<?php get_header();?>
<!-- Case Study single -->
<?php get_template_part('templates/sections/header/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/header/section', 'inner-head'); ?>
<?php get_template_part('templates/sections/header/section', 'more-menu'); ?>
<?php get_template_part('templates/sections/header/section', 'nav-bottom'); ?>

<?php
 if( have_posts() ):
  while( have_posts() ) : the_post();
 ?>
 <section class="sec-1">
    <div class="sec-1-side-bg darkgrey-dark"></div>
    <div class="sec-1-content-wrap darkgrey">
        <div class="sec-1-content">
            <h1 class="title"><?php the_field('section_1_title');?></h1>
			<?php the_field('section_1_description');?>
        </div>
        <div class="sec-1-img">
            <img src="<?php the_field('section_1_image');?>">
        </div>
    </div>
</section>

<section class="sec-2">
    <div class="sec-2-side-bg purple-dark"></div>
    <div class="sec-2-content-wrap purple">
        <div class="sec-2-img">
            <img src="<?php the_field('section_2_image');?>">
        </div>
        <div class="sec-2-content">
            <h1 class="title"><?php the_field('section_2_title');?></h1>
			<?php the_field('section_2_description');?>

        </div>
    </div>
</section>

<section class="sec-3">
    <div class="sec-3-side-bg white-dark"></div>
    <div class="sec-3-content-wrap white">
        <div class="sec-3-content">
            <h1 class="title"><?php the_field('section_3_title');?></h1>
			<?php the_field('section_3_description');?>

        </div>
        <div class="sec-3-more">
            <p class="p2">More Case Studies</p>
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe">
            <img src="<?php echo $wd_wt->tpl_url['assets'];?>img/placeholder.jpe">
        </div>
    </div>
</section>



<?php endwhile;
 endif; ?>

<?php get_template_part('templates/sections/footer/section', 'footer-contact'); ?>
<footer>
    <div class="footer-sidebar grey-dark"></div>
    <div class="footer-bg grey">
        <div class="footer-content">
            <p><?php echo cs_get_option("wd_copyright");?></p>

            <p><?php echo cs_get_option("wd_contact_number");?></p>
        </div>
    </div>
</footer>
<script>
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }


</script>
<?php get_footer();?>
