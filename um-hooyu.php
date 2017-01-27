<?php
/**
 * Ultimate Member Hooyu
 *
 * A plugin using `wp_remote_post` to integrate Ultimate Member with HooYu ID Verification Service's API.
 *
 * @package   UM_Hooyu
 * @author    Matt Radford <matt@10degrees.uk>
 * @license   GPL-2.0+
 * @link      https://www.10degrees.uk
 * @copyright 2017 10°
 *
 * @wordpress-plugin
 * Plugin Name: Ultimate Member HooYu
 * Plugin URI:  https://github.com/mattradford/um-hooyu
 * Description: Ultimate Member integration with HooYu ID Verification Service.
 * Version:     2.0.0
 * Author:      Matt Radford at 10°
 * Author URI:  https://www.10degrees.uk
 * Text Domain: um-hooyu
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} // end if

require_once( plugin_dir_path( __FILE__ ) . 'class-um-hooyu.php' );
UM_Hooyu::get_instance();