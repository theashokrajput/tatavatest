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
							<h4 class="card-title">Blog Add</h4>
							<form method="POST" class="my-login-validation" action="<?php echo base_url() ?>home/Add_blog/ ">
								<div class="form-group">
									<label for="title">Title</label>
									<input id="title" type="title" class="form-control" name="title" value=" " required autofocus>
									<div class="invalid-feedback">
									<?php echo form_error('title'); ?>

									</div>
								</div>


								<div class="form-group">
									<label for="deccription">Description</label>
 
									<textarea  id="deccription" class="form-control" name="deccription" > </textarea>
									<div class="invalid-feedback">
									<?php echo form_error('deccription'); ?>

									</div>
								</div>

								<div class="form-group">
									<label for="start_date">Start date</label>
									<input id="start_date" type="date" class="form-control" name="start_date" value=" " required autofocus>
									<div class="invalid-feedback">
									<?php echo form_error('start_date'); ?>

									</div>
								</div>

								<div class="form-group">
									<label for="end_date">End date</label>
									<input id="end_date" type="date" class="form-control" name="end_date" value=" " required autofocus>
									<div class="invalid-feedback">
									<?php echo form_error('end_date'); ?>

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
