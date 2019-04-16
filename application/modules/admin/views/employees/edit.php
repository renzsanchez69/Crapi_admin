<?php $this->layout('layouts::default'); ?>
<?php echo $formInfo->messages(); ?>
<div class="row">
	<div class="col-6">
		<h3>Update Information</h3><hr>
		<?php echo $formInfo->open(); ?>
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="email" class="control-label">Email Address</label>
						<input class="form-control" name="email" type="text" value="<?php echo isset($employeeInfo->email) ? $employeeInfo->email : ''; ?>" id="email">
					</div>

					<!-- <div class="form-group">
						<label for="username" class="control-label">Username</label>
						<input class="form-control" name="username" type="text" value="<?php echo isset($employeeInfo->username) ? $employeeInfo->username : ''; ?>" id="username">
					</div> -->
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="firstname" class="control-label">First Name</label>
								<input class="form-control" name="firstname" type="text" value="<?php echo isset($employeeInfo->firstname) ? $employeeInfo->firstname : ''; ?>" id="firstname">
							</div>
						</div>

						<div class="col">
							<div class="form-group">
								<label for="lastname" class="control-label">Last Name</label>
								<input class="form-control" name="lastname" type="text" value="<?php echo isset($employeeInfo->lastname) ? $employeeInfo->lastname : ''; ?>" id="lastname">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label for="gender" class="control-label">Gender</label>
								<select class="custom-select" id="gender" name="gender">
									<?php foreach ($genderSelect as $key => $value): ?>
										<?php if (isset($employeeInfo->gender) && $employeeInfo->gender == $key): ?>
											<option value="<?php echo $key; ?>" selected="selected"><?php echo $value; ?></option>
										<?php else: ?>
											<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
										<?php endif ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>

						<div class="col">
							<div class="form-group">
								<label for="contact_number" class="control-label">Contact Number</label>
								<input class="form-control" name="contact_number" type="text" value="<?php echo isset($employeeInfo->contact_number) ? $employeeInfo->contact_number : ''; ?>" id="contact_number">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="address" class="control-label">Address</label>
						<textarea class="form-control" rows="4" name="address" cols="50" id="address"><?php echo isset($employeeInfo->address) ? $employeeInfo->address : ''; ?></textarea>
					</div>
				</div>
			</div>
			<hr>
			<button type="submit" class="btn btn-success btn-block" id="updBtn">Save</button>
		<?php echo $formInfo->close(); ?>
	</div>
	<div class="col-6">
		<h3>Change password</h3><hr>
		<?php echo $formPass->open(); ?>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label for="password" class="control-label">New Password</label>
							<input class="form-control" name="password" type="password" value="" id="password">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label for="password_confirmation" class="control-label">Confirm New Password</label>
							<input class="form-control" name="password_confirmation" type="password" value="" id="password_confirmation">
						</div>
					</div>
				</div>
			<hr>
			<button type="submit" class="btn btn-success btn-block">Update Password</button>
		<?php echo $formPass->close(); ?>
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