<?php $this->load->view('templates/header'); ?>

<style>

  #map {
    height: 100%;
  }
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>
    <!-- Navigation -->
<?php //$this->load->view('templates/navi'); ?>
<?php
function write_to_console($data) {

 $console = 'console.log(' . json_encode($data) . ');';
 $console = sprintf('<script>%s</script>', $console);
 echo $console;
}

//11write_to_console($edit_page_data);

?>
<?php

if(!empty($edit_page_data)){ //si la variable numero es igual a 4 haga esto?>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="mt-3" id="map_div">
          <div style="height:450px;" id="map"></div> <!-- Map Div -->
        </div>
      </div>
    </div>
  </div>
  <script>
      function initMap() {
1
        var markers;
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          zoom: <?php if (!empty($edit_page_data)) { echo '15'; } else { echo '12';} ?>,
          center: new google.maps.LatLng(<?php if (!empty($edit_page_data)) { echo $edit_page_data[0]['lat'] ; } else {echo '-0.7886730785062509';} ?>, <?php if (!empty($edit_page_data)) { echo $edit_page_data[0]['lng'] ; } else {echo '-78.63294284749065';} ?>)

        });


        <?php if (!empty($edit_page_data)) { ?>
          var markers = new Array(<?php echo sizeof($edit_page_data); ?>);
          var markationsBDD = <?php echo json_encode($edit_page_data) ?>;

          for(var i=0;i<=<?php echo sizeof($edit_page_data); ?>-1;i++){
            markers[i]= new google.maps.Marker({
              position: {lat:parseFloat(markationsBDD[i]['lat']),lng:parseFloat(markationsBDD[i]['lng'])},
              map: map
            });
          }






        <?php } ?>

        google.maps.event.addListener(map, 'click', function( event ){
          document.getElementById("lat").value = event.latLng.lat();
          document.getElementById("lng").value = event.latLng.lng();
        });

        map.addListener('click', function(e) {
            placeMarker(e.latLng, map);
        });

        function placeMarker(location,map) {
          for(var i=0;i<markers.length;i++){
            if ( markers[i] ) {
              marker[i].setPosition(location);
            } else {
              marker[i] = new google.maps.Marker({
                position: location,
                map: map
              });
            }
            map.panTo(location);
          }
        }

      }
	</script>
<?php
}else{ ?>
  <h1>No hay datos!!</h1>
<?php
}
?>
<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/scripts'); ?>


  <!-- You must first enter Your API Key on api-key.php file | application/views/api-key.php -->

  <?php $this->load->view('api-key'); ?>

  <!-- You must first enter Your API Key on api-key.php file | application/views/api-key.php -->

  </body>
</html>
