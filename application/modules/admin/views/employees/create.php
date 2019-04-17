<?php $this->layout('layouts::default'); ?>

<?php echo $formInfo->messages(); ?>

<div class="col-6">
	<h3>Create New Employee</h3><hr>
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
					<label for="email" class="control-label">Email Address</label>
					<input class="form-control" name="email" type="text" id="email" required>
				</div>
				<div class="form-group">
					<label for="password" class="control-label">Password</label>
					<input class="form-control" name="password" type="password" id="password" required>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="firstname" class="control-label">First Name</label>
							<input class="form-control" name="firstname" type="text" id="firstname" required>
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label for="lastname" class="control-label">Last Name</label>
							<input class="form-control" name="lastname" type="text" id="lastname" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-4">
						<div class="form-group">
							<label for="gender" class="control-label">Gender</label>
							<select class="custom-select" id="gender" name="gender">
								<?php foreach ($genderSelect as $key => $value): ?>
									<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label for="contact_number" class="control-label">Contact Number</label>
							<input class="form-control" name="contact_number" type="text" id="contact_number" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="address" class="control-label">Address</label>
					<textarea class="form-control" rows="4" name="address" cols="50" id="address" required></textarea>
				</div>
			</div>
		</div>
		<hr>
		<button type="submit" class="btn btn-success btn-block" id="updBtn">Save</button>
	<?php echo $formInfo->close(); ?>
</div>