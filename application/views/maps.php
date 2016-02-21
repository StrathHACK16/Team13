<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
<script>
			function initMap() {
				var mapDiv = document.getElementById('map');
				var map = new google.maps.Map(mapDiv, {
				center: {lat: 55.869, lng: -4.253},
				zoom: 10});
			}
			
</script>