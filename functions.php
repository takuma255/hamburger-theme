<?php
  add_theme_support( 'menus' );
  add_theme_support( 'title-tag' );
  
  function hamburgershop_title( $title ) {
    if( is_front_page() && is_home() ) {
      $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) {
      $title = single_post_title('',false);
    }
      return $title;
    }
  add_filter( 'pre_get_document_title', 'hamburgershop_title' );

  function readscript() {
    wp_enqueue_style( 'M+PLUS+1p Roboto', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap', array() );
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4' );
    wp_enqueue_style( 'style', get_template_directory_uri(). '/css/style.css', array(), '1.0.0' );
    wp_enqueue_script( 'jquery-min' , get_template_directory_uri().'/js/jquery.min.js', array(), '3.6.0', true);
    wp_enqueue_script( 'sidebar-slide', get_template_directory_uri().'/js/sidebar.js', array(), '1.0.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'readscript' );