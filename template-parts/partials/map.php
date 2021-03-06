<?php global $redux; ?>
<div id="map" style="height: 480px;"></div>
<script>
    function initMap() {
        const uluru = {
            lat: <?php echo $redux['google-map-lat'] ?>,
            lng: <?php echo $redux['google-map-lng'] ?>
        };
        const grayStyles = [
            {
	            featureType: "all",
	            stylers: [{ saturation: -90 }, { lightness: 50 }]
            },
	        {
	            elementType: 'labels.text.fill',
	            stylers: [{ color: '#ccdee9' }]
	        }
        ];
        const map = new google.maps.Map(document.getElementById('map'), {
            center: uluru,
            zoom: <?php echo $redux['google-map-zoom'] ?>,
            styles: grayStyles,
            scrollwheel: false
        });

        const marker = new google.maps.Marker({
            position: uluru,
            animation: google.maps.Animation.DROP,
            title: "<?php echo $redux['google-map-marker-title'] ?>"
        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $redux['google-map-api-key']; ?>&callback=initMap">
</script>