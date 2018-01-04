<?php
	session_start();
?>
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
			<li class="nosrh" style="float:right; padding-right:30px;"><a href="log in.php" id="lgin">PROFILE</a></li>
			<li class="nosrh" style="float: right; padding-right:30px;"><a href="ask.php" id="nav4">ASK US</a></li>
			<li class="nosrh" style="float: right; padding-right:30px;"><a href="nr.php" id="nav2">REVIEWS</a></li>
				<li class="nosrh" style="float: right; padding-right:30px;"><a href="elite.html" id="nav3">MOST ELITE</a></li>
				<li class="nosrh" style="float: right; padding-right:30px;"><a href="home trial.php" id="nav1">HOME</a></li>




				<li class="search" style="float:none;"><center><input type="search" placeholder="Search" id="nav-srh"></center></li>




		</ul>

        <div style="width:100%; height:80px; float:left">

        </div>

        <div style="width:100%; height:400px; float:left; background-color:white;">
							       <div class="slide"><img class="slider animate-fading" src="slideshow trial/GooglePixelslideshow.jpg"></div>
							       <div class="slide"><img class="slider animate-fading" src="slideshow trial/iPhone7slideshow.jpg"></div>
							       <div class="slide"><img class="slider animate-fading" src="slideshow trial/nexus6pslideshow.jpg"></div>
                                   <div class="slide"><img class="slider animate-fading" src="slideshow trial/S7-edge_S7slideshow.jpg"></div>
							       <div class="slide"><img class="slider animate-fading" src="slideshow trial/motozslideshow.jpg"></div>
							       <div class="slide"><img class="slider animate-fading" src="slideshow trial/LG-G5slideshow.jpg"></div>
                                   <div class="slide"><img class="slider animate-fading" src="slideshow trial/OnePlus-3slideshow.jpg"></div>

        </div>

        <div style="width:65%; height:300px; float:left; margin:3% 5% 5% 5%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.25);">
        </div>

        <div style="width:25%; height:300px; float:left; margin:5%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.25);">

        </div>

        <div style="width:95%; height:300px; float:left; margin:5%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.25);">
        </div>














</div>
<script>
	    var slideIndex = 0;
        showSlides();
	var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
     function showSlides()
 {
    var i;
    var slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++)
         {
         	slides[i].style.display = "none";
         }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
	slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000);


}
</script>
<script src="common.js"></script>

</body>
</html>
