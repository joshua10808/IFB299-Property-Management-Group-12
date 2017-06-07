/* Start of Geolocation script */

function getLocation() {

	if (navigator.geolocation) {

		navigator.geolocation.getCurrentPosition(showPosition, showError);

	} else {

		document.getElementById("status").innerHTML="Geolocation is not supported by this browser.";

	}

}


function showPosition(position) {

	document.getElementById("status").innerHTML = "Latitude: " + position.coords.latitude + ", Longitude: " + position.coords.longitude;	

	

	// display on a map

	var latlon = position.coords.latitude + "," + position.coords.longitude;

	var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false";

	document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";

	

}

function showError(error) {

	var msg = "";

	switch(error.code) {

		case error.PERMISSION_DENIED:

			msg = "User denied the request for Geolocation."

			break;

		case error.POSITION_UNAVAILABLE:

			msg = "Location information is unavailable."

			break;

		case error.TIMEOUT:

			msg = "The request to get user location timed out."

			break;

		case error.UNKNOWN_ERROR:

			msg = "An unknown error occurred."

			break;

	}

	document.getElementById("status").innerHTML = msg;

}



/* End of Geolocation script */

