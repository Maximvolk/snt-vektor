<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_google_map
 *
 * @copyright   Copyright (C) 2015 Artem Yegorov. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the weblinks functions only once
require_once __DIR__ . '/helper.php';

$fields = ModGooglemapHelper::getParams();
$document	= JFactory::getDocument();
$lang = JFactory::getLanguage();
if ($lang->getTag() == 'es-ES'){
	$document->addScript("https://maps.googleapis.com/maps/api/js?v=3.exp&language=es&key=" . $fields->api_key);
} else if ($lang->getTag() == 'ru-RU'){
	$document->addScript("https://maps.googleapis.com/maps/api/js?v=3.exp&language=ru&key=" . $fields->api_key);
} else	{
	$document->addScript("https://maps.googleapis.com/maps/api/js?v=3.exp&language=en&key=" . $fields->api_key);
}	
$document->addStyleSheet("modules/mod_google_map/css/map.css");

require JModuleHelper::getLayoutPath('mod_google_map', $params->get('layout', 'default'));
