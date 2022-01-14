function initMap(){
    var propertipeta= {
        center : new google.maps.LatLing(-8.5797269, 116.098859),
        zoom:5
    }

var peta = new google.mpas.Map(document.getElementById("googleMap"), propertipeta);
//map maker
var maker = new google.maps.Maker({
    position: new google.maps.Map(-8.5797269, 116.098859),
    map:peta,
    Animation:google.maps.Animation.BOUNCE

 })
}

initMap();
