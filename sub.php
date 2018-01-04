<?php
	
	include("conndb.php");
	$sql = "insert into subscribe values('".$_REQUEST["email"]."');";
	mysqli_query($con,$sql);
	
	header("Location:home trial.php");
?>