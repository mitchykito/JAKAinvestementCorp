<?php
		$host = "localhost"; $user = "root"; $pass = ""; $db = "jaka";	
		$conn = mysqli_connect($host, $user, $pass, $db);
		if(isset($_POST['delete']))
			echo $userid = $_POST['userid'];
			{
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			else
			{
				$sql = "delete from users where userid = '$userid'";
			if ($conn->query($sql) === TRUE)
			{
				
			} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}	
		}
		
		header("Location:users.php");
?>

