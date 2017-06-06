$(document).ready(function (){
// create a LatLng object containing the coordinate for the center of the map
var latlng = new google.maps.LatLng(-23.590430, -46.639346);
var latCenter = new google.maps.LatLng(-23.500000, -46.639346);
// prepare the map properties
var options = {
zoom: 10,
center: latCenter,
mapTypeId: google.maps.MapTypeId.ROADMAP,
navigationControl: false,
mapTypeControl: false,
scrollwheel: false,
disableDoubleClickZoom: true
};

// initialize the map object
var map = new google.maps.Map(document.getElementById('google_map'), options);
// add Marker
var marker1 = new google.maps.Marker({
position: latlng, map: map
});
// add information window
var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<img src="img/logos/babilonia_googlemaps-scale5.png"/>' +
      //'<h1 id="firstHeading" class="firstHeading">Babilônia</h1>'+
      '<div id="bodyContent">'+
      '<div style="font-size:1em"><b>Endereço:</b><br>'+
      'Rua Professor Frontino Guimarães, 155 - 04017-050<br>'+
      'Vila Mariana - São Paulo/SP<br> </div>'+
      '<div style="font-size:1em"><b>Telefone:</b><br>'+
      'Comercial: (11)9 8334 3414 <br>'+
      'Técnico: (11)9 6474 9292<br> </div>'+
      '<div style="font-size:1em"><b>E-mail:</b><a href="mailto:babilonia.eco@gmail.com">babilonia.eco@gmail.com</a> </div>'+
      '</div>'+
      '</div>';
var infowindow = new google.maps.InfoWindow({
content:  contentString
});
infowindow.open(map, marker1);  
// add listener for a click on the pin
google.maps.event.addListener(marker1, 'click', function() {
infowindow.open(map, marker1);
});
});
