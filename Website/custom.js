$(function () {
    var markersArray = new Array(buildingsInfo.length);
     	
    function initMap() {

	var location = new google.maps.LatLng(42.964889, -85.889289);

        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: location,
            zoom: 16,
            panControl: false,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
	
	
	
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var markerImage = 'marker.png';
	
	
	var len = buildingsInfo.length;
	var myinfowindow;
	var contentString= new Array(buildingsInfo.length);
	//var markersArray = new Array(buildingsInfo.length);
	var i = 0;
	var posi;
	var prev_infowindow =false; 
	var prev_Marker;
	var buttons = [];

	//placing markers on the map and attach infowindo to each building
	for (i=0; i<len; ++i) {
		
		//get coordinates of  a building
		posi = {lat:  parseFloat(buildingsInfo[i].latitude), lng:  parseFloat(buildingsInfo[i].longitude)};

		//get name of a building
		contentString[i] = '<div class="info-window">' +
			'<h3>' + buildingsInfo[i].name + '</h3>' +
               		'</div>';
		
		//create an info windo for a building
		myinfowindow= new google.maps.InfoWindow({
			content: contentString[i],
			maxWidth: 400
        	});
		
		//create a marker for a building
		markersArray[i] = new google.maps.Marker({
			position: posi,
          		map: map,
			animation: google.maps.Animation.DROP,
			infowindow: myinfowindow,
			title: buildingsInfo[i].name
			
		
		});

		//add listener for a building
		markersArray[i].addListener('click', function () {
			if( prev_infowindow ) {
         			prev_infowindow.close();
        		}

       			prev_infowindow = this.infowindow;
            		this.infowindow.open(map, this);
				
       	 	});
		
		
	}
	for (i=0; i<len; ++i) {
		
		
  	  markersArray[i].setVisible(false); 
  	
	}
	for (i=0; i<len; ++i) {
		
		temp(i)
  	  
  	
	}

	function temp(num){
		buttons[num] = document.getElementById(buildingsInfo[num].next);
		buttons[num].addEventListener('click', function(){
		if( prev_infowindow ) {
         		prev_infowindow.close();
			prev_Marker.setVisible(false);
        	}
		prev_infowindow = markersArray[num].infowindow;
		prev_Marker = markersArray[num];
		prev_Marker.setVisible(true);
		prev_Marker.infowindow.open(map, prev_Marker);
		
	});
		
		}

	

        var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 45}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];

        map.set('styles', styles);


    }

    google.maps.event.addDomListener(window, 'load', initMap);
	
});
