<?php $this->layout('layouts::default'); ?>
<div class="card">
	<div class="card-body bg-dark text-white">
		<form method="GET" action="<?php echo base_url(); ?>admin/owners" accept-charset="UTF-8" class=" mb-2 mt-2">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label-sm">Name</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="name" value="<?php echo isset($urlQuery['name']) ? $urlQuery['name'] : '';?>">
				</div>
				<label class="col-sm-2 col-form-label-sm">Email Address</label>
				<div class="col-sm-4">
					<input type="email" class="form-control form-control-sm" name="email" value="<?php echo isset($urlQuery['email']) ? $urlQuery['email'] : '';?>">
				</div>

				<label class="col-sm-2 col-form-label-sm">Gender</label>
				<div class="col-sm-4">
					<select name="gender" class="form-control form-control-sm">
						<?php foreach (unserialize(GENDER_SELECTION) as $key => $value): ?>
							<?php if (isset($urlQuery['gender']) && $urlQuery['gender'] == $key): ?>
								<option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
							<?php else: ?>
								<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
							<?php endif ?>
						<?php endforeach ?>
					</select>
				</div>
				
				<label class="col-sm-2 col-form-label-sm">Address</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="address" value="<?php echo isset($urlQuery['address']) ? $urlQuery['address'] : '';?>">
				</div>
				<label class="col-sm-2 col-form-label-sm">Contact Number</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="contact_number" value="<?php echo isset($urlQuery['contact_number']) ? $urlQuery['contact_number'] : '';?>">
				</div>
				<label class="col-sm-2 col-form-label-sm">Status</label>
				<div class="col-sm-4">
					<select name="status" class="form-control form-control-sm">
						<?php foreach (unserialize(USER_STATUS_SELECTION) as $key => $value): ?>
							<?php if (isset($urlQuery['status']) && $urlQuery['status'] == $key): ?>
								<option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
							<?php else: ?>
								<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
							<?php endif ?>
						<?php endforeach ?>
					</select>
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
<!-- users table -->
<table class="table table-bordered table-sm mt-2">
    <thead>
        <tr>
            <th class="bg-dark text-white">Name</th>
            <th class="bg-dark text-white">Gender</th>
            <th class="bg-dark text-white">Email</th>
            <th class="bg-dark text-white">Address</th>
            <th class="bg-dark text-white">Contact Number</th>
            <th class="bg-dark text-white">Status</th>
            <th class="row-actions bg-dark text-white"></th>
        </tr>
    </thead>
    <tbody>
    	<!-- user data looping -->
    	<?php foreach ($users as $user): ?>

    		<tr id="idx_user_<?php echo $user['id']; ?>">
				<td><?php echo !empty($user['fullname']) ? $user['fullname'] : '--'; ?></td>
				<td>
					<?php if (!empty($user['gender']) && $user['gender'] == GENDER_FEMALE): ?>
						<span class="fa fa-venus"></span> 
					<?php elseif (!empty($user['gender']) && $user['gender'] == GENDER_MALE): ?>
						<span class="fa fa-mars"></span> 
					<?php endif ?>
					<?php echo !empty($user['gender']) ? ucfirst($user['gender']) : '--'; ?>
				</td>
				<td>
					<?php echo !empty($user['email']) ? $user['email'] : '--'; ?>
				</td>
				<td><?php echo !empty($user['address']) ? $user['address'] : '--'; ?></td>
				<td><?php echo !empty($user['contact_number']) ? $user['contact_number'] : '--'; ?></td>
				<td>
					<?php if (isset($user['status']) && $user['status'] == USER_ACTIVE): ?>
						<span class="badge badge-success">Active</span>
					<?php elseif (isset($user['status']) && $user['status'] == USER_STOP): ?>
						<span class="badge badge-danger">Deactivated</span>
					<?php endif ?>

				</td>
				<td>
					<!-- <a href="<?php echo base_url(); ?>admin/users/edit/<?php echo $user['id']; ?>" class="btn btn-info btn-sm btn-block mb-1"><i class="fa fa-pencil-alt"></i> Edit</a>
					<button class="btn btn-primary btn-block btn-sm deleteUserBtn" data-id="<?php echo $user['id']; ?>"><i class="fa fa-trash"></i> Delete</button> -->
				</td>
			</tr>
    	<?php endforeach ?>
	</tbody>
</table>

<script type="text/javascript">
	var anti_spam = false;
	$('.deleteUserBtn').on('click', function(){
		// - prevent spamming 
		if (anti_spam) {
			return;
		}

		var confirmAns = confirm('Are you sure you want to delete this user?');
		if (!confirmAns) {
			return;
		}

		var	userId = $(this).data('id');
		anti_spam = true;

		$.ajax({
			method: "POST",
			url: "users/delete_user",
			data: { id: userId}
		})
		.done(function(data){
			var dataObj = JSON.parse(data);
			console.log(data);
			console.log('.idx_user_'+userId);
			console.log(dataObj);

			if (dataObj.result == 'OK') {
				$('#idx_user_'+userId).remove();
			} else {
				alert("Failed to delete user!");
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