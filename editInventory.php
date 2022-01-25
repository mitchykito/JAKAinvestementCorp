<?php
		$host = "localhost"; $user = "root"; $pass = ""; $db = "jaka";	
		$conn = mysqli_connect($host, $user, $pass, $db);
		if(isset($_POST['update']))
			$tag_1 = $_POST['tag'];
			{
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			else
			{
				echo $tag = $_POST['assetTag'];
				$hardware = $_POST["hardware"];
				$snum = $_POST["sn"];
				$status = $_POST["status"];
				$sql = "update asset set tag = '$tag' , hardware = '$hardware' , snum = '$snum', stat = '$status' where tag = '$tag_1'";
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