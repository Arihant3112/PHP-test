
<?php
	
	include("conndb.php");
	$sql = "insert into user values('".$_REQUEST["uname"]."','".$_REQUEST["pass"]."','".$_REQUEST["fname"]."','".$_REQUEST["lname"]."','".$_REQUEST["email"]."','".$_REQUEST["contact"]."');";
	mysqli_query($con,$sql);
	mysqli_close($con);
	header("Location:log in.php");
?>

