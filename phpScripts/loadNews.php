<?php

require 'connection.php';
$json = array();

$sql="SELECT * FROM news N inner join images i on i.ImageID = n.ImageID";
$result=mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
	$json[] = $row;
}

echo json_encode($json);


?>