<?php

/* ------------------------------------------
  LOAD SCRIPTS AND STYLES
------------------------------------------- */

function bitjournal_scripts() {
  
  wp_enqueue_style( 'bitjournal-style', get_stylesheet_directory_uri() . '/style.min.css' );

  wp_enqueue_script( 'bitjournal-custom', get_template_directory_uri() . '/js/custom.min.js', array(), null, true );

	wp_enqueue_script( 'bitjournal-skip-link-focus-fix', get_template_directory_uri() . '/js/vendors.min.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
  }
  
}

add_action( 'wp_enqueue_scripts', 'bitjournal_scripts' );