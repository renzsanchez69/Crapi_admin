<?php $this->layout('layouts::default'); ?>

<center><h1>Customers List</h1></center>
<br>
<div class="card">
	<div class="card-body">
		<form method="GET" action="<?php echo base_url(); ?>admin/customers" accept-charset="UTF-8" class=" mb-2 mt-2">
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
<!-- customers table -->
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
    	<!-- customer data looping -->
    	<?php foreach ($customers as $customer): ?>

    		<tr id="idx_customer_<?php echo $customer['id']; ?>">
				<td><a href="<?php echo base_url(); ?>admin/customers/edit/<?php echo $customer['id']; ?>" class=""><i class="fa fa-pencil-alt"></i> <?php echo !empty($customer['id']) ? $customer['id'] : '--'; ?></a></td>
				<td><?php echo !empty($customer['fullname']) ? $customer['fullname'] : '--'; ?></td>
				<td>
					<?php if (!empty($customer['gender']) && $customer['gender'] == GENDER_FEMALE): ?>
						<span class="fa fa-venus"></span> 
					<?php elseif (!empty($customer['gender']) && $customer['gender'] == GENDER_MALE): ?>
						<span class="fa fa-mars"></span> 
					<?php endif ?>
					<?php echo !empty($customer['gender']) ? ucfirst($customer['gender']) : '--'; ?>
				</td>
				<td>
					<?php echo !empty($customer['email']) ? $customer['email'] : '--'; ?>
				</td>
				<td><?php echo !empty($customer['address']) ? $customer['address'] : '--'; ?></td>
				<td><?php echo !empty($customer['contact_number']) ? $customer['contact_number'] : '--'; ?></td>
				<td>
					<?php if (isset($customer['status']) && $customer['status'] == USER_ACTIVE): ?>
						<span class="badge badge-success">Active</span>
					<?php elseif (isset($customer['status']) && $customer['status'] == USER_STOP): ?>
						<span class="badge badge-danger">Deactivated</span>
					<?php endif ?>

				</td>
			</tr>
    	<?php endforeach ?>
	</tbody>
</table>

<script type="text/javascript">
	var anti_spam = false;
	$('.deleteCustomerBtn').on('click', function(){
		// - prevent spamming 
		if (anti_spam) {
			return;
		}

		var confirmAns = confirm('Are you sure you want to delete this user?');
		if (!confirmAns) {
			return;
		}

		var	customerId = $(this).data('id');
		anti_spam = true;

		$.ajax({
			method: "POST",
			url: "customers/delete_customer",
			data: { id: customerId}
		})
		.done(function(data){
			var dataObj = JSON.parse(data);
			console.log(data);
			console.log('.idx_customer_'+customerId);
			console.log(dataObj);

			if (dataObj.result == 'OK') {
				$('#idx_customer_'+customerId).remove();
			} else {
				alert("Failed to delete customer!");
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