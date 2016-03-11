<?php
/*
Plugin Name: Meta Box Updater
Plugin URI: https://metabox.io/plugins/meta-box-updater/
Description: Updater for Meta Box extensions
Version: 1.1.1
Author: Rilwis
Author URI: http://metabox.io
License: GPL2+
*/

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

if ( is_admin() )
{
	require plugin_dir_path( __FILE__ ) . 'class-mb-updater.php';
	new MB_Updater;

	require plugin_dir_path( __FILE__ ) . 'class-mb-updater-settings.php';
	new MB_Updater_Settings;
}
