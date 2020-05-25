<!-- register page -->
<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Czas</title>
    </head>
	<body>
	 <form method="post" action="index.php">
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
			<span class="error"><?php echo $emailError; ?></span>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
			<span class="error"><?php echo $passwordError; ?></span>
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="passwordR">
		</div>
		<div class="input-group">
			<label>Gender</label>
			<span class="error"><?php echo $genderError; ?></span><br>
			<label>Male</label>
			<input type="radio" value="kobiety" name="gender">
			<label>Female</label>
			<input type="radio" value="mezczyzni" name="gender">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="http://34.89.211.175/">Sign in</a>
		</p>
	</form>
	</body>
</html>
