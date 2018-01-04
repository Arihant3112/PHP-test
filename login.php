<?php
	session_start();
	include("conndb.php");
	$uname = $_REQUEST["uname"];
	$pass = $_REQUEST["pass"];
	$sql = "select * from user where uname='".$_REQUEST["uname"]."' and pass='".$_REQUEST["pass"]."';";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	if($row)
	{
		$_SESSION["user"]=$uname;
		header("Location:profilemain.php?uname=".$uname."&pass=".$pass);
	}
	else
	{
		header("Location:log in.php");
	}

?>