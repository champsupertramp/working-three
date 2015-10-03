<?php
/**
 * Single post for casestudy post type
 * @since  1.0
 */
global $wd_wt;
global $swap_color;

get_header();

if( have_posts() ):
  while( have_posts() ) : the_post();


  $casestudy_meta = get_post_meta( get_the_ID() , "_casestudy_meta_fields",true);
  $scheme = isset($casestudy_meta['casestudy_section1_image_select_option'])? $casestudy_meta['casestudy_section1_image_select_option']:'blue';

  $swap_color = new stdClass();
  $swap_color->main_menu = "{$scheme}-gradient";
  $swap_color->social_menu = "{$scheme}-gradient";

?>
<!-- Case Study single -->
<?php get_template_part('templates/sections/header/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/header/section', 'inner-head'); ?>
<?php get_template_part('templates/sections/header/section', 'more-menu'); ?>
<?php get_template_part('templates/sections/header/section', 'nav-bottom'); ?>

<?php


  $colors = $wd_wt->get_gradient_color( $scheme );
  $left = $colors['left'];
  $right = $colors['right'];

 ?>
 <section class="sec-1">
    <div class="sec-1-side-bg <?php echo $left;?>"></div>
    <div class="sec-1-content-wrap <?php echo $right;?>">
        <div class="sec-1-content">
            <h1 class="title"><?php _e( isset($casestudy_meta['casestudy_section1_title'])?$casestudy_meta['casestudy_section1_title']:'', "workingthree" );?></h1>
			     <?php _e( isset($casestudy_meta['casestudy_section1_description'])?$casestudy_meta['casestudy_section1_description']:'', "workingthree" );?>
        </div>
        <div class="sec-1-img">
        <?php if( isset( $casestudy_meta['casestudy_section1_image'] ) ){ ?>
            <img src="<?php echo $casestudy_meta['casestudy_section1_image'];?>">
        <?php } ?>
        </div>
    </div>
</section>

<section class="sec-2">
    <div class="sec-2-side-bg purple-dark"></div>
    <div class="sec-2-content-wrap purple">
        <div class="sec-2-img">

         <?php if( ! empty( $casestudy_meta['casestudy_section2_gallery'] )  ){ ?>
          <ul>

            <?php $i = 1; foreach( $casestudy_meta['casestudy_section2_gallery'] as $key ){ ?>
              <li <?php echo $i > 1? 'style="display:none;"':''; ?>>
                <img src="<?php echo $key['casestudy_section2_uploader']; ?>"/>
              </li>
            <?php $i++; }   ?>
          </ul>
        <?php } ?>
        </div>
        <div class="sec-2-content">
            <h1 class="title"><?php _e( isset($casestudy_meta['casestudy_section2_title'])?$casestudy_meta['casestudy_section2_title']:'', "workingthree" );?></h1>
			     <?php _e( isset($casestudy_meta['casestudy_section2_description'])?$casestudy_meta['casestudy_section2_description']:'', "workingthree" );?>

        </div>
    </div>
</section>

<section class="sec-3">
    <div class="sec-3-side-bg white-dark"></div>
    <div class="sec-3-content-wrap white">
        <div class="sec-3-content">
            <h1 class="title"><?php _e( isset($casestudy_meta['casestudy_section3_title'])?$casestudy_meta['casestudy_section3_title']:'', "workingthree" );?></h1>
			     <?php _e( isset($casestudy_meta['casestudy_section3_description'])?$casestudy_meta['casestudy_section3_description']:'', "workingthree" );?>

        </div>
        <div class="sec-3-more">
            <p class="p2">More Case Studies</p>
                    <?php
            $arr = array(
                'post_type' => 'casestudy',
                'posts_per_page' => 3,
            );


            $the_query = new WP_Query( $arr );

        while(  $the_query->have_posts() ){
          $the_query->the_post();
          echo "<a href='".get_the_permalink()."'>";
          if ( has_post_thumbnail() ) {
                the_post_thumbnail('image_174x174');
          }
          echo "</a>";
        }
        ?>

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
