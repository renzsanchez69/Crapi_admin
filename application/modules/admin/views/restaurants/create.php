<?php $this->layout('layouts::default'); ?>

<?php echo $formInfo->messages(); ?>

<div class="col-6">
	<h3>Create New Restaurant</h3><hr>
	<?php echo $formInfo->open(); ?>
		<div class="row">
			<div class="col-12">
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
			</div>
		</div>
		<hr>
		<button type="submit" class="btn btn-success btn-block" id="updBtn">Save</button>
	<?php echo $formInfo->close(); ?>
</div>