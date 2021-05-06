<?php
	require 'connection.php';	
	if(isset($_GET['id'])){		
		$id = $_GET['id'];

		$sql = "DELETE FROM news WHERE NewsID=".$id;
		$result = mysqli_query($conn, $sql);
		
		echo "<script> alert('Uspješno ste izbrisali podatke.');  window.location.replace(\"../news.php\"); </script>";		
	}	
?>