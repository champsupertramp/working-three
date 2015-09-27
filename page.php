<?php
/**
 * Page
 * @since  1.0
 */
 global $wd_wt;
?>
<?php get_header();?>

<?php get_template_part('templates/sections/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/section', 'contact-head'); ?>

<!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="sec-1">
    <div class="sec-1-sidebar">
        <nav class="nav-side nav-side-white">

        </nav>
    </div>
    <nav class="nav-side-tablet">

    </nav>
    <div class="sec-1-bg">

        <div class="sec-1-content">
            <h1><?php the_title(); ?></h1>

            <p class="p1"><?php the_excerpt(); ?></p>

        </div>
    </div>
</section>
<a class="anchor" name="3"></a>
<section class="sec-3">
    <div class="sec-3-sidebar white-dark">
        <nav class="nav-side">

        </nav>
    </div>
    <nav class="nav-side-tablet white">

    </nav>
    <div class="sec-3-bg white">
        <div class="sec-3-content">
            <h2>Inner Page</h2>

        </div>
    </div>
</section>
 <?php endwhile; else : ?>


  <!-- The very first "if" tested to see if there were any Posts to -->
  <!-- display.  This "else" part tells what do if there weren't any. -->
  <p><?php _e( 'Sorry, no posts matched your criteria.','workingthree' ); ?></p>

  <!-- REALLY stop The Loop. -->
 <?php endif; ?>

<?php get_template_part('templates/sections/section', 'contact-footer'); ?>

<?php get_footer();?>
