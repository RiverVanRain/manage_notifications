<?php
/**
 * Manage notifications Elgg plugin [Plugin]
 * @author RiverVanRain
 * @package Plugin
 * @license GNU General Public License version 2
 * @copyright (c) wZm 2020
 * @link https://wzm.me
**/
return [
	'bootstrap' => \wZm\ManageNotifications\Bootstrap::class,
	
	'settings' => [
		'set_email_notification' => true,
		'set_site_notification' => true,
	],
];