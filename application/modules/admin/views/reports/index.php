<?php $this->layout('layouts::default'); ?>

<center><h1>Reports List</h1></center>
<br>
<div class="card">
	<div class="card-body">
		<form method="GET" action="<?php echo base_url(); ?>admin/reports" accept-charset="UTF-8" class=" mb-2 mt-2">
			<div class="form-group row">

				<label class="col-sm-2 col-form-label-sm">Restaurant Name</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-control-sm" name="resto_name" value="<?php echo isset($urlQuery['resto_name']) ? $urlQuery['resto_name'] : '';?>">
				</div>

				<div class="form-group col-sm-6">
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success btn-block">Search</button>
					</div>
				</div>

			</div>
		</form>
	</div>
</div>
<!-- reports table -->
<table class="table table-bordered table-sm mt-2">
    <thead>
        <tr>
            <th>Restaurant Name</th>
            <th>Total Sales</th>
        </tr>
    </thead>
    <tbody>
    	<!-- order data looping -->
    	<?php foreach ($reports as $order): ?>
    		<tr id="idx_order_<?php echo $order['id']; ?>">
				<td><a href="<?php echo base_url(); ?>admin/reports/view/<?php echo $order['id']; ?>" class=""><?php echo !empty($order['resto_name']) ? $order['resto_name'] : '--'; ?></a></td>
				<td><?php echo !empty($order['total_sales']) ? $order['total_sales'] : '0'; ?></td>

			</tr>
    	<?php endforeach ?>
	</tbody>
</table>
