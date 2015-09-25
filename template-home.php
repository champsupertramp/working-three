<?php
/**
 * Template Name: Landing Page
 *
 * @since  1.0
 */

 global $wd_wt;
?>
<?php get_header();?>

<?php get_template_part('templates/sections/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/section', 'main'); ?>
<?php get_template_part('templates/sections/section', 'handheld'); ?>

<?php get_footer();?>
