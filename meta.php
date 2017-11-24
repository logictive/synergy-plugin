<?php

/**
 * Metabox setup
 *
 * All metabox calls go here. Uses Metabox.io for ease and increased functionality
 */

add_filter( 'rwmb_meta_boxes', 'hdml_register_meta_boxes' );

function hdml_register_meta_boxes( $meta_boxes ) {
  $prefix = 'hdml_';

  global $meta_boxes;

  $meta_boxes = array();

  $home_id = 2;
  $contact_id = 18;

  /**
   * Homepage
   */

  $meta_boxes[] = array(
    'title'       => __( 'Banner Section', 'hdml' ),
    'post_types'  => 'page',
    'fields'      => array(
      array(
        'id'        => 'banner__headline',
        'name'      => __( 'Banner Headline', 'hdml' ),
        'type'      => 'text',
      ),
      array(
        'id'        => 'banner__text',
        'name'      => __( 'Banner Text', 'hdml' ),
        'type'      => 'textarea',
      ),
      array(
        'type'      => 'divider',
      ),
      array(
        'id'        => 'banner__button__text--primary',
        'name'      => __( 'Primary Button Text', 'hdml' ),
        'type'      => 'text',
      ),
      array(
        'id'        => 'banner__button__url--primary',
        'name'      => __( 'Primary Button URL', 'hdml' ),
        'type'      => 'text',
      ),
      array(
        'type'      => 'divider',
      ),
      array(
        'id'        => 'banner__button__text--secondary',
        'name'      => __( 'Secondary Button Text', 'hdml' ),
        'type'      => 'text',
      ),
      array(
        'id'        => 'banner__button__url--secondary',
        'name'      => __( 'Secondary Button URL', 'hdml' ),
        'type'      => 'text',
      ),
      array(
        'type'      => 'divider',
      ),
      array(
        'id'        => 'banner__video',
        'name'      => __( 'Banner Video', 'hdml' ),
        'type'      => 'video',
        'max_file_uploads' => 1,
      ),
    ),
  );

  $meta_boxes[] = array(
    'title'       => __( 'About Section', 'hdml' ),
    'post_types'  => 'page',
    'include' => array(
      'ID'          => array( $home_id ),
    ),
    'fields'      => array(
      array(
        'id'        => 'about__text',
        'name'      => __( 'About Text', 'hdml' ),
        'type'      => 'wysiwyg',
      ),
      array(
        'type'      => 'divider',
      ),
      array(
        'id'        => 'join__text',
        'name'      => __( 'Join Text', 'hdml' ),
        'type'      => 'wysiwyg',
      ),
      array(
        'id'        => 'join__button--text',
        'name'      => __( 'Join Button Text', 'hdml' ),
        'type'      => 'text',
      ),
      array(
        'id'        => 'join__button--url',
        'name'      => __( 'Join Button Url', 'hdml' ),
        'type'      => 'url',
      ),
      array(
        'type'      => 'divider',
      ),
      array(
        'id'        => 'sponsor__logo',
        'name'      => __( 'Sponsor Logo', 'hdml' ),
        'type'      => 'image_advanced',
        'max_file_uploads' => 1,
      ),
      array(
        'id'        => 'sponsor__link',
        'name'      => __( 'Sponsor Link', 'hdml' ),
        'type'      => 'url',
      ),
    ),
  );

  $meta_boxes[] = array(
    'title'       => __( 'Video Section', 'hdml' ),
    'post_types'  => 'page',
    'include' => array(
      'ID'          => array( $home_id ),
    ),
    'fields'      => array(
      array(
        'id'        => 'video__embed',
        'name'      => __( 'Video Link', 'hdml' ),
        'type'      => 'oembed',
      ),
    ),
  );

  /**
   * Endorsements
   */

  $meta_boxes[] = array(
    'title'       => __( 'Endorsement Details', 'hdml' ),
    'post_types'  => 'endorsement',
    'fields'      => array(
      array(
        'id'        => 'endorsement__cite',
        'name'      => __( 'Endorser Name/Company', 'hdml' ),
        'type'      => 'textarea',
      ),
    ),
  );

   /**
   * People
   */

  $meta_boxes[] = array(
    'title'       => __('People Details', 'hdml' ),
    'post_types'  => 'people',
    'fields'      => array(
      array(
        'id'        => 'people__role',
        'name'      => __( 'Role within Synergy', 'hdml' ),
        'type'      => 'text',
      ),
    ),
  );

  /**
   * About Us
   */
  
  $meta_boxes[] = array(
    'title'       => __( 'Background Section', 'hdml' ),
    'post_types'  => 'page',
    'include' => array(
      'ID'          => 7,
    ),
    'fields'      => array(
      array(
        'id'        => 'side__image',
        'name'      => __( 'About Side Image', 'hdml' ),
        'type'      => 'image_advanced',
        'max_file_uploads' => 1,
      ),
    ),
  );


  $meta_boxes[] = array(
    'title'       => __( 'Join Section', 'hdml' ),
    'post_types'  => 'page',
    'include' => array(
      'ID'          => 7,
    ),
    'fields'      => array(
      array(
        'id'        => 'join__text',
        'name'      => __( 'Join Text', 'hdml' ),
        'type'      => 'wysiwyg',
      ),
      array(
        'type'      => 'divider',
      ),
      array(
        'id'        => 'join__image',
        'name'      => __( 'Join Side Image', 'hdml' ),
        'type'      => 'image_advanced',
        'max_file_uploads' => 1,
      ),
    ),
  );

  /**
   * Videos
   */
  
   $meta_boxes[] = array(
    'title'       => __( 'YouTube Channel', 'hdml' ),
    'post_types'  => 'page',
    'include' => array(
      'ID'          => 11,
    ),
    'fields'      => array(
      array(
        'id'        => 'youtube-id',
        'name'      => __( 'YouTube Channel ID', 'hdml' ),
        'type'      => 'text',
      ),
    ),
  );

  return $meta_boxes;
}

?>