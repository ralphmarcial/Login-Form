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
  	<h2>R E G I S T E R</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input id="email-label" type="email" placeholder="Email address" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" placeholder="Choose your password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" placeholder="Repeat your password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already have an account? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>