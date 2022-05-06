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
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
    			<form id="mapform" <?php if (isset($edit_page_data)) { echo "action='".base_url('index.php/mapsapi/edit_action')."'";} ?> method="post" class="mt-3">
    				<div class="input-group">
                <?php if (isset($edit_page_data)) { ?>
    				          <input type="text" name="desc" id="desc" class="form-control" placeholder="Enter a description..." <?php if (isset($edit_page_data)) {echo 'value="'.$edit_page_data->description.'"';}; ?>>
                <?php } else { ?>
                <?php } ?>
               <input type="hidden" name="lat" id="lat" value="<?php if (isset($edit_page_data)){ echo $edit_page_data->lat;} ?>">
               <input type="hidden" name="lng" id="lng" value="<?php if (isset($edit_page_data)){ echo $edit_page_data->lng;} ?>">
               <?php if (isset($edit_page_data)): ?>
               <input type="hidden" name="id" value="<?php echo $edit_page_data->id; ?>">
               <?php endif ?>
    				   <span class="input-group-btn">
                  <?php if (isset($edit_page_data)) { ?>
                    <button class="btn btn-success ml-2" type="submit">Editar Localización</button>
                  <?php } else { ?>
                    <!--<button class="btn btn-success ml-2" type="button" disabled="">Get a Location</button>-->
                  <?php } ?>
    				   </span>
    				</div>
    			</form>
    			<div class="alert alert-success mt-3" role="alert" style="display: none">
    			  Successful.
    			</div>
    			<div class="mt-3" id="map_div">
    				<div style="height:450px;" id="map"></div> <!-- Map Div -->
    			</div>
        </div>
      </div>
    </div>

	<script>
      function initMap() {
        var marker;
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          zoom: <?php if (isset($edit_page_data)) { echo '15'; } else { echo '12';} ?>,
          center: new google.maps.LatLng(<?php if (isset($edit_page_data)) { echo $edit_page_data->lat; } else {echo '-0.9176800501339825';} ?>, <?php if (isset($edit_page_data)) { echo $edit_page_data->lng; } else {echo '-78.63294284749065';} ?>)
        });


        <?php if (isset($edit_page_data)) { ?>

        var marker = new google.maps.Marker({
          position: {lat:<?php echo $edit_page_data->lat ?>,lng:<?php echo $edit_page_data->lng ?>},
          map: map
        });

        <?php } ?>

        google.maps.event.addListener(map, 'click', function( event ){
          document.getElementById("lat").value = event.latLng.lat();
          document.getElementById("lng").value = event.latLng.lng();
        });

        map.addListener('click', function(e) {
            placeMarker(e.latLng, map);
        });

        function placeMarker(location,map) {
          if ( marker ) {
            marker.setPosition(location);
          } else {
            marker = new google.maps.Marker({
              position: location,
              map: map
            });
          }
          map.panTo(location);
        }

      }
	</script>
<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/scripts'); ?>


  <!-- You must first enter Your API Key on api-key.php file | application/views/api-key.php -->

  <?php $this->load->view('api-key'); ?>

  <!-- You must first enter Your API Key on api-key.php file | application/views/api-key.php -->


	<script type="text/javascript">

    <?php if (isset($edit_page_data)){ ?> // if user in Edit Page

    $(document).ready(function () {
      $('#map_div').on('click', function(){
        $('button').attr('disabled', false);
      })
    })

    <?php } else { ?> // if user in Home Page

    $(document).ready(function () {
      $('button').on('click', function(){
        $('.alert').slideDown();
        $('.alert').delay(2000).slideUp();
        var lat = $('#lat').val();
        var lng = $('#lng').val();
        var desc = $('#desc').val();
        $.ajax({
          url: '<?php echo base_url('insert'); ?>',
          type: 'POST',
          data: {lat: lat, lng: lng, desc: desc},
          success: function(data){}
        })
        $('#lat').val('');
        $('#lng').val('');
        $('#desc').val('');
      })
      $('#map_div').on('click', function(){
        $('button').attr('disabled', false);
      })
    })

    <?php } ?>
    $('#mapform').on('keyup keypress', function(e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) {
        e.preventDefault();
        return false;
      }
    });

	</script>

  </body>
</html>
