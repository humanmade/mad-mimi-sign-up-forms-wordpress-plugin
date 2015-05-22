<?php

// if uninstall not called from WordPress exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

global $wpdb;

// delete all options and transients that contain mimi
$wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE '%mimi-%'" );