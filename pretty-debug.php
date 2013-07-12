<?php
/*
Plugin Name: Pretty Debug
Plugin URI:  http://#
Description: Pretty debug for var_dumps and print_r's
Version:     1.0 
Author:      digitalnature,  Wycks 
Author URI:  http://#
License:     GPL2


/*  

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

	// don't load directly
	if ( !defined('ABSPATH') )
		die('Nope');


	define( 'PHPREF_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
	require_once(PHPREF_PLUGIN_PATH . 'php-ref/ref.php');
 	
	ref::config('stylePath', false);
	ref::config('scriptPath', false);

	function add_scripts_phpref(){

		wp_enqueue_script( 'ref_js',  plugins_url('/php-ref/ref.js', __FILE__ ));
		wp_enqueue_style ( 'ref_css', plugins_url('/php-ref/ref.css', __FILE__ ));

		//temporary CSS overrides for themes and such
		wp_enqueue_style ( 'over_css', plugins_url('override.css', __FILE__ ));

	}
	add_action( 'wp_enqueue_scripts', 'add_scripts_phpref' );
