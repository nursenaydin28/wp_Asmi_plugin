<?php
/*
 * Plugin Name:       Asmi Plus
 * Description:       A plugin for adding a blocks to a theme
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Yagyaraj Majhi
 * License:           GPL v2 or later
 * Text Domain:       asmi-plus
 * Domain Path:       /languages
 */

if (!function_exists('add_action')) {
  echo "Seems like you stumbled here by accident. 😜";
  exit;
}

// Setups 
define('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Includes 
include(UP_PLUGIN_DIR . 'includes/register-blocks.php');


// Hooks

add_action("init", "up_register_blocks");






