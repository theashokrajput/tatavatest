<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="<?php echo base_url() ?>img/logo.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">User Add</h4>
							<form method="POST" class="my-login-validation" action="<?php echo base_url() ?>home/register/ ">
								
								<div class="form-group">
									<label for="first_name">First name</label>
									<input id="first_name" type="first_name" class="form-control" name="first_name" value=" " required autofocus>
									<div class="invalid-feedback">
									<?php echo form_error('first_name'); ?>
									</div>
								</div>


								<div class="form-group">
									<label for="last_name">Last Name</label> 
									<input type="text"  id="last_name" class="form-control" name="last_name" >
									<div class="invalid-feedback">
									<?php echo form_error('last_name'); ?>
									</div>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" value=" " required autofocus>
									<div class="invalid-feedback">
									<?php echo form_error('email'); ?>

									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password"  required autofocus>
									<div class="invalid-feedback">
									<?php echo form_error('password'); ?>

									</div>
								</div>
							 
								<div class="form-group">
									<label for="dob">dob</label>
									<input id="dob" type="date" class="form-control" name="dob" value=" " required autofocus>
									<div class="invalid-feedback">
									<?php echo form_error('dob'); ?>

									</div>
								</div>
							 
								<div class="form-group">
									<label for="user_type">Role</label>
									<select id="user_type"   class="form-control" name="user_type"  required >
										<option value="0">user</option>
										<option value="1">admin</option>
									</select>
									<div class="invalid-feedback">
									<?php echo form_error('user_type'); ?>

									</div>
								</div>
							 

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Add
									</button>
								</div>
								 
							</form>
						</div>
					</div>
					
					<div class="footer">
						Copyright &copy; 2021 &mdash; Ashok Singh Rajput
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?php echo base_url() ?>js/my-login.js"></script>
</body>
</html>
