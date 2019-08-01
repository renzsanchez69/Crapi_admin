<?php $this->layout('layouts::default'); ?>

<div class="row">
	<div class="col-12">
		
	<h3>Order Details</h3><hr>
	</div>
	<div class="col-5">
		<dl class="row">
			<dt class="col-sm-4">Customer Name</dt>
			<dd class="col-sm-8"><?php echo isset($orderInfo['customer_fullname']) ? $orderInfo['customer_fullname'] : ''; ?></dd>

			<dt class="col-sm-4">Customer Address</dt>
			<dd class="col-sm-8">
				<?php echo isset($orderInfo['address']) ? $orderInfo['address'] : ''; ?>
			</dd>

			<dt class="col-sm-4">Order Number</dt>
			<dd class="col-sm-8">#<?php echo isset($orderInfo['order_number']) ? $orderInfo['order_number'] : ''; ?></dd>

			<dt class="col-sm-4">Resto Name</dt>
			<dd class="col-sm-8"><?php echo isset($orderInfo['resto_name']) ? $orderInfo['resto_name'] : ''; ?></dd>

			<dt class="col-sm-4">Resto Address</dt>
			<dd class="col-sm-8">
				<?php echo isset($orderInfo['resto_address']) ? $orderInfo['resto_address'] : ''; ?>
			</dd>
			<dt class="col-sm-4">Status</dt>
			<dd class="col-sm-8">
				<select name="status" id="orderStatus">
					<option>Claimed</option>
					<option>Not Claimed</option>
					<option>Rejected</option>
				</select>
				<button class="btn btn-sm btn-success" id="btnSaveOrderStatus">Save</button>
			</dd>
		</dl>
		<input name="latitude" type="hidden" value="<?php echo isset($orderInfo['resto_latitude']) ? $orderInfo['resto_latitude'] : ''; ?>">
		<input name="longitude" type="hidden" value="<?php echo isset($orderInfo['resto_longitude']) ? $orderInfo['resto_longitude'] : ''; ?>">
		<div class="col-12" id="map" style="height: 300px; position: relative; overflow: hidden;"></div>

	</div>

	<div class="col-7">
		
		<div class="row">
		<div class="col-12">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<!-- <th scope="col"> </th> -->
							<th scope="col">Product ID</th>
							<th scope="col">Product Name</th>
							<th scope="col">Request Note</th>
							<th scope="col" class="text-center">Quantity</th>
							<th scope="col" class="text-right">Price</th>
							<th scope="col" class="text-right">Sub-Total</th>
							<!-- <th> </th> -->
						</tr>
					</thead>
					<tbody>
						<?php $total = 0; ?>
						<?php foreach ($orderDetails as $detail): ?>
							<tr>
								<!-- <td><img src="https://dummyimage.com/50x50/55595c/fff"> </td> -->
								<td><?php echo !empty($detail['id']) ? $detail['id'] : '--'; ?></td>
								<td><?php echo !empty($detail['name']) ? $detail['name'] : '--'; ?></td>
								<td><?php echo !empty($detail['description_request']) ? $detail['description_request'] : '--'; ?></td>
								<td><center><?php echo !empty($detail['qty']) ? $detail['qty'] : '--'; ?></center></td>
								<td class="text-right">₱ <?php echo !empty($detail['price']) ? $detail['price'] : '--'; ?></center></td>
								<td class="text-right">₱ <?php echo !empty($detail['sub_total']) ? $detail['sub_total'] : '--'; ?></center></td>
							 </tr>
							 <?php $total = $total + (!empty($detail['sub_total']) ? $detail['sub_total'] : 0);?>
						<?php endforeach ?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><strong>Total</strong></td>
							<td class="text-right"><strong>₱ <?php echo isset($total) ? number_format($total) : '0'; ?> </strong></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
</div>

<script type="text/javascript">
	$('[type="submit"]').on('click', function(e){
		e.preventDefault();

		var response = confirm('Update information?');
		if (response) {
			$(this).closest('form').submit();
		};
	});

	var map, marker, geocoder, searchBox;

	$('#updBtn').on('click', function(e){
		e.preventDefault();

		var response = confirm('Update information?');
		if (response) {
			$('form').submit();
		};
	});

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
				console.log(results);
				map.setCenter(results[0].geometry.location);
				marker.setPosition(results[0].geometry.location);
			} else {
				alert('Geocode was not successful for the following reason: ' + status);
			}
		});
	}

	function initMap() {

		// var NEW_ZEALAND_BOUNDS = {
		// 	west: 124.6956015,
		// 	east: 116.3667803,
		// 	south: 4.657837,
		// 	north: 19.366895
		// };


		geocoder = new google.maps.Geocoder;

		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 14,
			center: getDefaultMapCenter(),
			// restriction: {
			// 	latLngBounds: NEW_ZEALAND_BOUNDS,
			// 	strictBounds: false,
			// },
		});

		marker = new google.maps.Marker({
			map: map,
			position: getDefaultMapCenter()
		});

		var markers = [];

		// map.addListener('click', function (e) {
		// 	geocoder.geocode({'location': e.latLng}, function(results, status) {
		// 		if (status === 'OK') {
		// 			if (results[0]) {
		// 				marker.setPosition(e.latLng);
		// 				$('[name=address]').val(results[0].formatted_address)
		// 				$('[name=latitude]').val(e.latLng.lat())
		// 				$('[name=longitude]').val(e.latLng.lng())
		// 			}
		// 		}
		// 	})
		// })
	}

	$('[name=address]').keydown(function (e) {
		if(e.keyCode === 13){
			e.preventDefault();
			codeAddress();
		}
	});
</script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb9gjcZGig7KAgoJC1EmMHA98Rp8Ayz98&amp;libraries=places&amp;callback=initMap"></script>
