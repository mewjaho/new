
<?php 
session_start();
include('db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
</head>
<body style="  font-family: Mali, cursive;"class=" vh-100 d-flex  justify-content-center align-items-center">
	<div class="card mb-8">
		
		<div class="card-header bg-primary text-white">
			<h4>สมัครใช้งาน</h4>
		</div>
		<div class="card-body">
			<form action="reg.php" class="mb-3" method="POST">
                <?php include('errors.php');?>
				<div class="form-group">
				<img src="https://cdn-icons-png.flaticon.com/512/921/921059.png"
        width="150" />
        <p> Preterm Follow&nbsp;up</p>
        <div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username"  class="form-control" >
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email"  class="form-control" >
				</div>
				<div class="form-group">
					<label for="password_1">Password</label>
					<input type="password" name="password_1"  class="form-control" >
				</div>
                <div class="form-group">
					<label for="password_2">Confirm Password</label>
					<input type="password" name="password_2"  class="form-control">
				</div>
				<button 
				type="submit" 
				name="reg_user"
				class="btn btn-primary mt-3">Register</button></a><br>
                <p> Already a member?
                <a href ="doctor.php">Sign in</a></p>
			</form>

			
	</div>
  </body>
</html>
