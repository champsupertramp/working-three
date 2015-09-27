<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

/**
 * Framework options and fields settings
 * @var array
 */
$settings      = array(
  'menu_title' => 'W3 Theme',
  'menu_type'  => 'add_menu_page',
  'menu_slug'  => 'w3-theme-settings',
  //'ajax_save'  => true,
);

/**
 * Framework array options
 */
$options        = array();

/**
 * General settings
 */
$options[]      = array(
    'name'        => 'wd_general_settings',
    'title'       => 'General',
    'icon'        => 'fa fa_cog',
    'fields'      => array(

        array(
            'id'      => 'wd_contact_number',
            'type'    => 'text',
            'title'   => 'Contact Number',
            'default' => '+639 999 1999',
        ),

        array(
            'id'      => 'wd_copyright',
            'type'    => 'text',
            'title'   => 'Copyright',
            'default' => '123 Street, Wordpress Village',
        ),

        array(
            'id'      => 'wd_enable_newsletter',
            'type'    => 'switcher',
            'title'   => 'Enable Newsletter',
            'default' => true,
        ),

        array(
            'id'      => 'wd_custom_css',
            'type'    => 'textarea',
            'title'   => 'Custom CSS',
            'attributes' => array(
                'placeholder' => 'Insert your custom css here.',
            ),

        ),

        array(
            'id'      => 'wd_custom_scripts',
            'type'    => 'textarea',
            'title'   => 'Custom Scripts',
            'attributes' => array(
                'placeholder' => 'Insert your javascript here.',
            ),
        ),

    )
);

/**
 * Homepage Sections
 */
$options[]      = array(
    'name'        => 'wd_home_settings',
    'title'       => 'Landing Page Sections',
    'icon'        => 'fa fa_bars',
    'sections'      => array(

        array(
            'title' => 'First Section',
            'name'  => 'wd_section_first',
            'fields' => array(

                array(
                    'title' => 'Title',
                    'id' => 'wd_s1_title',
                    'type' => 'text',
                    'default' => 'This is a sample title',
                    'info'  => 'You can use &lt;span&gt; &lt;/span&gt; to underline a word and &lt;br/&gt; to break a line',
                    'sanitize' => false,
                ),

                array(
                    'title' => 'Description',
                    'id'    => 'wd_s1_description',
                    'type'  => 'wysiwyg',
                    'default' => 'Lorem ipsum',
                ),

                array(
                    'title' => 'Button Text',
                    'id'  => 'wd_s1_button_text',
                    'type'  => 'text',
                    'default' => "Let's Get To Work",
                    'sanitize' => false,
                ),

                array(
                    'title' => 'Button Link',
                    'id'  => 'wd_s1_button_link',
                    'type'  => 'text',
                    'default' => '#',
                ),



            ),
        ),

        array(
            'title' => 'Second Section',
            'name'  => 'wd_section_second',
            'fields' => array(
                array(
                    'title' => 'Title',
                    'id' => 'wd_s2_title',
                    'type' => 'text',
                    'default' => 'This is a sample title',
                    'sanitize'  => false,
                ),
                array(
                    'title' => 'Description',
                    'id'  => 'wd_s2_description',
                    'type'  => 'wysiwyg',
                    'default' => 'Lorem ipsum',
                ),
                array(
                    'id'             => 'wd_s2_add_posts',
                    'type'           => 'select',
                    'title'          => 'Select Post Categories to Show',
                    'options'        => 'categories',
                    'query_args'     => array(
                      'post_type'    => 'casestudy',
                      'taxonomy'     => 'casestudy_categories',
                      'orderby'      => 'post_title',
                      'order'        => 'ASC',
                    ),
                    'default_option' => '- All Case Study Categories -',
                    'info'           => 'Only 3 case study posts with thumbnails will be display'
                ),
                array(
                    'title' => 'Button Text',
                    'id'  => 'wd_s2_button_text',
                    'type'  => 'text',
                    'default' => 'See Our Work',
                    'sanitize'  => false,
                ),

                array(
                    'title' => 'Button Link',
                    'id'  => 'wd_s2_button_link',
                    'type'  => 'text',
                    'default' => '#',
                ),

            ),
        ),

        array(
            'title' => 'Third Section',
            'name'  => 'wd_section_third',
            'fields' => array(
                array(
                    'title' => 'Title',
                    'id' => 'wd_s3_title',
                    'type' => 'text',
                    'default' => 'This is a sample title',
                    'sanitize'  => false,
                ),

                array(
                    'title' => 'Description',
                    'id'  => 'wd_s3_description',
                    'type'  => 'wysiwyg',
                    'default' => 'Lorem ipsum',
                ),

                array(
                    'title' => 'Button Text',
                    'id'  => 'wd_s3_button_text',
                    'type'  => 'text',
                    'default' => 'See How We Can Help',
                    'sanitize'  => false,
                ),

                array(
                    'title' => 'Button Link',
                    'id'  => 'wd_s3_button_link',
                    'type'  => 'text',
                    'default' => '#',
                ),
                array(
                  'id'              => 'wd_s3_skills_section',
                  'type'            => 'group',
                  'title'           => 'Skills',
                  'button_title'    => 'Add New',
                  'accordion_title' => 'Add New Skill',
                  'fields'          => array(

                      array(
                        'id'          => 'wd_s3_skills_title',
                        'type'        => 'text',
                        'title'       => 'Title',
                      ),

                      array(
                        'id'          => 'wd_s3_skills_short_description',
                        'type'        => 'textarea',
                        'title'       => 'Short description',
                      ),

                      array(
                          'id'      => 'wd_s3_skills_logo',
                          'type'    => 'upload',
                          'title'   => 'Logo',
                          'default' => '',
                          'info'  => 'Minimum logo size: 61x61'
                      ),

                  )
                ),


            ),
        ),

        array(
            'title' => 'Fourth Section',
            'name'  => 'wd_section_fourth',
            'fields' => array(
                array(
                    'title'   => 'Title',
                    'id'    => 'wd_s4_title',
                    'type'    => 'text',
                    'default' => 'This is a sample title',
                    'sanitize'  => false,
                ),
                 array(
                    'title'   => 'Description',
                    'id'      => 'wd_s4_description',
                    'type'    => 'wysiwyg',
                    'default' => 'Lorem ipsum',
                ),
                array(
                    'title'   => 'Short Description',
                    'id'      => 'wd_s4_short_description',
                    'type'    => 'wysiwyg',
                    'default' => 'Lorem ipsum',
                    'info'    => 'this shows above the button text at the right side of the section'
                ),
                array(
                    'title'   => 'Button Text',
                    'id'    => 'wd_s4_button_text',
                    'type'    => 'text',
                    'default' => 'Discover',
                    'sanitize'  => false,
                ),

                array(
                    'title'   => 'Button Link',
                    'id'    => 'wd_s4_button_link',
                    'type'    => 'text',
                    'default' => '#',
                ),

            ),
        ),

        array(
            'title' => 'Fifth Section',
            'name'  => 'wd_section_fifth',
            'fields' => array(
                array(
                    'title' => 'Title',
                    'id' => 'wd_s5_title',
                    'type' => 'text',
                    'default' => 'This is a sample title',
                    'sanitize'  => false,
                ),
                array(
                    'id'             => 'wd_s5_add_posts',
                    'type'           => 'select',
                    'title'          => 'Select Blog Post Categories to Show',
                    'options'        => 'categories',
                    'default_option' => '- Select -',
                    'info'           => 'Only 3 blog posts will be displayed'
                ),
            ),
        ),
    )
);

/**
 * Social Links section
 */
$options[]      = array(
    'name'        => 'wd-social-links',
    'title'       => 'Social Links',
    'icon'        => 'fa fa-external-link',
    'fields'      => array(

        array(
            'id'      => 'social_icon_linkedin',
            'type'    => 'text',
            'title'   => 'LinkedIn',
            'default' => '#',
        ),
        array(
            'id'      => 'social_icon_facebook',
            'type'    => 'text',
            'title'   => 'Facebook',
            'default' => '#',
        ),
        array(
            'id'      => 'social_icon_twitter',
            'type'    => 'text',
            'title'   => 'Twitter',
            'default' => '#',
        ),
    )
);

/**
 * Newsletter section
 */
$options[]      = array(
    'name'        => 'wd_newsletter',
    'title'       => 'Newsletter',
    'icon'        => 'fa fa-envelope-square',
    'fields'      => array(

        array(
            'id'      => 'wd_newsletter_title',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => '',
        ),

        array(
            'id'      => 'wd_newsletter_logo',
            'type'    => 'upload',
            'title'   => 'Logo',
            'default' => '',
            'info'  => 'Minimum logo size: 64x64'
        ),

        array(
            'id'      => 'wd_newsletter_content',
            'type'    => 'wysiwyg',
            'title'   => 'Description',
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam venenatis feugiat ex, a vestibulum turpis consequat in. Integer mi purus, tincidunt finibus ligula vel, vulputate facilisis tellus. Ut non consequat mauris.',
        ),

    )
);

/**
 * Fields References
 */
$dev_mode = true;

if( $dev_mode ){

    $options[]      = array(
      'name'        => 'dev-mode',
      'title'       => 'Dev Mode',
      'icon'        => 'fa fa-star',

      'fields'      => array(



        array(
          'id'      => 'text_1',
          'type'    => 'text',
          'title'   => 'Text',
        ),

        array(
          'id'      => 'textarea_1',
          'type'    => 'textarea',
          'title'   => 'Textarea',
          'help'    => 'This option field is useful. You will love it!',
        ),

        array(
          'id'      => 'upload_1',
          'type'    => 'upload',
          'title'   => 'Upload',
          'help'    => 'Upload a site logo for your branding.',
        ),

        array(
          'id'      => 'switcher_1',
          'type'    => 'switcher',
          'title'   => 'Switcher',
          'label'   => 'You want to update for this framework ?',
        ),

        array(
          'id'      => 'color_picker_1',
          'type'    => 'color_picker',
          'title'   => 'Color Picker',
          'default' => '#3498db',
        ),

        array(
          'id'      => 'checkbox_1',
          'type'    => 'checkbox',
          'title'   => 'Checkbox',
          'label'   => 'Did you like this framework ?',
        ),

        array(
          'id'      => 'radio_1',
          'type'    => 'radio',
          'title'   => 'Radio',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.',
          ),
          'help'    => 'Are you sure for this choice?',
        ),

        array(
          'id'             => 'select_1',
          'type'           => 'select',
          'title'          => 'Select',
          'options'        => array(
            'bmw'          => 'BMW',
            'mercedes'     => 'Mercedes',
            'volkswagen'   => 'Volkswagen',
            'other'        => 'Other',
          ),
          'default_option' => 'Select your favorite car',
        ),

        array(
          'id'      => 'number_1',
          'type'    => 'number',
          'title'   => 'Number',
          'default' => '10',
          'after'   => ' <i class="cs-text-muted">$ (dollars)</i>',
        ),

        array(
          'id'        => 'image_select_1',
          'type'      => 'image_select',
          'title'     => 'Image Select',
          'options'   => array(
            'value-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
            'value-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
            'value-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
            'value-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
            'value-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
          ),
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'This is info notice field for your highlight sentence.',
        ),

        array(
          'id'      => 'background_1',
          'type'    => 'background',
          'title'   => 'Background',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'warning',
          'content' => 'This is info warning field for your highlight sentence.',
        ),

        array(
          'id'      => 'icon_1',
          'type'    => 'icon',
          'title'   => 'Icon',
          'desc'    => 'Some description here for this option field.',
        ),

        array(
          'id'      => 'text_2',
          'type'    => 'text',
          'title'   => 'Text',
          'desc'    => 'Some description here for this option field.',
        ),

        array(
          'id'        => 'textarea_2',
          'type'      => 'textarea',
          'title'     => 'Textarea',
          'info'      => 'Some information here for this option field.',
          'shortcode' => true,
        ),

      ), // end: fields
    );
}

CSFramework::instance( $settings, $options );
