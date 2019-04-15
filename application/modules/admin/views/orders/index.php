<?php $this->layout('layouts::default'); ?>

<center><h1>Orders List</h1></center>
<br>
<div class="card">
	<div class="card-body">
		<form method="GET" action="<?php echo base_url(); ?>admin/orders" accept-charset="UTF-8" class=" mb-2 mt-2">
			<div class="form-group row">

				<label class="col-sm-2 col-form-label-sm">Order Number</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="order_number" value="<?php echo isset($urlQuery['order_number']) ? $urlQuery['order_number'] : '';?>">
				</div>

				<label class="col-sm-2 col-form-label-sm">Customer ID</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="customer_id" value="<?php echo isset($urlQuery['customer_id']) ? $urlQuery['customer_id'] : '';?>">
				</div>

				<label class="col-sm-2 col-form-label-sm">Customer Name</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="customer_fullname" value="<?php echo isset($urlQuery['customer_fullname']) ? $urlQuery['customer_fullname'] : '';?>">
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
<!-- orders table -->
<table class="table table-bordered table-sm mt-2">
    <thead>
        <tr>
            <th>Order Hash</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
        </tr>
    </thead>
    <tbody>
    	<!-- order data looping -->
    	<?php foreach ($orders as $order): ?>

    		<tr id="idx_order_<?php echo $order['id']; ?>">
				<td><a href="<?php echo base_url(); ?>admin/orders/view/<?php echo $order['id']; ?>" class=""><?php echo !empty($order['order_number']) ? $order['order_number'] : '--'; ?></a></td>
				<td><?php echo !empty($order['customer_id']) ? $order['customer_id'] : '--'; ?></td>
				<td><?php echo !empty($order['customer_fullname']) ? $order['customer_fullname'] : '--'; ?></td>

			</tr>
    	<?php endforeach ?>
	</tbody>
</table>

<script type="text/javascript">
	var anti_spam = false;
	$('.deleteOrderBtn').on('click', function(){
		// - prevent spamming 
		if (anti_spam) {
			return;
		}

		var confirmAns = confirm('Are you sure you want to delete this user?');
		if (!confirmAns) {
			return;
		}

		var	orderId = $(this).data('id');
		anti_spam = true;

		$.ajax({
			method: "POST",
			url: "orders/delete_order",
			data: { id: orderId}
		})
		.done(function(data){
			var dataObj = JSON.parse(data);
			console.log(data);
			console.log('.idx_order_'+orderId);
			console.log(dataObj);

			if (dataObj.result == 'OK') {
				$('#idx_order_'+orderId).remove();
			} else {
				alert("Failed to delete order!");
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