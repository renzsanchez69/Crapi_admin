<?php $this->layout('layouts::default'); ?>

<center><h1>Restaurants List</h1></center>
<br>
<div class="row mb-2">
	<div class="col">
		<a href="<?php echo base_url(); ?>admin/restaurants/create" class="btn btn-info pull-left"><i class="fa fa-plus"></i> Add Restaurants</a>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<form method="GET" action="<?php echo base_url(); ?>admin/restaurants" accept-charset="UTF-8" class=" mb-2 mt-2">
			<div class="form-group row">

				<label class="col-sm-2 col-form-label-sm">Resto Name</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="resto_name" value="<?php echo isset($urlQuery['resto_name']) ? $urlQuery['resto_name'] : '';?>">
				</div>

				<label class="col-sm-2 col-form-label-sm">Owner ID</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="owner_id" value="<?php echo isset($urlQuery['owner_id']) ? $urlQuery['owner_id'] : '';?>">
				</div>

				<label class="col-sm-2 col-form-label-sm">Address</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="address" value="<?php echo isset($urlQuery['address']) ? $urlQuery['address'] : '';?>">
				</div>

				<label class="col-sm-2 col-form-label-sm">Owner Name</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="owner_fullname" value="<?php echo isset($urlQuery['owner_fullname']) ? $urlQuery['owner_fullname'] : '';?>">
				</div>

			</div>

			<div class="form-group row mt-5 mb-1">
				<div class="col-sm-4 offset-8">
					<button type="submit" class="btn btn-success btn-block">Search</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- restaurants table -->
<table class="table table-bordered table-sm mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Resto Name</th>
            <th>Address</th>
            <th>Owner ID</th>
            <th>Owner Name</th>
        </tr>
    </thead>
    <tbody>
    	<!-- restaurant data looping -->
    	<?php foreach ($restaurants as $restaurant): ?>

    		<tr id="idx_restaurant_<?php echo $restaurant['id']; ?>">
				<td><a href="<?php echo base_url(); ?>admin/restaurants/edit/<?php echo $restaurant['id']; ?>" class=""><i class="fa fa-pencil-alt"></i> <?php echo !empty($restaurant['id']) ? $restaurant['id'] : '--'; ?></a></td>
				<td><?php echo !empty($restaurant['resto_name']) ? $restaurant['resto_name'] : '--'; ?></td>
				<td><?php echo !empty($restaurant['address']) ? $restaurant['address'] : '--'; ?></td>
				<td><?php echo !empty($restaurant['owner_id']) ? $restaurant['owner_id'] : '--'; ?></td>
				<td><?php echo !empty($restaurant['owner_fullname']) ? $restaurant['owner_fullname'] : '--'; ?></td>

			</tr>
    	<?php endforeach ?>
	</tbody>
</table>

<script type="text/javascript">
	var anti_spam = false;
	$('.deleteRestaurantBtn').on('click', function(){
		// - prevent spamming 
		if (anti_spam) {
			return;
		}

		var confirmAns = confirm('Are you sure you want to delete this user?');
		if (!confirmAns) {
			return;
		}

		var	restaurantId = $(this).data('id');
		anti_spam = true;

		$.ajax({
			method: "POST",
			url: "restaurants/delete_restaurant",
			data: { id: restaurantId}
		})
		.done(function(data){
			var dataObj = JSON.parse(data);
			console.log(data);
			console.log('.idx_restaurant_'+restaurantId);
			console.log(dataObj);

			if (dataObj.result == 'OK') {
				$('#idx_restaurant_'+restaurantId).remove();
			} else {
				alert("Failed to delete restaurant!");
			}
			
		})
		.fail(function(e){
			alert("Error " + e.status + " : " + e.statusText);
		})
		.always(function(){
			anti_spam = false;
		});
	});
</script>