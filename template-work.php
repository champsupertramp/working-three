<?php
/**
 * Template Name: Our Work
 *
 * @since  1.0
 */

 global $wd_wt;
?>
<?php get_header();?>
<?php get_template_part('templates/sections/section', 'newsletter'); ?>
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

            <?php $case_study_terms = get_terms('casestudy_categories', array( 'hide_empty' => 0 )); ?>
            <?php foreach( $case_study_terms  as $term ){ ?>
            <button class="filter" data-filter=".<?php echo $term->slug;?>"><?php echo $term->name;?></button>
            <?php } ?>

        </div>
        <div class="mix-container">
        <?php
        $args = array(
          'post_type' => 'casestudy',
          'post_status' => 'public',
          'posts_per_page' => -1,
        );
        ?>
        <?php $case_studies = new WP_Query(  $args ); ?>
        <?php while( $case_studies->have_posts() ){ $case_studies->the_post(); ?>
        <?php
          $categories = get_the_terms(get_the_ID(),'casestudy_categories');

          $arr_category = array();
          if( ! empty( $categories ) ){
             foreach ($categories as $category) {
                  array_push( $arr_category , strtolower($category->name));
              }
          }
        ?>
        <div class="mix <?php echo implode(" ",$arr_category); ?>">
            <?php echo get_the_post_thumbnail( get_the_ID(), 'image_174x174', array( 'class' => 'client-logo' ) ); ?>
            <?php  $meta_data = get_post_meta( get_the_ID(), '_custom_meta_options', true );?>
            <div class="mix-study-wrap"><a href="<?php the_permalink(); ?>" class="mix-study <?php echo ! empty( $meta_data['show_casestudy_link'] ) && $meta_data['show_casestudy_link'] == true?'on':'off'?>">VIEW CASE STUDY</a></div>
        </div>
        <?php } ?>
        <div class="gap"></div>
        <div class="gap"></div>
            </div>
    </div>
</section>

<script type="text/javascript">
jQuery(function () {
  jQuery('#Container').mixItUp();
});
</script>

<?php get_template_part('templates/sections/section', 'inner-work-footer'); ?>
<?php get_footer();?>

