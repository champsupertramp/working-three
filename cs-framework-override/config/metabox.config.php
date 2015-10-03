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

/**
 * options fields settings
 * @var array
 */
$metaboxes        = array();


/**
 * Case study post type
 */
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

$metaboxes[]      = array(
  'id'            => '_casestudy_meta_fields',
  'title'         => 'Case Study',
  'post_type'     => 'casestudy', // or post or CPT
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(

    // section 1
    array(
        'name'      => 'section_1',
        'title'     => 'Section 1',
        'fields'    => array(

          // a field
          array(
            'id'    => 'casestudy_section1_title',
            'type'  => 'text',
            'title' => 'Title',
            'sanitize' => false,
          ),
          array(
            'id'        => 'casestudy_section1_image_select_option',
            'type'      => 'image_select',
            'title'     => 'Background Color',
            'options'   => array(
              'blue'    => get_template_directory_uri() .'/assets/img/color-picker-skyblue.png',
              'green'    => get_template_directory_uri() .'/assets/img/color-picker-green.png',
              'grey'    => get_template_directory_uri() .'/assets/img/color-picker-grey.png',
              'purple'    => get_template_directory_uri() .'/assets/img/color-picker-purple.png',
              'red'    => get_template_directory_uri() .'/assets/img/color-picker-red.png',
              'yellow'    => get_template_directory_uri() .'/assets/img/color-picker-yellow.png',
            ),
            'default'   => 'skyblue',
          ),
          array(
            'id'    => 'casestudy_section1_description',
            'type'  => 'wysiwyg',
            'title' => 'Description',
          ),

          array(
              'id'      => 'casestudy_section1_image',
              'type'    => 'upload',
              'title'   => 'Select an Image',
              'settings' => array(
                  'upload_type'    => 'image',
                  'button_title'   => 'Upload',
                  'frame_title'    => 'Select an image',
                  'insert_title'   => 'Use this image',
              ),
          ),

        ),
    ),
    // section 2
    array(
        'name'      => 'section_2',
        'title'     => 'Section 2',
        'fields'    => array(

          // a field
          array(
              'id'    => 'casestudy_section2_title',
              'type'  => 'text',
              'title' => 'Title',
              'sanitize' => false,
          ),

          array(
              'id'    => 'casestudy_section2_description',
              'type'  => 'wysiwyg',
              'title' => 'Description',
          ),

          array(
              'id'              => 'casestudy_section2_gallery',
              'type'            => 'group',
              'title'           => 'Photos',
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New Photo',
              'fields'          => array(
                  array(
                      'id'      => 'casestudy_section2_uploader',
                      'type'    => 'upload',
                      'title'   => 'Select an Image',
                      'settings'      => array(
                         'upload_type'    => 'image',
                         'button_title'   => 'Upload',
                         'frame_title'    => 'Select an image',
                         'insert_title'   => 'Use this image',
                      ),
                  ),

              ),
          ),


        ),
    ),
    // section 3
    array(
        'name'      => 'section_3',
        'title'     => 'Section 3',
        'fields'    => array(

          // a field
          array(
            'id'    => 'casestudy_section3_title',
            'type'  => 'text',
            'title' => 'Title',
            'sanitize' => false,
          ),

          array(
            'id'    => 'casestudy_section3_description',
            'type'  => 'wysiwyg',
            'title' => 'Description',
          ),

          array(
              'id'      => 'casestudy_section3_image',
              'type'    => 'upload',
              'title'   => 'Select an Image',
              'settings' => array(
                  'upload_type'    => 'image',
                  'button_title'   => 'Upload',
                  'frame_title'    => 'Select an image',
                  'insert_title'   => 'Use this image',
              ),
          ),


        ),
    ),


  ),
);

/**
 * Single post
 */
$metaboxes[]      = array(
  'id'            => '_custom_meta_options',
  'title'         => 'Post Options',
  'post_type'     => 'post', // or post or CPT
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(

    // begin section
    array(
      'name'      => 'section_1',
      'title'     => 'Post section',
      'icon'      => 'fa fa-wifi',
      'fields'    => array(

        // a field
        array(
          'id'    => 'wd_blog_second_heading',
          'type'  => 'wysiwyg',
          'title' => 'Second Post Heading',
        ),


      ),
    ),


  ),
);

CSFramework_Metabox::instance( $metaboxes );
