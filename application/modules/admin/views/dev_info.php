<?php $this->layout('layouts::default') ?>
<style type="text/css">
	table tr th, 
	table tr td {
		padding: 1px 40px 1px 10px;
	}

	table tr th {
		font-size: 20px;
		background: #d0cfcd;
	}
</style>
<div class="panel panel-info">
	<div class="panel-heading">
		Tools used
	</div>
	<div class="panel-body">
		<table class="table-bordered table-hover">
			<tr>
				<th>NAME</th>
				<th>VERSION</th>
			</tr>
			<tr>
				<td>PHP</td>
				<td><?php echo PHP_VERSION; ?></td>
			</tr>
			<tr>
				<td>Codeigniter</td>
				<td><?php echo CI_VERSION; ?></td>
			</tr>
			<tr>
				<td>Apache</td>
				<td><?php echo apache_get_version(); ?></td>
			</tr>
		</table>
	</div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">
		User Defined Constants
	</div>
	<div class="panel-body">
		<table class="table-bordered table-hover">
			<tr>
				<th>KEY</th>
				<th>VALUE</th>
			</tr>
			<?php foreach ($constants as $key => $value): ?>
			<tr>
				<td><?php echo $key; ?></td>
				<td><?php echo $value; ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>