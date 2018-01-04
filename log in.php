<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<script src="jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="common.js"></script>

<link href="historymap.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="onload()">

<div style="width:100%; height:800px; clear:left;" id="myDiv">



  <ul class="navbar" style="width:100%; height:50px; float:left; ">
<!--<li class="nosrh" style="float:left; margin-left: 200px; font-family: Segoe UI Light"><a href="home trial.php" id="navlogo">ELITE TECH</a></li>-->
      <li class="nosrh" style="float:right; padding-right: 385px;" onClick="search()"><a href="#search" id="navsrch" onsearch="navsrh()">SEARCH</a></li>
      <li class="nosrh" style="float:right; padding-right:30px;"><a href="log in.php" class="active" id="lgin">LOGIN / SIGN UP</a></li>
      <li class="nosrh" style="float: right; padding-right:30px;"><a href="ask.php" id="nav4">ASK US</a></li>
      <li class="nosrh" style="float: right; padding-right:30px;"><a href="nr.php" id="nav2">REVIEWS</a></li>
        <li class="nosrh" style="float: right; padding-right:30px;"><a href="elite.html" id="nav3">MOST ELITE</a></li>
        <li class="nosrh" style="float: right; padding-right:30px;"><a href="home trial.php" id="nav1">HOME</a></li>




        <li class="search" style="float:none;"><center><input type="search" placeholder="Search" id="nav-srh"></center></li>




    </ul>

        <div style="width:100%; height:80px; float:left">

        </div>


        <div style="width:100%; height:50px; float:left" class="login">
			<center><font face="Segoe UI Light" size="+3" color="#606060">LOGIN</font> </center>
        </div>

        <div style="width:100%; height:100px; float:left;" class="login">

 <center>
 <form method="post" action="login.php">
 <pre>

 <font face="Segoe UI Light" >
 &nbsp;&nbsp;<input type="text" name="uname" class="login" placeholder="Username"/>
 <br>
 &nbsp;&nbsp;<input type="password" name="pass" class="login" placeholder="Password"/>


 <button style="width:15%; margin-left:0%; cursor:pointer;" class="home-submit">LOGIN</button></font>
 </pre>
 </form>

     <font face="Segoe UI Light">Haven't registered yet?</font>
    <a href="sign up.php" ><button style="width:15%; margin-left:0%; cursor:pointer; float:inherit;" type="button" class="home-submit">SIGN UP</button></a>

</center>

        </div>




</div>

<div style="width:100%; height:90px; background-color:#F1F1F1; padding-top:70px; float:left;">
        	<font face="Segoe UI Light"><center>Copyright &copy; 2016 EliteTech. All rights reserved.</center></font>
        </div>



<script src="common.js"></script>

</body>
</html>
