<?php $this->layout('layouts::default'); ?>

<!-- <center><h1>Reports List</h1></center> -->
<br>
<div class="card">
	<div class="card-body">
		<form method="GET" action="" accept-charset="UTF-8" class=" mb-2 mt-2">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label-sm">Employee Name</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="emp_name" value="<?php echo isset($urlQuery['emp_name']) ? $urlQuery['emp_name'] : '';?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label-sm">Date</label>
				<div class="col-sm-2">
					<input type="text" class="form-control form-control-sm datetimepicker" name="date_from" value="<?php echo isset($urlQuery['date_from']) ? $urlQuery['date_from'] : '';?>">
				</div>-
				<div class="col-sm-2">
					<input type="text" class="form-control form-control-sm datetimepicker" name="date_to" value="<?php echo isset($urlQuery['date_to']) ? $urlQuery['date_to'] : '';?>">
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
<!-- reports table -->
<table class="table table-bordered table-sm mt-2">
    <thead>
        <tr>
            <th>Order Hash</th>
            <th>Employee Name</th>
            <th>Date</th>
            <th>Sub Total</th>
        </tr>
    </thead>
    <tbody>
    	<!-- order data looping -->
    	<?php $total_sales = 0; ?>
    	<?php foreach ($orders as $order): ?>
    		<?php $total_sales = $total_sales + $order['sub_total']; ?>
    		<tr id="idx_order_<?php echo $order['order_id']; ?>">
				<td><a href="<?php echo base_url(); ?>admin/orders/view/<?php echo $order['order_id']; ?>" class=""><?php echo !empty($order['order_hash']) ? $order['order_hash'] : '--'; ?></a></td>
				<td><?php echo !empty($order['employee_fullname']) ? $order['employee_fullname'] : '--'; ?></td>
				<td><?php echo !empty($order['created_at']) ? $order['created_at'] : '0'; ?></td>
				<td><?php echo !empty($order['sub_total']) ? $order['sub_total'] : '0'; ?></td>
			</tr>
    	<?php endforeach ?>
    	<tr>
			
			<td colspan="4" class="text-right">
				<div class="row mt-2 mb-2">
					<span class="col-sm-10"><b>TOTAL SALES:</b></span>
					<span class="col-sm-2 text-center"><?php echo !empty($total_sales) ? $total_sales : '0'; ?></span>
				</div>
			</td>
		</tr>
	</tbody>
</table>
