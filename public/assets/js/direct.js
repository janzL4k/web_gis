

var mylatlng={lat:-8.650979, lng: 116.324944};
var mapOptions={
    center:mylatlng,
    zoom : 7,
    mapTypeId: google.maps.Map.TypeId.ROADMAP
};

//create Map

var map=new google.maps.Map(document.getElementById("map"));
