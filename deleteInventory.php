<?php
		$host = "localhost"; $user = "root"; $pass = ""; $db = "jaka";	
		$conn = mysqli_connect($host, $user, $pass, $db);
		if(isset($_POST['delete']))
			echo $tag_1 = $_POST['tag'];
			{
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			else
			{
				$sql = "delete from asset where tag = '$tag_1'";
			if ($conn->query($sql) === TRUE)
			{
				
			} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}	
		}
		
		header("Location:Inventory.php");
?>

