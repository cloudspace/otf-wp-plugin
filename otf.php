<?php
/*
Plugin Name: OneTrueFan
Plugin URI: http://onetruefan.com
Description: Display the OneTrueFan bar on your blog.
Version: 1.0
Author: OneTrueFan
Author URI: http://onetruefan.com
*/

add_action('wp_footer', 'add_otf_widget');

function add_otf_widget() {
	echo "<script src=\"http://e.onetruefan.com/js/widget.js\"></script>\n";
}
