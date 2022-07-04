<?php 
session_start();
	if(!isset($_SESSION['email']))
		header("Location: login.php");

include '../config.php';

$conf = new Config();
$conf->dbconnect();
$conn = $conf->connection();
$res = false;

$heading = $_POST['banner'];
$status = $_POST['status'];

$sql = "insert into banner (`heading`,`status`) values ('".$heading."','".$status."')";
$res = mysqli_query($conn, $sql);
if($res){
	header('Location:banner_add.php');
	$result = "success";
}else{
	$result = "FAil";
	header('Location:banner_add.php');
}

echo $result;


exit; 

?>
