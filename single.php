<?php
/**
 * Single post page
 * @since  1.0
 */
 global $wd_wt;
?>
<?php get_header();?>

<?php get_template_part('templates/sections/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/section', 'inner-page-head'); ?>

<!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="sec-1">
    <div class="sec-1-sidebar green-dark">
        <nav class="nav-side nav-side-white">
<!--             <ul>
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
            </ul> -->
        </nav>
    </div>
    <nav class="nav-side-tablet green">
<!--         <div class="nav-side-tablet-wrap">
            <a class="nav-side-active-1" href="#1">1</a>
            <a href="#2">2</a>
            <a href="#3">3</a>
            <a href="#4">4</a>
        </div> -->
    </nav>
    <div class="sec-1-bg green">

        <div class="sec-1-content">
            <h1><?php the_title(); ?></h1>

            <p class="p1"><?php the_excerpt(); ?></p>

        </div>
    </div>
</section>
<a class="anchor" name="3"></a>
<section class="sec-3">
    <div class="sec-3-sidebar white-dark">
        <nav class="nav-side nav-side-green">
  <!--           <ul>
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
            </ul> -->
        </nav>
    </div>
    <nav class="nav-side-tablet white">
   <!--      <div class="nav-side-tablet-wrap">
            <a href="#1">1</a>
            <a href="#2">2</a>
            <a class="nav-side-active-3" href="#3">3</a>
            <a href="#4">4</a>
        </div> -->
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

<?php get_template_part('templates/sections/section', 'inner-page-footer'); ?>

<?php get_footer();?>
