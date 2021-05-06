<?php
	require 'connection.php';

	if(isset($_POST['create'])){		
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$user = $_POST['user'];
		$password = $_POST['pass'];
		$dateOfBirth = $_POST['dateOfBirth'];
		
		$sql = "SELECT * FROM userpass WHERE Username='".$user."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		$numberOfRows = mysqli_num_rows($result);
		
		if ($numberOfRows > 0) {
			header('Location: ../signIn.php?username=taken');
		} else {
			$sql = "INSERT INTO userpass (FirstName, LastName, DateOfBirth, Username, Password, Created, IsAdmin) 
					VALUES ('$name', '$surname', '$dateOfBirth', '$user', '$password', now(), 0)";
			$result = mysqli_query($conn, $sql);
			header('Location: ../logIn.php');
		}		
		//echo $sql;		
	}	
?>