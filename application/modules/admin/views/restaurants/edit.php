<?php $this->layout('layouts::default'); ?>
<?php echo $formInfo->messages(); ?>
<div class="row">
	<div class="col-6">
		<h3>Update Information</h3><hr>
		<?php echo $formInfo->open(); ?>
			<div class="row">
				<div class="col-12">

					<div class="form-group">
						<label for="owner_fullname" class="control-label">Owner Fullname</label>
						&nbsp;&nbsp;&nbsp;<h5><?php echo isset($restaurantInfo['owner_fullname']) ? $restaurantInfo['owner_fullname'] : ''; ?></h5>
					</div>

					<div class="form-group">
						<label for="email" class="control-label">Restaurant Name</label>
						<input class="form-control" name="resto_name" type="text" value="<?php echo isset($restaurantInfo['resto_name']) ? $restaurantInfo['resto_name'] : ''; ?>" id="email">
					</div>

					<div class="form-group">
						<label for="username" class="control-label">Address</label>
						<input class="form-control" name="address" type="text" value="<?php echo isset($restaurantInfo['address']) ? $restaurantInfo['address'] : ''; ?>" id="address">
					</div>
				
				</div>
			</div>
			<hr>
			<button type="submit" class="btn btn-success btn-block" id="updBtn">Save</button>
		<?php echo $formInfo->close(); ?>
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
</script>