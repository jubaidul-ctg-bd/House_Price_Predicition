

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body class="container">
  

	<div class="bg-dark">
	
		<div class="header">
			<h2>Register</h2>
		</div>
		<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
			<label>Name</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
			<label>Email Address</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
			<label>Contact No</label>
			<input type="text" name="contact">
			</div>
			<div class="input-group">
			<label>Address</label>
			<input type="text" name="contact">
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
			</div>
			<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
			</div>
			<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
			</div>
			<p>
				Already have an account <a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
       

</body>
</html>