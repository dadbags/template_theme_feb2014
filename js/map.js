	function initialize() {
		var latlng = new google.maps.LatLng(51.514527,-0.131029);
		var settings = {
			zoom: 15,
			center: latlng,
			      styles:[
    {
        "featureType": "administrative",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "landscape",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#5f94ff"
            },
            {
                "lightness": 26
            },
            {
                "gamma": 5.86
            }
        ]
    },
    {},
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "weight": 0.6
            },
            {
                "saturation": -85
            },
            {
                "lightness": 61
            }
        ]
    },
    {
        "featureType": "road"
    },
    {},
    {
        "featureType": "landscape",
        "stylers": [
            {
                "hue": "#0066ff"
            },
            {
                "saturation": 74
            },
            {
                "lightness": 100
            }
        ]
    }
]
			      ,
			mapTypeControl: true,
			mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
			navigationControl: true,
			navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
			mapTypeId: google.maps.MapTypeId.ROADMAP
    };
	var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
	
  
  var companyLogo = new google.maps.MarkerImage('/cms/wp-content/themes/template_theme_feb2014/images/maplogo.png',
	new google.maps.Size(100,94),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('/cms/wp-content/themes/template_theme_feb2014/images/maplogo.png',
	new google.maps.Size(130,50),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var companyPos = new google.maps.LatLng(51.514527,-0.131029);
var companyMarker = new google.maps.Marker({
	position: companyPos,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Company Title"
});

var contentString = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
   // '<h3 id="firstHeading" class="firstHeading">Telegraph Hill HQ</h3>'+
    '<div id="bodyContent">'+
    '<p>Printing House Yard is off Hackney Road.<br><br> Coming from Shoreditch High Street, you can enter the yard by turning left at the Japanese supermarket – an orange painted building.<br><br> Once inside the yard, turn left and walk along the cobbles until you reach a row of offices in front of you.<br> We’re number 3. </p>'+
    '</div>'+
    '</div>';
 
var infowindow = new google.maps.InfoWindow({
    content: contentString
});

google.maps.event.addListener(companyMarker, 'click', function() {
  infowindow.open(map,companyMarker);
});
  
	}