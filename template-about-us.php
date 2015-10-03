<?php
/**
 * Template Name: About Us
 *
 *  @since  1.0
 */
 global $wd_wt;
 global $swap_color;
 $swap_color = new stdClass();
 $swap_color->logo = 'green-gradient-dark';
 $swap_color->main_menu = 'green-gradient';
 $swap_color->social_menu = 'green-gradient';

?>
<?php get_header();?>
<?php get_template_part('templates/sections/header/section', 'newsletter'); ?>
<?php get_template_part('templates/sections/header/section', 'inner-head'); ?>
<?php get_template_part('templates/sections/header/section', 'more-menu'); ?>
<?php get_template_part('templates/sections/header/section', 'nav-bottom'); ?>
<a class="anchor" name="1"></a>
<section class="sec-1">
    <div class="sec-1-sidebar green-dark">
        <nav class="nav-side nav-side-white">
            <ul>
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
            </ul>
        </nav>
    </div>
    <nav class="nav-side-tablet green">
        <div class="nav-side-tablet-wrap">
            <a class="nav-side-active-1" href="#1">1</a>
            <a href="#2">2</a>
            <a href="#3">3</a>
            <a href="#4">4</a>
        </div>
    </nav>
    <div class="sec-1-bg green">

        <div class="sec-1-content">
            <h1><?php _e( cs_get_option( 'wd_about_s1_title' ), "workingthree" ); ?></h1>

            <p class="p1"><?php _e( cs_get_option( 'wd_about_s1_description' ), "workingthree" ); ?></p>

        </div>
    </div>
</section>
<a class="anchor" name="2"></a>
<section class="sec-2">
    <div class="sec-2-sidebar white-dark">
        <nav class="nav-side nav-side-green">
            <ul>
                <li class="hoverable">
                    <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                </li>
                <li><a href="#2">two</a></li>
                <li class="hoverable">
                    <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                </li>
                <li class="hoverable">
                    <span class="normal"><a href="#4">4</a></span><span class="hover"><a href="#4">four</a></span>
                </li>
            </ul>
        </nav>
    </div>
    <nav class="nav-side-tablet white">
        <div class="nav-side-tablet-wrap">
            <a href="#1">1</a>
            <a class="nav-side-active-2" href="#2">2</a>
            <a href="#3">3</a>
            <a href="#4">4</a>
        </div>
    </nav>
    <div class="sec-2-bg white">
        <div class="sec-2-content">
            <div class="sec-2-col-a">
            	<?php _e( cs_get_option( 'wd_about_s2_left_column' ), "workingthree" ); ?>

            </div>
            <div class="sec-2-col-b">
            	<?php _e( cs_get_option( 'wd_about_s2_right_column' ), "workingthree" ); ?>
                <?php $values = cs_get_option("wd_about_s2_values_section"); ?>
                <div class="sec-3-col-b">
                <?php if( isset( $values ) && ! empty( $values ) ){ ?>
                    <?php foreach( $values as $value ){?>
	                <div class="values">
	                    <p class="p2"><?php echo $value["wd_about_s2_values_title"];?></p>

	                    <p class="p1"><?php echo $value["wd_about_s2_values_short_description"];?></p>
	                </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="sec-2b">
    <div class="sec-2b-sidebar grey-dark">
    </div>
    <div class="sec-2b-bg grey">
        <div class="sec-2b-content">
            <h2><span class="underline"><?php _e( cs_get_option( 'wd_about_s3_title' ), "workingthree" ); ?></span></h2>

            <p class="p1"><?php _e( cs_get_option( 'wd_about_s3_description' ), "workingthree" ); ?></p>

        </div>
    </div>
</section>
<a class="anchor" name="3"></a>
<section class="sec-3">
    <div class="sec-3-sidebar white-dark">
        <nav class="nav-side nav-side-green">
            <ul>
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
            </ul>
        </nav>
    </div>
    <nav class="nav-side-tablet white">
        <div class="nav-side-tablet-wrap">
            <a href="#1">1</a>
            <a href="#2">2</a>
            <a class="nav-side-active-3" href="#3">3</a>
            <a href="#4">4</a>
        </div>
    </nav>
    <div class="sec-3-bg white">
        <div class="sec-3-content">
            <h2><?php _e( cs_get_option( 'wd_about_s4_title' ), "workingthree" ); ?></h2>

            <p class="p1"><?php _e( cs_get_option( 'wd_about_s4_description' ), "workingthree" ); ?></p>

            <p class="p2">The board members</p>
			<?php
			$args = array(
				'post_type' => 'teammember',
				'tax_query' => array(
					array(
						'taxonomy' => 'teammember_categories',
						'field'    => 'slug',
						'terms'    => 'boardmembers',
					),
				),
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();?>
			            <div class="sec-3-member">
			            	<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('image_400x400', array( 'class' => 'avatar' ));
							} ?>

			                <p class="p2"><?php the_title();?></p>

			                <p class="p1"><?php echo get_the_excerpt(); ?></p>
			            </div>
				<?php }
			} else {}
			wp_reset_postdata();?>


            <p class="p2">The leadership team</p>
			<?php
			$args = array(
				'post_type' => 'teammember',
				'tax_query' => array(
					array(
						'taxonomy' => 'teammember_categories',
						'field'    => 'slug',
						'terms'    => 'leadership-team',
					),
				),
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();?>
			            <div class="sec-3-member">
			            	<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('image_400x400', array( 'class' => 'avatar' ));
							} ?>

			                <p class="p2"><?php the_title();?></p>

			                <p class="p1"><?php echo get_the_excerpt(); ?></p>
			            </div>
				<?php }
			} else {}
			wp_reset_postdata();?>
        </div>
    </div>
</section>
<a class="anchor" name="4"></a>
<section class="sec-4">
    <div class="sec-4-sidebar grey-dark">
        <nav class="nav-side nav-side-green">
            <ul>
                <li class="hoverable">
                    <span class="normal"><a href="#1">1</a></span><span class="hover"><a href="#1">one</a></span>
                </li>
                <li class="hoverable">
                    <span class="normal"><a href="#2">2</a></span><span class="hover"><a href="#2">two</a></span>
                </li>
                <li class="hoverable">
                    <span class="normal"><a href="#3">3</a></span><span class="hover"><a href="#3">three</a></span>
                </li>
                <li><a href="#4">four</a></li>
            </ul>
        </nav>
    </div>
    <nav class="nav-side-tablet grey">
        <div class="nav-side-tablet-wrap">
            <a href="#1">1</a>
            <a href="#2">2</a>
            <a href="#3">3</a>
            <a class="nav-side-active-4" href="#4">4</a>
        </div>
    </nav>
    <div class="sec-4-bg grey">
        <div class="sec-4-content">
            <h2><?php _e( cs_get_option( 'wd_about_s5_title' ), "workingthree" ); ?></h2>

            <p class="p1"><?php _e( cs_get_option( 'wd_about_s5_description' ), "workingthree" ); ?></p>

            <p class="p2">The senior team</p>
			<?php
			$args = array(
				'post_type' => 'teammember',
				'tax_query' => array(
					array(
						'taxonomy' => 'teammember_categories',
						'field'    => 'slug',
						'terms'    => 'leadership-team',
					),
				),
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();?>
            			<div class="sec-4-member">
			            	<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('image_400x400', array( 'class' => 'avatar' ));
							} ?>

			                <p class="p2"><?php the_title();?></p>

			                <p class="p1"><?php echo get_the_excerpt(); ?></p>
			            </div>
				<?php }
			} else {}
			wp_reset_postdata();?>
        </div>
    </div>
</section>
<?php get_template_part('templates/sections/footer/section', 'footer-contact-custom'); ?>
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
    $('a').click(function () {
        $('html, body').animate({
            scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
        }, 400);
        return false;
    });

</script>
<?php get_footer(); ?>
