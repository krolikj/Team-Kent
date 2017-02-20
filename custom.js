$(function () {

    function initMap() {

        //gvsu lat-longitude
        var location = new google.maps.LatLng(42.964889, -85.889289);
        var StudentServicesBuilding = {lat: 42.964418, lng: -85.888936};

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


        //some random buildings that kids might need to find. the database should hold a big list of these later
        var StudentServicesBuilding = {lat: 42.964418, lng: -85.888936};
        var LanguageCenter = {lat:42.963718, lng:-85.88830};
        var KirkofCenter = {lat: 42.962580,lng: -85.889066};
        var PerformingArtsCenter = {lat: 42.960586, lng: -85.887126};
        var FieldHouse = {lat: 42.967021, lng: -85.890222};
        var LubbersStadium = {lat: 42.969195, lng: -8589485};
        var AlumniHouse = {lat: 42.970587, lng: -85.890426};



        //making some markers..this will be in a loop later i'd imagine. looping through positions in database.
        var marker6 = new google.maps.Marker({
            position: LubbersStadium,
            map: map,
            icon: markerImage
        });
        var marker7 = new google.maps.Marker({
            position: AlumniHouse,
            map: map,
            icon: markerImage
        });
        var marker4 = new google.maps.Marker({
            position: FieldHouse,
            map: map,
            icon: markerImage
        });
        var marker5 = new google.maps.Marker({
            position: PerformingArtsCenter,
            map: map,
            icon: markerImage
        });

        var marker1 = new google.maps.Marker({
            position: StudentServicesBuilding,
            map: map,
            icon: markerImage
        });
        var marker2 = new google.maps.Marker({
            position: LanguageCenter,
            map: map,
            icon: markerImage
        });

        var marker3 = new google.maps.Marker({
            position: KirkofCenter,
            map: map,
            icon: markerImage
        });

        //marker for some-what center of GV
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: markerImage
        });

        //you have to make one of these + the infowindow below if you want a unique box for each building.
        //right now they just use the same listener so they'll all go here.
        var contentString = '<div class="info-window">' +
                '<h3>building name </h3>' +
                '<div class="info-content">' +
                '<p>explanation of building function, phone number, email, etc. </p>' +
                '</div>' +
                '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });
        //////////////////////////////////////////

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });


        marker1.addListener('click', function () {
            infowindow.open(map, marker1);
        });

        marker2.addListener('click', function () {
            infowindow.open(map, marker2);
        });


        marker3.addListener('click', function () {
            infowindow.open(map, marker3);
        });

        marker4.addListener('click', function () {
            infowindow.open(map, marker4);
        });


        marker5.addListener('click', function () {
            infowindow.open(map, marker5);
        });
        marker6.addListener('click', function () {
            infowindow.open(map, marker6);
        });

        marker7.addListener('click', function () {
            infowindow.open(map, marker7);
        });




        var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 45}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];

        map.set('styles', styles);


    }

    google.maps.event.addDomListener(window, 'load', initMap);
});