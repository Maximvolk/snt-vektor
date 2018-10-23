<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

class JFormFieldMarkers extends JFormField{
    protected $type = 'markers';
      
    protected function getLabel(){
    	return '';
    	
    } 
    protected function  getInput() {
    	
		$document = JFactory::getDocument();
		$document->addStyleDeclaration(
			'table.marker > tbody > tr > td{}'.
			'input.lat, input.lng{width:65px;}'.
			'input.address{width:350px;}'.
			'input.icon{width:300px;}'.
			'div.control-group > div.controls{margin-left:10px;}'
		);	
		$document->addScript('https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places&key=AIzaSyAIx-bII_eNouarTE1JIC1_ZE_yvZqchUk');
		$document->addStyleSheet( 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

		$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select('params')
			->from('#__modules')
			->where('module="mod_google_map"');
			$db->setQuery($query);
			$array =  $db->loadAssoc();
			$fields =  json_decode($array['params']); 
		$html = '<div>';
		$html.= JText::_('MOD_GOOGLE_MAP_MARKER_MANAGER_DESC').'</br>';
		if (!isset($fields->marker) || (count($fields->marker) == 0))
		{
			$html.= "<div><input class='btn bnt-success' type='button' id='add' value='".JText::_('MOD_GOOGLE_MAP_ADD')."'/></div>";
		}
		$html.= '<div>';
		$html.= '<table class="marker table table-striped">';	
		$html.= '<thead><tr><th>'.JText::_('MOD_GOOGLE_MAP_ADDRESS').'</th><th>'.JText::_('MOD_GOOGLE_MAP_LAT').'</th><th>'.JText::_('MOD_GOOGLE_MAP_LNG').'</th><th>'.JText::_('MOD_GOOGLE_MAP_ICON').'</th><th>'.JText::_('MOD_GOOGLE_MAP_INFO').'</th><th></th></tr></thead>';	
		$html.= '<tbody id="markers">';
		if (isset($fields->marker))
		{	
			for ($i=0;$i< count($fields->marker->address);$i++)
			{	
				$html.='<tr>';
				$html.='<td><input type="text"  class="address" value="'.$fields->marker->address[$i].'" name="jform[params][marker][address][]"/></td>';
				$html.='<td><input type="text" class="lat" value="'.$fields->marker->lat[$i].'" name="jform[params][marker][lat][]"/></td>';
				$html.='<td><input type="text" class="lng" value="'.$fields->marker->lng[$i].'" name="jform[params][marker][lng][]"/></td>';
				$html.='<td><input type="text"  class="icon" value="'.$fields->marker->icon[$i].'" name="jform[params][marker][icon][]"/></td>';
				$html.='<td><textarea disabled name="jform[params][marker][info][]" ></textarea></td>';
				$html.='</tr>';	
			}			
		}	
		$html.= '</tbody>';
		$html.= '</table>';	
		$html.= "</div>";
		$html.= "</div>";
        return $html;
    }
	
 }?>
<script type="text/javascript">
	window.onload = function()
	{
		var add = document.getElementById("add");
		add.onclick = function(){
			var tr = document.createElement('tr');
			tr.innerHTML='<td><input type="text" class="address" name="jform[params][marker][address][]"/></td><td><input type="text" class="lat" name="jform[params][marker][lat][]"/></td><td><input type="text" class="lng" name="jform[params][marker][lng][]"/></td><td><input type="text" class="icon" name="jform[params][marker][icon][]"/></td><td><textarea disabled name="jform[params][marker][info][]"/></textarea></td>';
			var tbody=document.getElementById("markers");
			tbody.insertBefore(tr, tbody.firstChild);
			var addr = tr.children[0].getElementsByTagName("input");
			addr[0].onchange = function(){
				var last = document.getElementsByClassName("current");
				last.className = "";
				var current = this.parentNode.parentNode;
				current.className = "current";
				codeAddress(this.value);	
			}	
			add.parentNode.removeChild(add);				
			//jQ( "table.marker > tbody" ).prepend('<tr><td><input type="text" class="address" name="jform[params][marker][address][]"/></td><td><input type="text" class="lat" name="jform[params][marker][lat][]"/></td><td><input type="text" class="lng" name="jform[params][marker][lng][]"/></td><td><input type="text" class="icon" name="jform[params][marker][icon][]"/></td><td><textarea name="jform[params][marker][info][]"/></textarea></td><td><i class="icon-trash"></td></tr>');	
		}	
		
		var address = document.getElementsByClassName("address");
		for (var i=0; i < address.length; i++) {
			address[i].onchange = function(){
				var last = document.getElementsByClassName("current");
				if (last.length > 0)
				{
					last[0].className = "";
				}	
				console.log(last);
				var current = this.parentNode.parentNode;
				current.className = "current";
				codeAddress(this.value);	
			}		
		}
		function codeAddress(address) {		
		console.log(address);
			var geocoder = new google.maps.Geocoder(); 
			geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					var tr = document.getElementsByClassName("current");
					var lat = tr[0].children[1].getElementsByTagName("input");
					lat[0].value = results[0].geometry.location.lat();
					var lng = tr[0].children[2].getElementsByTagName("input");
					lng[0].value = results[0].geometry.location.lng();	
				} else {
					alert('Geocode was not successful for the following reason: ' + status);
				}
			});

		}		
	}	
</script>	