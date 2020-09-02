<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body >
  <div class="row">
        <div class="col-lg-5 m-auto">
            <div class="card mt-5 bg-dark">
                <div class="card-title text-center mt-3">
                        <img src="img/team.png" width="150px" height="150px">
                </div>
                <div class="card-body">
					<form method="post" action="test.php">
                    <?php include('errors.php'); ?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" >
                                    <i class="fa fa-user fa 2x"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control py-4" name="username">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" >
                                    <i class="fa fa-lock fa 2x"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control py-4" name="password">
                        </div>
						<button class="btn btn-success"  name="login_user">Login Now</button>
                        <input type="button" value="Sign Up" class="btn btn-success"  
                        onClick="document.location.href='register.php'" />
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>