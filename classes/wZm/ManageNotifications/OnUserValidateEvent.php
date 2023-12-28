<?php
/**
 * Manage notifications Elgg plugin
 * @author Nikolai Shcherbin
 * @license GNU Affero General Public License version 3
 * @copyright (c) Nikolai Shcherbin 2020
 * @link https://wzm.me
**/
namespace wZm\ManageNotifications;

class OnUserValidateEvent {

	public function __invoke(\Elgg\Event $event) {

		$entity = $event->getObject();
		if (!$entity instanceof \ElggUser) {
			return;
		}
		
		$email_setting = (bool) elgg_get_plugin_setting('set_email_notification', 'manage_notifications');
		$site_setting = (bool) elgg_get_plugin_setting('set_site_notification', 'manage_notifications');
		
		$entity->setNotificationSetting('email', $email_setting);
		$entity->setNotificationSetting('site', $site_setting);
		
		$entity->save();
	}
}
