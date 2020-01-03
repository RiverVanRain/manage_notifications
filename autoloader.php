<?php
/**
 * Manage notifications Elgg plugin [Plugin]
 * @author RiverVanRain
 * @package Plugin
 * @license GNU General Public License version 2
 * @copyright (c) wZm 2020
 * @link https://wzm.me
**/
$plugin_root = __DIR__;
if (file_exists("{$plugin_root}/vendor/autoload.php")) {
	// check if composer dependencies are distributed with the plugin
	require_once "{$plugin_root}/vendor/autoload.php";
}