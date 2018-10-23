<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_google_map
 *
 * @copyright   Copyright (C) 2015 Artem Yegorov. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<script type="text/javascript">
var cords = <?php echo $fields->marker;?>;
var zoom =  <?php echo (isset($fields->zoom) ? $fields->zoom : '10');?>;
var mapType =  <?php echo (isset($fields->type) ? $fields->type : 'google.maps.MapTypeId.ROADMAP') ;?>;
</script>
<script type="text/javascript" src="modules/mod_google_map/js/joomly_map.js"></script>
<style>

</style>
<div class="joomly-map-div" style="max-width: <?php echo (isset($fields->width) ? $fields->width : 600)."px"; ?>;height: <?php echo (isset($fields->height) ? $fields->height : 400)."px"; ?>;margin-left: <?php echo isset($fields->margin) ? $fields->margin : "none"; ?>;margin-right: <?php echo isset($fields->margin) ? $fields->margin : "none"; ?>;">
	<div id="map-canvas"></div>
	<div class="map-url"><a href="http://joomly.ru/">Joomly</a></div>
</div>	

