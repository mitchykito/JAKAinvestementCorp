<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "jaka";
$conn = mysqli_connect($host, $user, $pass, $db);
if (isset($_POST['update']))
	$userid = $_POST['userid']; {
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	} else {
		echo
		$userid = $_POST['userid'];
		$name = $_POST['name'];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$department = $_POST["department"];
		$phone = $_POST["phone"];
		$sql = "update users set name = '$name', username = '$username', password = '$password', department = '$department' , phone = '$phone' where userid = '$userid'";
		if ($conn->query($sql) === TRUE) {
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}

header("Location:users.php");
