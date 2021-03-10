<?php

// Trigger this file on Plugin unistall

/**
 * @package CommproMaps
 */


// if (!defined('WP_UNINSTALL_PLUGIN')) {
// 	die;
// }

// $commpromaps = get_posts(array('post_type' => 'commpromaps', 'numberposts' => -1));

// foreach ($commpromaps as $commpromap) {
// 	wp_delete_post($commpromap->ID, true);
// }

// Acces the database via SQL
global $wpdb;
$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'ommpromap'" );
wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT IF FROM wp_posts)" );