<?php
  // echo "<pre>"; print_r($_POST); echo "</pre>";
  $number = $_POST['number'];
  if($number == ""){
  	echo "number required";
  	exit;
  }
  $mul = "";
  for($i = 1; $i <= 10; $i++){

    //$mul .= $number ." * ".$i ." = ". $number*$i . "<br />";
  	$mul = $number ."*". $i ."=". $number * $i ." <br>";
  	echo $mul;
  }

  //echo $mul;
?>