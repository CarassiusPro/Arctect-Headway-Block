<?php

/*
Plugin Name: Headway Arctext Block
Plugin URI: http://www.jonmather.info
Description: Arctext block for Headway that allows the rotation of text around a radius.
Version: 1.0
Author: Jon Mather
Author URI: http://www.jonmather.info
License: GNU GPL v2
*/
	

define('ARCTEXT_BLOCK_VERSION', '1.0');

add_action('after_setup_theme', 'register_arctext_block');
function register_arctext_block() {

	require_once 'block.php';
	require_once 'block-options.php';

	return headway_register_block('HeadwayArctextBlock', substr(WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), '', plugin_basename(__FILE__)), 0, -1));

}