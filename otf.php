<?php
/*
Plugin Name: OneTrueFan
Plugin URI: http://onetruefan.com
Description: Display the OneTrueFan bar on your blog.
Version: 1.0
Author: OneTrueFan
Author URI: http://account.onetruefan.com/widget?wp-plugin
*/

/*  Copyright 2010 OneTrueFan  (email : info@onetruefan.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Don't display in the admin section
if ( ! is_admin() ) {
	/**
		Enqueue our script to be rendered by WordPress in the footer.
		
		See: http://codex.wordpress.org/Function_Reference/wp_enqueue_script
	*/
	function add_onetruefan_widget() {
		wp_enqueue_script( 'onetruefan_widget', 'http://e.onetruefan.com/js/widget.js', array(), false, true );
	}
	
	// Add our method to the `init` hook
	add_action( 'init', 'add_onetruefan_widget' );
}
