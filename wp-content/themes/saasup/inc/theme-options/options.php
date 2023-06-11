<?php

use function PHPSTORM_META\type;

if( class_exists( 'CSF' ) ) {

// Set a unique slug-like ID
$prefix = 'saasup';

 // Create options
 CSF::createOptions( $prefix, array(
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-options',
    'framework_title' => 'Theme Options <small>by Coder It Solution</small>',
    'menu_icon' => 'dashicons-heart',
    'menu_position' => 5,
    'footer_text' => 'Develop by Coder It Solution',
  ) );
// Header Option
  CSF::createSection( $prefix, array(
    'title'  => 'Header Optiopns',
    'icon'  => 'fas fa-theater-masks',
    'fields' => array(
      // A text field
      array(
        'id'    => 'favicon-upload',
        'type'  => 'media',
        'title' => 'Favicon',
        'default' => array(
            'url' => get_template_directory_uri().'/assets/images/Logo.svg'
        )
      ),
      array(
        'id'    => 'header-logo',
        'type'  => 'media',
        'title' => 'Header Logo',
        'default' => array(
            'url' => get_template_directory_uri().'/assets/images/Logo.svg'
        ),
      ),
      array(
        'id' => 'header-button-1',
        'title' => 'Header Button 1 Text',
        'type' => 'text',
        'default' => 'Sing In'
      ),
      array(
        'id' => 'header-1-url',
        'title' => 'Header Button 1 Url',
        'type' => 'text',
        'default' => '#'
      ),
    )
  ) );
  // Blog Section
  CSF::createSection( $prefix, array(
    'title'  => 'Blog Page',
    'icon'  => 'fas fa-cube',
    'fields' => array(
      // A text field
      array(
        'id'    => 'blog-page-title',
        'type'  => 'text',
        'title' => 'Blog Page Title',
        'default' => 'News & Articles'
      ),
      array(
        'id'    => 'blog-page-description',
        'type'  => 'textarea',
        'title' => 'Blog Description',
        'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene.'
      ),
    )
  ) );
  // Bennar Section
  CSF::createSection( $prefix, array(
      'title' => 'Bennar Option',
      'icon' => 'fas fa-solar-panel',
      'fields' => array(
          array(
            'id' => 'bennar-image',
            'title' => 'Bennar Image',
            'type' => 'media',
            'default' => array(
                'url' => get_template_directory_uri().'/assets/images/Image22.png'
            )
          ),
          array(
            'id' => 'bennar-heading',
            'title' => 'Bennar Heading',
            'type' => 'text',
            'default' => 'Build your audience and grow your brand'
          ),
          array(
            'id' => 'bennar-description',
            'title' => 'Bennar Description',
            'type' => 'textarea',
            'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene'
          ),
          array(
            'id' => 'bennar-button-1',
            'title' => 'Button 1 Text',
            'type' => 'text',
            'default' => 'Get Started'
          ),
          array(
            'id' => 'button-1-url',
            'title' => 'Button 1 Url',
            'type' => 'text',
            'default' => '#'
          ),
          array(
            'id' => 'bennar-button-2',
            'title' => 'Button 2 Text',
            'type' => 'text',
            'default' => 'Watch Video'
          ),
          array(
            'id' => 'button-2-url',
            'title' => 'Button 2 Video Url',
            'type' => 'text',
            'default' => 'https://www.youtube.com/watch?v=oOkGmK3_Hdg'
          ),
      )
  ));
  // Footer Section
  CSF::createSection( $prefix, array(
      'title'  => 'Footer Optiopns',
      'icon'  => 'fas fa-socks',
      'fields' => array(
      // A text field
      array(
          'id'    => 'footer-logo',
          'type'  => 'media',
          'title' => 'Footer Logo',
          'default' => array(
              'url' => get_template_directory_uri().'/assets/images/Logo.svg'
        ),
      ),
      array(
          'id'    => 'footer-Description',
          'type'  => 'textarea',
          'title' => 'Footer Description',
          'default' => 'It is a long established fact that from will be distracted by the readable from when looking.'
      ),
      array(
          'id'     => 'footer-email-phone',
          'type'   => 'repeater',
          'title'  => 'Footer Email & Phone',
          'fields' => array(
      
          array(
              'id'    => 'footer-item-icon',
              'type'  => 'icon',
              'title' => 'Select Icon',
          ),
          array(
              'id' => 'footer-item-value-repeater',
              'type' => 'repeater',
              'title' => 'Add  Item Values',
              'fields' => array(
              array(
                  'id' => 'item-value',
                  'type' => 'text',
                  'title' => 'Item Value',
              ),
            ),
          ),
      
        ),
      ),
      array(
          'id' => 'footer-copyright-area',
          'type' => 'text',
          'title' => 'Copy Right Text',
          'default' => 'Copyright © Saasup | Designed by Coder Id Solution - Powered by Akash Roy'
      ),
      array(
          'id' => 'footer-socials',
          'type' => 'repeater',
          'title' => 'Footer Social',
          'fields' => array(
          array(
              'id' => 'social_icon',
              'type' => 'icon',
              'title' => 'Select Icon'
          ),
          array(
              'id' => 'social_url',
              'type' => 'text',
              'title' => 'Set URL'
          ),
        ),
      ),
    )
  ) );






  
  //
  // Field: backup
  //
  CSF::createSection( $prefix, array(
    'title'       => 'Backup',
    'icon'        => 'fas fa-shield-alt',
    'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=backup" target="_blank">Field: backup</a>',
    'fields'      => array(

      array(
        'type' => 'backup',
      ),

    )
  ) );

}


