<style type="text/css">
	.sidebar .nav-link {
	    font-size: 1.2rem;
	}
</style>
<nav class="col-md-2 d-none d-md-block bg-dark sidebar">
	<div class="sidebar-sticky">
		<ul class="nav flex-column">

			<li class="nav-item">
				<a class="nav-link text-light <?php echo $ctrler == 'owners' ? 'active' : ''; ?>" href="<?php echo base_url('admin/owners') ?>">
					Owners
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link text-light <?php echo $ctrler == 'employees' ? 'active' : ''; ?>" href="<?php echo base_url('admin/employees') ?>">
					Employees
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link text-light <?php echo $ctrler == 'customers' ? 'active' : ''; ?>" href="<?php echo base_url('admin/customers') ?>">
					Customers
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link text-light <?php echo $ctrler == 'orders' ? 'active' : ''; ?>" href="<?php echo base_url('admin/orders') ?>">
					Order History
				</a>
			</li>
		</ul>
	</div>
</nav>