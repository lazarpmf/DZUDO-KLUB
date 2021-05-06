<?php

require 'connection.php';
session_start();

$newsID = $_GET['newsID'];
$comment = $_POST['comment'];
$userID = $_SESSION['UserID'];

$sql = "INSERT INTO comment (UserID, NewsID, Comment, CreatedComment) VALUES('$userID', '$newsID', '$comment', NOW())";
$result = mysqli_query($conn, $sql);

header('Location: ../singleNews.php?id='.$newsID);


?>