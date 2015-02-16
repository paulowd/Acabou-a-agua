var lat = '';
var lng = '';

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    lat = position.coords.latitude;
    lng = position.coords.longitude; 
}

getLocation();

jQuery(document).ready(function($) {
	jQuery('#map_canvas').height(400);
});

x = 18 / 940;
valor_zoom = $(window).width() * x;
valor_zoom = parseInt(valor_zoom);
if(valor_zoom > 17)
	valor_zoom = 17;

if(valor_zoom < 14)
	valor_zoom = 14;

function initialize() {
  	var mapOptions = {
	    zoom: valor_zoom,
	    center: new google.maps.LatLng( lat, lng ),
	    scrollwheel: false,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	var myLatLng = new google.maps.LatLng(lat, lng);
	var beachMarker = new google.maps.Marker({
	  position: myLatLng,
	  map: map
	});
}

google.maps.event.addDomListener(window, 'load', initialize)