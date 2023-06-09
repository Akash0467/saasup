<?php

use function PHPSTORM_META\type;

if( class_exists( 'CSF' ) ) {

// Set a unique slug-like ID
$prefix = 'saasup';

 // Create options
 CSF::createOptions( $prefix, array(
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-options',
  ) );

  CSF::createSection( $prefix, array(
    'title'  => 'Header Optiopns',
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
        )
      ),

    )
  ) );
  // Blog Section
  CSF::createSection( $prefix, array(
    'title'  => 'Blog Page',
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
  CSF::createSection( $prefix, array(
      'title'  => 'Footer Optiopns',
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



}


