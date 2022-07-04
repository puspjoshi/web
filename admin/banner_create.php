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

$name = $_FILES['profile']['name'];
$tmp_name = $_FILES['profile']['tmp_name'];

$destination = "../img/banner/";

move_uploaded_file($_FILES['profile']['tmp_name'], $destination.$name);


// echo "<pre>"; print_r($_FILES); exit;

$sql = "insert into banner (`heading`,`status`,`image`) values ('".$heading."','".$status."','".$name."')";
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
