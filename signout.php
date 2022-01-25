<?php
	session_start();
?>
<html>
<head>
<title>Sign out</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
	<?php
		if(isset($_SESSION['logged']))
		{
			session_destroy();
			header('location:index.php');
		}
	?>
</body>
</html>