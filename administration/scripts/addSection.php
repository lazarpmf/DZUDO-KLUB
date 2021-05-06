<?php	
	require 'connection.php';
	session_start();
	if(isset($_POST['addSection'])){		
		$name = $_POST['name'];
		$coach = $_POST['coach'];
		$terms = $_POST['terms'];
		$description = $_POST['description'];

		/*$authorID = $_SESSION['UserID'];*/		
		
		$sql = "INSERT INTO sections (Name, Coach, Terms, Description, Created)
				VALUES ('$name', '$coach', '$terms', '$description', now())";
		$result = mysqli_query($conn, $sql);
		
		echo "<script> alert('Uspješno ste unijeli podatke u bazu.');  window.location.replace(\"../sections.php\"); </script>";		
		//echo $sql;		
	}	
?>