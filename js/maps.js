function initMap() {
  var newYork = {lat: 40.812775, lng: -74.005973};
  var boston = {lat: 42.359257, lng: -71.063347};
  var connecticut = {lat: 41.603221, lng: -73.187749};
  var newJersey = {lat: 39.627878, lng: -74.718018};

  //New map
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: connecticut
  });

  //Array of coords
  var markers = [ newYork, boston, newJersey, connecticut];

  //fucntion to add marker
  function addMarker(coords){
    var marker = new google.maps.Marker({
    position: coords,
    map: map,
    icon: 'Asserts/Images/small-truck.png'
  });

  }
  
  //Loop for the markers 
  for (var i = 0; i < markers.length; i++) {
    addMarker(markers[i]);
  }

}