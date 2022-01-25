<?php
		$host = "localhost"; $user = "root"; $pass = ""; $db = "jaka";	
		$conn = mysqli_connect($host, $user, $pass, $db);
		if(isset($_POST['delete']))
			echo $userid = $_POST['id'];
			{
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			else
			{
				$sql = "delete from asset_transmittal where asset_transmittal_id = '$userid'";
			if ($conn->query($sql) === TRUE)
			{
				
			} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}	
		}
		
		header("Location:transmittal.php");
?>

