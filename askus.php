<?php
	
	include("conndb.php");
	$sql = "insert into askus values('".$_REQUEST["name"]."','".$_REQUEST["email"]."','".$_REQUEST["subject"]."','".$_REQUEST["message"]."');";
	mysqli_query($con,$sql);

	header("Location:home trial.php");
?>