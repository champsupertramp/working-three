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

        }else{ // Front-end hooks

            add_action("wp_enqueue_scripts"  ,array( $this, "load_assets" ),100);

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



    }

    /**
     * Loads all scripts and styles
     *
     * @since 1.0
     */
    public function load_assets(){

        //stylesheets
        wp_enqueue_style( 'jquery-ui', "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" );
        wp_enqueue_style( 'working-three-main', $this->tpl_url['assets'].'css/main.css' );
        wp_enqueue_style( 'working-three-mobile', $this->tpl_url['assets'].'css/mobile.css',array(),'1.0.0','only screen and (min-width: 0px) and (max-width: 767px) and (orientation: portrait)' );
        wp_enqueue_style( 'working-three-table', $this->tpl_url['assets'].'css/tablet.css',array(),'1.0.0','only screen and (min-width: 768px) and (max-width: 959px)and (orientation: portrait)' );

        //scripts
        wp_enqueue_script( 'less', '//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'jquery-color', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'working-three-scripts', $this->tpl_url['assets'] . '/js/main.js', array(), '1.0.0', true );

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
