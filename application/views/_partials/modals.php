<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="register-title">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form method="POST" action="<?php echo base_url(); ?>login/bymodal" accept-charset="UTF-8" class="ajax">
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control" name="username" type="text" id="username" placeholder="Username">
					</div>

					<div class="form-group">
						<input class="form-control" name="password" type="password" value="" id="password" placeholder="Password">
					</div>

					<div class="text-center">
						<button type="submit" class="btn-block btn btn-success">Log in</button>
					</div>
					<br>
					<div class="text-center">
						<h6>or</h6>
					</div>	<br>

					<div class="text-center">
						<a href="<?php echo base_url(); ?>seller/login/" class="btn-block btn btn-info" style="background: #46569c;">Sign in with Facebook</a>
						<a href="<?php echo base_url(); ?>seller/login/" class="btn-block btn" style="background: #ce4e3d; color: white">Sign in with Google</a>
					</div>
				</div>
				
				 <!-- <div class="modal-footer justify-content-center">
					<a href="http://127.0.0.1:8000/auth/facebook" class="text-info"><i class="fab fa-facebook-square fa-3x"></i></a>
					<a href="http://127.0.0.1:8000/auth/google" class="text-danger"><i class="fab fa-google-plus-square fa-3x"></i></a>
				</div>  -->
			</form>
		</div>
	</div>
</div>



<!-- REMOVE THIS CODES BELOW -->
<div class="modal fade" id="buyerlogin" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="register-title">Buyer Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form method="POST" action="<?php echo base_url(); ?>login/bymodal" accept-charset="UTF-8" class="ajax">
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control" name="username" type="text" id="username" placeholder="Username">
					</div>

					<div class="form-group">
						<input class="form-control" name="password" type="password" value="" id="password" placeholder="Password">
					</div>

					<div class="text-center">
						<button type="submit" class="btn-block btn btn-success">Log in</button>
					</div>
					<br>
					<div class="text-center">
						<h6>or</h6>
					</div>	<br>

					<div class="text-center">
						<a href="<?php echo base_url(); ?>seller/login/" class="btn-block btn btn-info" style="background: #46569c;">Sign in with Facebook</a>
						<a href="<?php echo base_url(); ?>seller/login/" class="btn-block btn" style="background: #ce4e3d; color: white">Sign in with Google</a>
					</div>
				</div>
				
				 <!-- <div class="modal-footer justify-content-center">
					<a href="http://127.0.0.1:8000/auth/facebook" class="text-info"><i class="fab fa-facebook-square fa-3x"></i></a>
					<a href="http://127.0.0.1:8000/auth/google" class="text-danger"><i class="fab fa-google-plus-square fa-3x"></i></a>
				</div>  -->
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="sellerlogin" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="register-title">Seller Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form method="POST" action="<?php echo base_url(); ?>seller/login/bymodal" accept-charset="UTF-8" class="ajax">
				<div class="modal-body">
					<div class="form-group">
						<!-- <label for="username" class="control-label">Username</label> -->
						<input class="form-control" name="username" type="text" id="username" placeholder="Username">
					</div>

					<div class="form-group">
						<!-- <label for="password" class="control-label">Password</label> -->
						<input class="form-control" name="password" type="password" value="" id="password" placeholder="Password">
					</div>

					<div class="text-center">
						<button type="submit" class="btn-block btn btn-success">Log in</button>
					</div>
					<br>
					<div class="text-center">
						<h6>or</h6>
					</div>	<br>

					<div class="text-center">
						<a href="<?php echo base_url(); ?>seller/login/" class="btn-block btn btn-info" style="background: #46569c;">Sign in with Facebook</a>
						<a href="<?php echo base_url(); ?>seller/login/" class="btn-block btn" style="background: #ce4e3d; color: white">Sign in with Google</a>
					</div>
				</div>
				
				 <!-- <div class="modal-footer justify-content-center">
					<a href="http://127.0.0.1:8000/auth/facebook" class="text-info"><i class="fab fa-facebook-square fa-3x"></i></a>
					<a href="http://127.0.0.1:8000/auth/google" class="text-danger"><i class="fab fa-google-plus-square fa-3x"></i></a>
				</div>  -->
			</form>
		</div>
	</div>
</div>
<!-- <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register-title">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="register-title">Create an account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<form method="POST" action="http://127.0.0.1:8000/register" accept-charset="UTF-8" class="ajax">
				<input name="_token" type="hidden" value="jMKTz3RY8iEkDw0oGYdM1QIm7SaOFwwg34pJiDfv">
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="firstname" class="control-label">First Name</label>
								<input class="form-control form-control-sm" name="firstname" type="text" id="firstname">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="lastname" class="control-label">Last Name</label>
								<input class="form-control form-control-sm" name="lastname" type="text" id="lastname">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="username" class="control-label">Desired Username</label>
								<input class="form-control form-control-sm" name="username" type="text" id="username">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="email" class="control-label">Email Address</label>
								<input class="form-control form-control-sm" name="email" type="text" id="email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<div class="form-group">
								<label for="gender" class="control-label">Gender</label>
								<select class="form-control form-control-sm" id="gender" name="gender">
									<option value="" selected="selected"></option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="contact_number" class="control-label">Contact Number</label>
								<input class="form-control form-control-sm" placeholder="eg. 09233887588" name="contact_number" type="text" id="contact_number">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="password" class="control-label">Desired Password</label>
								<input class="form-control form-control-sm" name="password" type="password" value="" id="password">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="password_confirmation" class="control-label">Password, Again</label>
								<input class="form-control form-control-sm" name="password_confirmation" type="password" value="" id="password_confirmation">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Sign up!</button>
				</div>
			</form>
		</div>
	</div>
</div> -->