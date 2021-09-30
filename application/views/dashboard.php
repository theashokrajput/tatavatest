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
			<a href="<?php echo base_url() ?>home/logout">logout</a>
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
				<div class="brand">
						<img src="<?php echo base_url() ?>img/logo.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Blog Edit</h4>
							<a href="<?php echo base_url()?>home/addblog">Add</a>
					<table>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
						<?php if(!empty($bloglist)){ foreach ($bloglist as $key => $each_blog) { ?>
							<tr>
								<td><?php echo $each_blog->title ?></td>
								<td><?php echo $each_blog->deccription ?></td>
								<td><img src="<?php echo base_url() ?>img/<?php echo $each_blog->image ?>"></td>
								<td>
									<a href="<?php echo base_url() ?>home/edit_blog/<?php echo $each_blog->id  ?>">Edit</a>
									<a href="<?php echo base_url() ?>home/deleteBlog/<?php echo $each_blog->id  ?>">Delete</a>
								</td>
							</tr>
						<?php } } ?>
					</table>
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
