<?php $this->layout('layouts::default') ?>


<div class="row">

	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Profile</h3>
				<hr>
				<div>
					<div class="row">
						<div class="col-md-6">
							<label>UserID</label>
						</div>
						<div class="col-md-6">
							<p><?php echo $user->id ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Username</label>
						</div>
						<div class="col-md-6">
							<p><?php echo $user->username ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Email</label>
						</div>
						<div class="col-md-6">
							<p><?php echo $user->email ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Firstname</label>
						</div>
						<div class="col-md-6">
							<p><?php echo $user->firstname ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Lastname</label>
						</div>
						<div class="col-md-6">
							<p><?php echo $user->lastname ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Address</label>
						</div>
						<div class="col-md-6">
							<p><?php echo $user->address ? $user->address : '--' ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Gender</label>
						</div>
						<div class="col-md-6">
							<p><?php echo $user->gender ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="box-body">
			</div>
		</div>
	</div>
	
</div>