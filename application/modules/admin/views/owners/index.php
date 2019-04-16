<?php $this->layout('layouts::default'); ?>

<center><h1>Owners List</h1></center>
<br>
<div class="row mb-2">
	<div class="col">
		<a href="<?php echo base_url(); ?>admin/owners/create" class="btn btn-info pull-left"><i class="fa fa-plus"></i> Add Owner</a>
	</div>
</div>
<div class="card">
	<div class="card-body">
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
<!-- owners table -->
<table class="table table-bordered table-sm mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    	<!-- owner data looping -->
    	<?php foreach ($owners as $owner): ?>

    		<tr id="idx_owner_<?php echo $owner['id']; ?>">
				<td><a href="<?php echo base_url(); ?>admin/owners/edit/<?php echo $owner['id']; ?>" class=""><i class="fa fa-pencil-alt"></i> <?php echo !empty($owner['id']) ? $owner['id'] : '--'; ?></a></td>
				<td><?php echo !empty($owner['fullname']) ? $owner['fullname'] : '--'; ?></td>
				<td>
					<?php if (!empty($owner['gender']) && $owner['gender'] == GENDER_FEMALE): ?>
						<span class="fa fa-venus"></span> 
					<?php elseif (!empty($owner['gender']) && $owner['gender'] == GENDER_MALE): ?>
						<span class="fa fa-mars"></span> 
					<?php endif ?>
					<?php echo !empty($owner['gender']) ? ucfirst($owner['gender']) : '--'; ?>
				</td>
				<td>
					<?php echo !empty($owner['email']) ? $owner['email'] : '--'; ?>
				</td>
				<td><?php echo !empty($owner['address']) ? $owner['address'] : '--'; ?></td>
				<td><?php echo !empty($owner['contact_number']) ? $owner['contact_number'] : '--'; ?></td>
				<td>
					<?php if (isset($owner['status']) && $owner['status'] == USER_ACTIVE): ?>
						<span class="badge badge-success">Active</span>
					<?php elseif (isset($owner['status']) && $owner['status'] == USER_STOP): ?>
						<span class="badge badge-danger">Deactivated</span>
					<?php endif ?>

				</td>
			</tr>
    	<?php endforeach ?>
	</tbody>
</table>

<script type="text/javascript">
	var anti_spam = false;
	$('.deleteOwnerBtn').on('click', function(){
		// - prevent spamming 
		if (anti_spam) {
			return;
		}

		var confirmAns = confirm('Are you sure you want to delete this user?');
		if (!confirmAns) {
			return;
		}

		var	ownerId = $(this).data('id');
		anti_spam = true;

		$.ajax({
			method: "POST",
			url: "owners/delete_owner",
			data: { id: ownerId}
		})
		.done(function(data){
			var dataObj = JSON.parse(data);
			console.log(data);
			console.log('.idx_owner_'+ownerId);
			console.log(dataObj);

			if (dataObj.result == 'OK') {
				$('#idx_owner_'+ownerId).remove();
			} else {
				alert("Failed to delete owner!");
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