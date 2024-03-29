<?php
/**
 * Manage notifications Elgg plugin
 * @author Nikolai Shcherbin
 * @license GNU Affero General Public License version 3
 * @copyright (c) Nikolai Shcherbin 2020
 * @link https://wzm.me
**/
return [
	'plugin' => [
		'name' => 'Manage notification settings',
		'version' => '3.0.0',
		'dependencies' => [
			'site_notifications' => [
				'must_be_active' => true,
			],
		],
		'activate_on_install' => true,
	],
	
	'events' => [
		'validate:after' => [
			'user' => [
				\wZm\ManageNotifications\OnUserValidateEvent::class => [],
			],
		],
	],
	
	'settings' => [
		'set_email_notification' => true,
		'set_site_notification' => true,
	],
];