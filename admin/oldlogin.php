<?php 
session_start();
 if($_POST){
 	// echo "<pre>"; print_r($_POST); echo "</pre>";
 	$email = $_POST['email'];
 	$pass = md5($_POST['password']);

 	include '../config.php';

 	$conf = new Config();
	$conf->dbconnect();
	$conn = $conf->connection();

	$sql = "select email,password,name from users where email = '".$email."' AND password ='".$pass."'";
	// echo $sql; exit;
	$res = mysqli_query($conn, $sql);
	// echo "<pre>"; print_r($res); exit;
	$row = mysqli_fetch_assoc($res);
	if($res->num_rows >0 ){
		$_SESSION['email'] = $row['email'];
		$_SESSION['username'] = $row['name'];
		header("Location: dashboard.php");
	}else{
		header("Location: login.php");
	}

 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
</head>
<body>
	<div class="d-flex p-2">
		<form action="" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="text" class="form-control"  placeholder="Enter email" name="email">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" placeholder="Password" />
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<script type="text/javascript">
		
	</script>
</body>
</html>