<style>
      #map {
        height: 450px;
      }
    </style>

<div id="map"></div>
  <script>
      function initMap() {
          
           

        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 33.7138046, lng: -117.851382},
            disableDefaultUI: true,
          zoom: 13,
     scrollwheel: false,
          styles: [
            {
              featureType: 'all',
              stylers: [
                { saturation: -80 }
              ]
            },{
              featureType: 'road.arterial',
              elementType: 'geometry',
              stylers: [
                { hue: '#00ffee' },
                { saturation: 50 }
              ]
            },{
              featureType: 'poi.business',
              elementType: 'labels',
              stylers: [
                { visibility: 'off' }
              ]
            }
          ]
        });
          
      }
    </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjbFyYTRB_nrBX57oorXnm4H02nrXygvo&callback=initMap"
    async defer></script>