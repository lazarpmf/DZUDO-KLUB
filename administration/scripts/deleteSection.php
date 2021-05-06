<?php
	require 'connection.php';	
	if(isset($_GET['id'])){		
		$id = $_GET['id'];

		$sql = "DELETE FROM sections WHERE SectionID=".$id;
		$result = mysqli_query($conn, $sql);
		
		echo "<script> alert('Uspješno ste izbrisali podatke.');  window.location.replace(\"../sections.php\"); </script>";		
	}	
?>