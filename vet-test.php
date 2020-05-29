<?php

/**
 * Plugin Name:       Vet Test
 * Plugin URI:        https://github.com/bureauvet/vet-test
 * Description:       Testplugin for vet
 * Version:           0.0.2
 * Author:            Bureau VET
 * License:           GNU General Public License v2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bureauvet
 * GitHub Plugin URI: https://github.com/bureauvet/vet-test
 */

 if( ! class_exists( 'vet_dashboard' ) ){
 	include_once( plugin_dir_path( __FILE__ ) . 'vet-custom-dashboard.php' );
 }

$dashboard = new vet_dashboard(__FILE__);
