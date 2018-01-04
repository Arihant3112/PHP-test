<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PROFILE</title>
<script src="jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="common.js"></script>

<link href="historymap.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="onload()">

<div style="width:100%; height:100%; clear:left;" id="myDiv">



  <ul class="navbar" style="width:100%; height:50px; float:left; ">
<!--<li class="nosrh" style="float:left; margin-left: 200px; font-family: Segoe UI Light"><a href="home trial.php" id="navlogo">ELITE TECH</a></li>-->
      <li class="nosrh" style="float:right; padding-right: 385px;" onClick="search()"><a href="#search" id="navsrch" onsearch="navsrh()">SEARCH</a></li>
      <li class="nosrh" style="float:right; padding-right:30px;"><a href="log in.php" class="active" id="lgin">LOGOUT</a></li>
      <li class="nosrh" style="float: right; padding-right:30px;"><a href="ask.php" id="nav4">ASK US</a></li>
      <li class="nosrh" style="float: right; padding-right:30px;"><a href="nr.php" id="nav2">REVIEWS</a></li>
        <li class="nosrh" style="float: right; padding-right:30px;"><a href="elite.html" id="nav3">MOST ELITE</a></li>
        <li class="nosrh" style="float: right; padding-right:30px;"><a href="home trial.php" id="nav1">HOME</a></li>




        <li class="search" style="float:none;"><center><input type="search" placeholder="Search" id="nav-srh"></center></li>




    </ul>

        <div style="width:100%; height:80px; float:left">

        </div>

        <center>
        <div style="width:100%; height:500px; float:left">
        	<font size="40px" face="Segoe UI Light" color="#1470FF">Hello , <?php  echo $_REQUEST["uname"]; ?><br><br><br> </font>

            <font size="40px" face="Segoe UI Light" color="#606060">Welcome To EliteTech</font>
        </div>
        </center>





</div>
<script src="common.js"></script>

</body>
</html>
