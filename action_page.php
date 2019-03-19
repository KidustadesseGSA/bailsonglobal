<?php 
	$to = $_POST["Name"];
	$subject=$_POST["Email"];
	$message=$_POST["Message"];

	mail($to,$subject,$message); 


?>
