<?php
/**
 * Manage notifications Elgg plugin [Plugin]
 * @author RiverVanRain
 * @package Plugin
 * @license GNU General Public License version 2
 * @copyright (c) wZm 2020
 * @link https://wzm.me
**/
namespace wZm\ManageNotifications;

use Elgg\Event;
use ElggUser;

class OnUserCreateEvent {

	public function __invoke(Event $event) {

		$entity = $event->getObject();
		if (!($entity instanceof \ElggUser)) {
			return;
		}
		
		$email_setting = (bool) elgg_get_plugin_setting('set_email_notification', 'manage_notifications');
		$site_setting = (bool) elgg_get_plugin_setting('set_site_notification', 'manage_notifications');
		
		$entity->setNotificationSetting('email', $email_setting);
		$entity->setNotificationSetting('site', $site_setting);
		
		$entity->save();
	}
}
