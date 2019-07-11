<?php $this->layout('layouts::default'); ?>

<?php echo $formInfo->messages(); ?>
<style type="text/css">
	#map{
		height: 300px;
	}
</style>

<div class="col-6">
	<h3>Create New Restaurant</h3><hr>
	<?php echo $formInfo->open(); ?>
		<div class="row">
			<div class="col-12">
				<input class="form-control" name="latitude" type="hidden">
				<input class="form-control" name="longitude" type="hidden">
				<div class="form-group">
					<label for="owner_name" class="control-label">Owner Name</label>
					<input class="form-control" type="text" id="mdl_owner_name" required readonly>
					<input class="form-control" name="owner_id" type="hidden" id="mdl_owner_id">
					<button type="button" class="btn btn-info mt-1" data-toggle="modal" data-target="#ownerList">
	 					Select Owner
					</button>
				</div>
				<div class="form-group">
					<label for="email" class="control-label">Restaurant Name</label>
					<input class="form-control" name="resto_name" type="text" required>
				</div>
				<div class="form-group">
					<label for="username" class="control-label">Address</label>
					<input class="form-control" name="address" type="text" required>
				</div>
				<div id="map">
					
				</div>
			</div>
		</div>
		<hr>
		<button type="submit" class="btn btn-success btn-block" id="updBtn">Save</button>
	<?php echo $formInfo->close(); ?>
</div>
<script>
	$(document).ready(function(){
		$('#btnContinue').attr('disabled', true);

		$(document).on('click', '#btnContinue', function(){
			window.location.href = 'c-main.html';
		});
	});

	var map, marker, geocoder;
	function getDefaultMapCenter() {
		var defaultLat = parseFloat($('[name=latitude]').val()) ||  10.3157,
		defaultLng =  parseFloat($('[name=longitude]').val()) ||  123.8854;

		return {
			lat: defaultLat,
			lng: defaultLng
		} 
	}

	function codeAddress() {
		var address = $('[name=address]').val();
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == 'OK') {
				map.setCenter(results[0].geometry.location);
				// marker.setPosition(results[0].geometry.location);
			} else {
				$.growl.error({ message: 'Geocode was not successful for the following reason: ' + status});
			}
		});
	}

	function initMap() {

		geocoder = new google.maps.Geocoder;

		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 14,
			center: getDefaultMapCenter()
		});

		marker = new google.maps.Marker({
			map: map,
			position: getDefaultMapCenter()
		});

		map.addListener('click', function (e) {
			geocoder.geocode({'location': e.latLng}, function(results, status) {
				if (status === 'OK') {
					if (results[0]) {
						marker.setPosition(e.latLng);
						let deliveryLat = e.latLng.lat();
						let deliveryLng = e.latLng.lng();
						$('[name=address]').val(results[0].formatted_address);
						$('[name=latitude]').val(deliveryLat);
						$('[name=longitude]').val(deliveryLng);
						$('#btnContinue').attr('disabled', false);
						localStorage.setItem('deliveryLat', deliveryLat);
						localStorage.setItem('deliveryLng', deliveryLng);
					}
				}
			})
		})
	}

	$('[name=address]').keydown(function (e) {
		if(e.keyCode === 13){
			e.preventDefault();
			codeAddress();
		}
	});
</script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb9gjcZGig7KAgoJC1EmMHA98Rp8Ayz98&amp;callback=initMap"></script>