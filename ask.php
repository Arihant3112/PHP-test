<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ASK US</title>
<script src="jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="common.js"></script>

<link href="historymap.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="onload()">

<div style="width:100%; height:700px; clear:left;" id="myDiv">



  <ul class="navbar" style="width:100%; height:50px; float:left; ">
<!--<li class="nosrh" style="float:left; margin-left: 200px; font-family: Segoe UI Light"><a href="home trial.php" id="navlogo">ELITE TECH</a></li>-->
      <li class="nosrh" style="float:right; padding-right: 385px;" onClick="search()"><a href="#search" id="navsrch" onsearch="navsrh()">SEARCH</a></li>
      <li class="nosrh" style="float:right; padding-right:30px;"><a href="log in.php" id="lgin">LOGIN / SIGN UP</a></li>
      <li class="nosrh" style="float: right; padding-right:30px;"><a href="ask.php" class="active"  id="nav4">ASK US</a></li>
      <li class="nosrh" style="float: right; padding-right:30px;"><a href="nr.php" id="nav2">REVIEWS</a></li>
        <li class="nosrh" style="float: right; padding-right:30px;"><a href="elite.html" id="nav3">MOST ELITE</a></li>
        <li class="nosrh" style="float: right; padding-right:30px;"><a href="home trial.php" id="nav1">HOME</a></li>




        <li class="search" style="float:none;"><center><input type="search" placeholder="Search" id="nav-srh"></center></li>




    </ul>

        <div style="width:100%; height:80px; float:left">

        </div>





        <div style="width:100%; height:50px; float:left" class="ask">
			<center><font face="Segoe UI Light" size="+3" color="#606060">ASK US</font> </center>
        </div>



 		<div style="width:100%; height:600px; float:left;" class="ask">


 <form action="askus.php" method="post">
 <pre>
 <center>
 <font face="Segoe UI Light">
 &nbsp;&nbsp;  <input type="text" name="name" class="ask" placeholder="NAME">&nbsp;&nbsp;

   <input type="email" name="email" class="ask" placeholder="EMAIL">

  &nbsp;&nbsp;<input type="text" name="subject" class="ask" placeholder="SUBJECT" style="width:61%;">

 </font></center><font face="Calibri light" style="padding-left:20%;" class="askmsg">MESSAGE</font><center><font face="Segoe UI Light">
 &nbsp;&nbsp;<textarea class="ask" name="message" onClick="askmsg()"></textarea>

 <button style="width:15%; margin-left:0%; cursor:pointer;" class="home-submit">SUBMIT</button>


 </font>
 </center>
 </pre>
 </form>


        </div>

</div>
<div style="width:100%; height:100px; background-color:#F1F1F1; padding-top:70px; float:left;">
        	<font face="Segoe UI Light"><center>Copyright &copy; 2016 EliteTech. All rights reserved.</center></font>
        </div>
<script src="common.js"></script>

</body>
</html>
