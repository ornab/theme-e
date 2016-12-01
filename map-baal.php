<div class="map-area">




      		<div id="google-map"></div>


			 
			 			 			 <!-- Google maps API -->

   
      
         
               <script  src="http://maps.googleapis.com/maps/api/js"></script>
    <script>

    var myCenter=new google.maps.LatLng(23.756107,90.387196);

    function initialize()
    {
    var mapProp = {
      center:myCenter,
      zoom:15,
        scrollwheel: false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
      };

    var map=new google.maps.Map(document.getElementById("google-map"),mapProp);

    var marker=new google.maps.Marker({
      position:myCenter,
      });

    marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>

 

       </div>