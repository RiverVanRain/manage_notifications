<?php
/**
 * Manage notifications Elgg plugin [Plugin]
 * @author RiverVanRain
 * @package Plugin
 * @license GNU General Public License version 2
 * @copyright (c) wZm 2020
 * @link https://wzm.me
**/

$entity = elgg_extract('entity', $vars);

echo elgg_view_field([
	'#type' => 'fieldset',
	'legend' => elgg_echo('settings:manage_notifications:config'),
	'fields' => [
		[
			'#type' => 'checkbox',
			'switch' => true,
			'#label' => elgg_echo('settings:manage_notifications:set_email_notification'),
			'name' => 'params[set_email_notification]',
			'checked' => (bool) $entity->set_email_notification,
		],
		[
			'#type' => 'checkbox',
			'switch' => true,
			'#label' => elgg_echo('settings:manage_notifications:set_site_notification'),
			'name' => 'params[set_site_notification]',
			'checked' => (bool) $entity->set_site_notification,
		],
	]
]);
