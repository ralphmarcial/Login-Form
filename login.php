<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>MAMUT University</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="logo">
  <img src="team logo.png" width="150">
</div>
  <div class="header">
  	<h2>L O G I N</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" placeholder="Enter your username" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" placeholder="Enter your password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Don't have an account? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>