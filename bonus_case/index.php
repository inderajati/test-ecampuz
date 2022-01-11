<?php include('login.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/main.css">
</head>
<body class="container">
	<form method="post" action="homepage.php" id="login-form">
		<fieldset>
			<label class="form-title">Login</label>
			<!-- Email field -->
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<input type="text" class="form-control" name="username" id="username" placeholder="Username"
					required>
				</div>
			</div>
			<!-- Password field -->
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<input type="password" class="form-control" name="password" id="password" placeholder="Password"
					required>
				</div>
			</div>
			<!-- Login button -->
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<button id="login" name="login" class="btn btn-primary btn-sm" type="submit">Login</button>		
				</div>
			</div>
		</fieldset>
	</form>

	<script type="text/javascript" src="assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>
</body>
</html>