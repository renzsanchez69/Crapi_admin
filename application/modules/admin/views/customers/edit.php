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
						<input class="form-control" name="email" type="text" value="<?php echo isset($customerInfo->email) ? $customerInfo->email : ''; ?>" id="email">
					</div>

					<!-- <div class="form-group">
						<label for="username" class="control-label">Username</label>
						<input class="form-control" name="username" type="text" value="<?php echo isset($customerInfo->username) ? $customerInfo->username : ''; ?>" id="username">
					</div> -->
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="firstname" class="control-label">First Name</label>
								<input class="form-control" name="firstname" type="text" value="<?php echo isset($customerInfo->firstname) ? $customerInfo->firstname : ''; ?>" id="firstname">
							</div>
						</div>

						<div class="col">
							<div class="form-group">
								<label for="lastname" class="control-label">Last Name</label>
								<input class="form-control" name="lastname" type="text" value="<?php echo isset($customerInfo->lastname) ? $customerInfo->lastname : ''; ?>" id="lastname">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label for="gender" class="control-label">Gender</label>
								<select class="custom-select" id="gender" name="gender">
									<?php foreach ($genderSelect as $key => $value): ?>
										<?php if (isset($customerInfo->gender) && $customerInfo->gender == $key): ?>
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
								<input class="form-control" name="contact_number" type="text" value="<?php echo isset($customerInfo->contact_number) ? $customerInfo->contact_number : ''; ?>" id="contact_number">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="status" class="control-label">Status</label>
								<select class="custom-select" id="status" name="status">
									<?php foreach ($userStatusSelect as $key => $value): ?>
										<?php if (isset($customerInfo->status) && $customerInfo->status == $key): ?>
											<option value="<?php echo $key; ?>" selected="selected"><?php echo $value; ?></option>
										<?php else: ?>
											<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
										<?php endif ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="address" class="control-label">Address</label>
						<textarea class="form-control" rows="4" name="address" cols="50" id="address"><?php echo isset($customerInfo->address) ? $customerInfo->address : ''; ?></textarea>
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

		<hr>
		<table class="table table-sm mt-5 table-hovered table-bordered">
			<thead>
				<tr>
					<th>Order Date</th>
					<th>Employee Name</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php if (!empty($customerOrders)): ?>
					<?php foreach ($customerOrders as $order): ?>
						<tr>
							<td><?php echo $order['order_created'] ? $order['order_created'] : '--'; ?></td>
							<td><?php echo $order['employee_fullname'] ? $order['employee_fullname'] : '--'; ?></td>
							<td>
								<?php if ($order['order_status'] == 'failed'): ?>
									<span class="badge badge-danger">Rejected</span>
								<?php elseif ($order['is_received'] == 1): ?>
									<span class="badge badge-success">Claimed</span>
								<?php elseif ($order['is_received'] == 2): ?>
									<span class="badge badge-warning">Not Claimed</span>
								<?php endif ?>
							</td>
						</tr>
					<?php endforeach ?>
				<?php else: ?>
					<tr><td colspan="3"><center><i><small>Nothing to display.</small></i></center></td></tr>
				<?php endif ?>
			</tbody>
		</table>
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