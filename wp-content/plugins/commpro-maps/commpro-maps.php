<?php

/**
 * @package CommproMaps
 */

/*

Plugin Name: Commpro Maps
Plugin URI: https://commpro.nl
Description: Dit is een plugin voor het weergeven van een Commpro Map. In deze plugin wordt de javascript libary Leaflet gebruikt.
Version: 1.0
Author: Matthias Kieboom
Author URI: https://ecotuk.nl
License: GPLv2 or later
Text Domain: Commpro Maps

Commpro Maps is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.

*/



defined('ABSPATH') or die('You cant acces this file');

class CommproMaps
{
	function __construct() {
		add_action('init', [$this, 'custom_post_type']);
	}

	function activate(){
		flush_rewrite_rules();
	}

	function deactivate(){
		flush_rewrite_rules();
	}

	function custom_post_type() {
		register_post_type('commpromap', [
			'public' => true, 
			'label' => 'Commpro maps'
		]);
	}
}

if(class_exists('CommproMaps')){
	$commproMaps = new CommproMaps();
}

// Activation
register_activation_hook( __FILE__, [$commproMaps, 'activate']);

// Deactivation
register_deactivation_hook( __FILE__, [$commproMaps, 'deactivate']);

