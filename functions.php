<?php
/**
 * Class WD_WorkingThree holds all theme functions
 *
 * @version 1.0
 * @author Champ Camba - www.worlddigital.com.au
 */

class WD_WorkingThree{



    /**
     * Theme URLs
     * @var array
     */
    public $tpl_url = array();

    /**
     * Init
     */
    function __construct(){

        // Action Hooks
        if( is_admin() ){ // Admin hooks

            add_action('after_setup_theme' , array( $this, 'theme_setup' ) ,10 );
            add_action('after_switch_theme', array( $this, 'flush_rewrite_rules') );
            add_filter( 'user_contactmethods', array($this, 'add_user_contact_methods'), 10, 1 );


        }else{ // Front-end hooks

            add_action("wp_enqueue_scripts"  ,array( $this, "load_assets" ),100);
            add_filter('nav_menu_css_class'  ,array( $this,'add_classes_on_li'),1,3);
            add_filter('nav_menu_link_attributes', array( $this, 'add_classes_on_menu_anchor'), 10, 3 );
            add_action('init', array( $this,'register_post_types' ),10);
            add_filter( 'template_include', array( $this, 'single_post_template') , 99 );
        }

        // Set URLs
        $this->tpl_url = array(
            "tpl"     => get_template_directory_uri(),
            "assets"  => get_template_directory_uri().'/assets/',
            "img"     => get_template_directory_uri().'/assets/img',
            "css"     => get_template_directory_uri().'/assets/css',
            "js"      => get_template_directory_uri().'/assets/js',
        );

        // Include theme framework
        require_once dirname( __FILE__ ) .'/codestar-framework/cs-framework.php';

    }

    /**
     * Loads default setup during theme activation
     *
     * @since 1.0
     */
    public function theme_setup(){

        // Make theme available for translation
        load_theme_textdomain('workingthree', get_template_directory() . '/lang');

        // Enable plugins to manage the document title
        // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
        add_theme_support('title-tag');

        // Register wp_nav_menu() menus
        // http://codex.wordpress.org/Function_Reference/register_nav_menus
        register_nav_menus(array(
          'primary_navigation' => __('Primary Navigation', 'workingthree')
        ));

        // Add post thumbnails
        // http://codex.wordpress.org/Post_Thumbnails
        // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
        // http://codex.wordpress.org/Function_Reference/add_image_size
        add_theme_support('post-thumbnails');
        add_image_size( 'image_740x490', 740, 490, true );
        add_image_size( 'image_174x174', 174, 174, true );
		add_image_size( 'image_580x400', 580, 400, true );

        // Add post formats
        // http://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

        // Add feed Links
        add_theme_support( 'automatic-feed-links' );

        // Add HTML5 markup for captions
        // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
        add_theme_support('html5', array('caption', 'comment-form', 'comment-list'));

        // Tell the TinyMCE editor to use a custom stylesheet
        add_editor_style( $this->tpl_url['assets'].'css/editor-style.css');

        $this->register_post_types();
    }

    /**
     * Registers post types & taxonomies
     * @since 1.0
     */
    public function register_post_types(){

                // Register post types
        $labels = array(
          'name'               => _x( 'Case Studies', 'post type general name', 'workingthree' ),
          'singular_name'      => _x( 'Cast Study', 'post type singular name', 'workingthree' ),
          'menu_name'          => _x( 'Case Studies', 'admin menu', 'workingthree' ),
          'name_admin_bar'     => _x( 'Cast Study', 'add new on admin bar', 'workingthree' ),
          'add_new'            => _x( 'Add New', 'case-study', 'workingthree' ),
          'add_new_item'       => __( 'Add New Cast Study', 'workingthree' ),
          'new_item'           => __( 'New Cast Study', 'workingthree' ),
          'edit_item'          => __( 'Edit Cast Study', 'workingthree' ),
          'view_item'          => __( 'View Cast Study', 'workingthree' ),
          'all_items'          => __( 'All Case Studies', 'workingthree' ),
          'search_items'       => __( 'Search Case Studies', 'workingthree' ),
          'parent_item_colon'  => __( 'Parent Case Studies:', 'workingthree' ),
          'not_found'          => __( 'No Case Studies found.', 'workingthree' ),
          'not_found_in_trash' => __( 'No Case Studies found in Trash.', 'workingthree' )
        );

        $args = array(
          'labels'             => $labels,
          'description'        => __( 'Description.', 'workingthree' ),
          'public'             => true,
          'publicly_queryable' => true,
          'show_ui'            => true,
          'show_in_menu'       => true,
          'query_var'          => true,
          'rewrite'            => array( 'slug' => 'case-study' ),
          'capability_type'    => 'post',
          'has_archive'        => true,
          'hierarchical'       => false,
          'menu_position'      => null,
          'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );

        register_post_type( 'casestudy', $args );
        $labels = array(
          'name'                       => _x( 'Categories', 'taxonomy general name' ),
          'singular_name'              => _x( 'Category', 'taxonomy singular name' ),
          'search_items'               => __( 'Search Categories' ),
          'popular_items'              => __( 'Popular Categories' ),
          'all_items'                  => __( 'All Categories' ),
          'parent_item'                => null,
          'parent_item_colon'          => null,
          'edit_item'                  => __( 'Edit Category' ),
          'update_item'                => __( 'Update Category' ),
          'add_new_item'               => __( 'Add New Category' ),
          'new_item_name'              => __( 'New Category Name' ),
          'separate_items_with_commas' => __( 'Separate categories with commas' ),
          'add_or_remove_items'        => __( 'Add or remove categories' ),
          'choose_from_most_used'      => __( 'Choose from the most used categories' ),
          'not_found'                  => __( 'No categories found.' ),
          'menu_name'                  => __( 'Categories' ),
        );

        $args = array(
          'hierarchical'          => true,
          'labels'                => $labels,
          'show_ui'               => true,
          'show_admin_column'     => true,
          'update_count_callback' => '_update_post_term_count',
          'query_var'             => true,
          'rewrite'               => array( 'slug' => 'casestudy-categories' ),
        );

        register_taxonomy( 'casestudy_categories', 'casestudy', $args );
    }

    /**
     * Adds classe to menu li elements
     *
     * @param Array $classes
     * @param Array $item
     * @param Array $args
     */
    public function add_classes_on_li($classes, $item, $args) {
        $classes[] = 'menu-top-item';
        return $classes;
    }

    /**
     * Add only "a-class-" prefixed classes to the menu link attribute
     *
     * @param Array $atts
     * @param Array $item
     */
    public function add_classes_on_menu_anchor($atts, $item, $args){

        $atts['class'] = 'menu-top-link';

        return $atts;
    }

    /**
     * Loads all scripts and styles
     *
     * @since 1.0
     */
    public function load_assets(){

        //scripts
        wp_enqueue_script( 'working-three-scripts', $this->tpl_url['assets'] . '/js/main.js', array(), '1.0.0', true );
        wp_enqueue_script( 'less', '//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'jquery-color', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js', array(), '1.0.0', true );

        //stylesheets
        wp_enqueue_style( 'jquery-ui', "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" );

        if ( is_home() || is_front_page() ) {
            wp_enqueue_style( 'working-three-landing', $this->tpl_url['assets'].'css/home.css' );
            wp_enqueue_style( 'working-three-landing-mobile', $this->tpl_url['assets'].'css/home_mobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
            wp_enqueue_style( 'working-three-landing-table', $this->tpl_url['assets'].'css/home_tablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );
            //script
            wp_enqueue_script( 'jquery-colorscroll', $this->tpl_url['assets'] . '/js/jquery.colorscroll.min.js', array(), '1.0.0', true );
            wp_enqueue_script( 'jquery-snapscroll', $this->tpl_url['assets'] . '/js/jquery.snapscroll.js', array(), '1.0.0', true );
            wp_enqueue_script( 'jquery-scroll_to', $this->tpl_url['assets'] . '/js/jquery.scroll_to.js', array(), '1.0.0', true );

        }elseif( is_page_template("template-contact.php") ){
            wp_enqueue_style( 'working-three-contact', $this->tpl_url['assets'].'css/contact.css' );
            wp_enqueue_style( 'working-three-contact-mobile', $this->tpl_url['assets'].'css/contact_mobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
            wp_enqueue_style( 'working-three-contact-table', $this->tpl_url['assets'].'css/contact_tablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );

        }elseif( is_page_template("template-insights.php") ){
            wp_enqueue_style( 'working-three-howwework', $this->tpl_url['assets'].'css/howwework.css' );
            wp_enqueue_style( 'working-three-howwework-mobile', $this->tpl_url['assets'].'css/howweworkmobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
            wp_enqueue_style( 'working-three-howwework-table', $this->tpl_url['assets'].'css/howweworktablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );

        }elseif( is_page_template("template-work.php") ){
            wp_enqueue_style( 'working-three-who-we-work-with', $this->tpl_url['assets'].'css/who-we-work-with.css' );
            wp_enqueue_style( 'working-three-who-we-work-with-mobile', $this->tpl_url['assets'].'css/who-we-work-with_mobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
            wp_enqueue_style( 'working-three-who-we-work-with-table', $this->tpl_url['assets'].'css/who-we-work-with_tablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );
            wp_enqueue_script( 'mixitup', 'http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js', array(), '1.0.0', true );

		}elseif( is_page_template("template-case-studies.php") ){
            wp_enqueue_style( 'working-three-case-studies-overview', $this->tpl_url['assets'].'css/case-studies-overview.css' );
            wp_enqueue_style( 'working-three-case-studies-overview-mobile', $this->tpl_url['assets'].'css/case-studies-overview-mobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
            wp_enqueue_style( 'working-three-case-studies-overview-table', $this->tpl_url['assets'].'css/case-studies-overview-tablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );

        }elseif( is_page_template("template-blog.php") ){
            wp_enqueue_style( 'working-three-insights-and-article', $this->tpl_url['assets'].'css/insights-and-article.css' );
            wp_enqueue_style( 'working-three-insights-and-article-mobile', $this->tpl_url['assets'].'css/insights-and-article-mobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
            wp_enqueue_style( 'working-three-insights-and-article-table', $this->tpl_url['assets'].'css/insights-and-article-tablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );

        }elseif( is_page_template("template-contact.php") ){
            wp_enqueue_style( 'working-three-contact', $this->tpl_url['assets'].'css/contact.css' );
            wp_enqueue_style( 'working-three-contact-mobile', $this->tpl_url['assets'].'css/contact_mobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
            wp_enqueue_style( 'working-three-contact-table', $this->tpl_url['assets'].'css/contact_tablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );

        }elseif( is_single() || is_page() ){
            wp_enqueue_style( 'working-three-insights-and-article-content', $this->tpl_url['assets'].'css/insights-and-article-content.css' );
            wp_enqueue_style( 'working-three-insights-and-article-content-mobile', $this->tpl_url['assets'].'css/insights-and-article-content-mobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
            wp_enqueue_style( 'working-three-insights-and-article-content-table', $this->tpl_url['assets'].'css/insights-and-article-content-tablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );

        }else{
            wp_enqueue_style( 'working-three-inner', $this->tpl_url['assets'].'css/about-us.css' );
            wp_enqueue_style( 'working-three-inner-mobile', $this->tpl_url['assets'].'css/about-us_mobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
            wp_enqueue_style( 'working-three-inner-table', $this->tpl_url['assets'].'css/about-us_tablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );
        }


    }

    /**
     * Allow single post/post type template
     *
     * @since  1.0
     */
    public function single_post_template( $template ){

          if ( is_single() &&  get_post_type(get_the_ID() ) ) {
            $_template = locate_template( array( 'single-casestudy.php'  ) );
            $template = ( $_template ) ? $_template : $template;
          }

          return $template;
    }

    /**
     * Adds user contact methods
     */
    public function add_user_contact_methods( $contactmethods ){

      if ( !isset( $contactmethods['position'] ) )
          $contactmethods['position'] = 'Position';
      if ( !isset( $contactmethods['twitter'] ) )
          $contactmethods['twitter'] = 'Twitter';
      if ( !isset( $contactmethods['linkedin'] ) )
          $contactmethods['linkedin'] = 'Linkedin';

        return $contactmethods;

    }

    /**
     * Flush rewrite rules for custom post types
     *
     * @since  1.0
     */
    public function flush_rewrite_rules() {
         flush_rewrite_rules();
    }


}

$wd_wt = new WD_WorkingThree;
global $wd_wt;
