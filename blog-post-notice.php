<?php

/**
  * Plugin Name: Blog Post Notice
  * Plugin URI: http://seanamarasinghe.com
  * Description: Display a short notice above the post content.
  * Version: 0.1.0
  * Author: Sean Amarasinghe
  * Author URI: http://seanamarasinghe.com
  * License: GPL-2.0+
  */

// If this file is called directly, abort
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-blog-post-notice-display.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-blog-post-notice-editor.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-blog-post-notice.php' );

function blog_post_notice_start() {

	if( is_admin() ) {
		$post_editor = new blog_Post_Notice_Editor();
		$post_notice = new blog_Post_Notice( $post_editor );
	} else {
		$post_notice = new blog_Post_Notice_Display();
	}

	$post_notice->initialize();

}
blog_post_notice_start();
