function initialize() {
        var mapOptions = {
			center: new google.maps.LatLng(cords.lat[0],cords.lng[0]),
		    zoom: zoom,
			scrollwheel: false,
			mapTypeId: mapType
        };
		var length = cords.lat.length;
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
		var bounds = new google.maps.LatLngBounds();
		var infowindow = new google.maps.InfoWindow({
			content: 'empty'
		});	
		for (var i = 0; i < 1; i++) {
			var myLatlng = new google.maps.LatLng(cords.lat[i],cords.lng[i]);
			if (length > 1){
				bounds.extend(myLatlng);
			}	
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				id:i,
				icon:cords.icon[i]
			});	
			google.maps.event.addListener(marker, 'click', function () {
				infowindow.setContent(this.content);
				infowindow.open(map, this);
			});
		}
		if (length > 1){
			map.fitBounds(bounds);
		}		
   }
    google.maps.event.addDomListener(window, 'load', initialize);
