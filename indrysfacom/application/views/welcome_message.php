<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>indrysfa App</title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/bootstrap/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<form action="<?= base_url('login') ?>" method="post">
					<h1>Welcome to Indry Sefviana Aplication</h1>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Input your name">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Input your password">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>