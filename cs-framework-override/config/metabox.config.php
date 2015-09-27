<?php
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Metabox Config
 *
 * @since 1.0
 * @version 1.0
 *
 */
$metaboxes        = array();

$metaboxes[]      = array(
  'id'            => '_custom_meta_options',
  'title'         => 'Post Options',
  'post_type'     => 'casestudy', // or post or CPT
  'context'       => 'side',
  'priority'      => 'default',
  'sections'      => array(

    // begin section
    array(
      'name'      => 'section_1',
      'title'     => 'View Case Study',
      'icon'      => 'fa fa-wifi',
      'fields'    => array(

        // a field
        array(
          'id'    => 'show_casestudy_link',
          'type'  => 'switcher',
          'title' => 'Show the link',
          'default' => true,
        ),


      ),
    ),


  ),
);

CSFramework_Metabox::instance( $metaboxes );
