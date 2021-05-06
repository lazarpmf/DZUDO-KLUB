<?php

require 'connection.php';

$newsID = $_GET['news'];
$commentID = $_GET['commentID'];


$sql = "DELETE FROM comment WHERE commentID ='$commentID'";
$result = mysqli_query($conn, $sql);
//echo $sql;
header('Location: ../singleNews.php?id='.$newsID);


?>