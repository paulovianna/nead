var myOptions = {
  	zoom: 9,
	mapTypeControl: true,
	scrollwheel: false,
  	mapTypeId: google.maps.MapTypeId.ROADMAP
};

function init(map,latlng,title){
$(function() {

	map.setCenter(latlng);
	var marker = new google.maps.Marker({
		    position: latlng,
		    map: map,
		    title: title
		  	});
	marker.setIcon('images/etec.png');
});
}