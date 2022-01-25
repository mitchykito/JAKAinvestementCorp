<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="Login.css">

</head>

<body>

	<div class="login-page">
		<div class="form">
			<h2>
				<center><img src="Picture1.png"></center>
			</h2>
			<form class="login-form" method="post">
				<label><b>Username</b></label>
				<input name="username" type="text" class="inputvalues" placeholder="Enter Username" required>
				<label><b>Password</b></label>
				<input name="password" type="password" class="inputvalues" placeholder="Enter Password" required>
				<input name="login" type="submit" value="Login">
			</form>

			<?php
			if (isset($_POST['login'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				if (preg_match("/[^a-zA-Z0-9]+/", $username)) {
					echo 'Invalid username and/or password';
				} else if (preg_match("/[^a-zA-Z0-9]+/", $password)) {
					echo 'Invalid username and/or password';
				} else {
					$query = "select * from users WHERE username='$username' AND password='$password'";
					$query_run = mysqli_query($con, $query);
					if (mysqli_num_rows($query_run) > 0) {
						$row = mysqli_fetch_assoc($query_run);
						$_SESSION['username'] = $row['username'];
						$_SESSION['fullname'] = $row['name'];
						$_SESSION['logged'] = true;
						header('location:Inventory.php');
					} else {
						echo '<script type="text/javascript"> alert("Invalid username and/or password!") </script>';
					}
				}
			} 
			?>
		</div>
	</div>

</body>
</html>