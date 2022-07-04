<?php
include 'config.php';

$sql = "select * from name";

$conf = new Config();
$conf->dbconnect();
$conn = $conf->connection();

$res = mysqli_query($conn, $sql);


$i = 1;
while($row = mysqli_fetch_assoc($res)){
	echo "name".$i." : ".$row['name']. "<br>";
	$i++;
}

//echo "<pre>"; print_r($res); exit;
?>