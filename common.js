

function search()
{	
	$(".nosrh").css("display","none");
	$(".search").fadeIn("slow").css("display","block");
	$("#nav-srh").focus().select();
}


$("#nav-srh").focusout(function() 
{
    $(".search").fadeOut("slow").css("display","none");
	$(".nosrh").css("display","block");
	$("#nav-srh").html("value","none");
})

function navisearch() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("nav-srh");
    filter = input.value.toUpperCase();
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}


function askmsg()
{
	$(".askmsg").css("color","black");
}


$("textarea.ask").focusout(function() 
{
    $(".askmsg").css("color","#B0B0B0");
})

$(document).ready(function()
{
	var slideIndex = 0;
	showSlides();

	function showSlides()
	{
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
		   slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex> slides.length) {slideIndex = 1}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" slideactive", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " slideactive";
		setTimeout(showSlides, 4000); // Change image every 2 seconds
	}
    
});

function hover1()
{
	$(".imgdisp1").css("display","block");
	$(".imgdisp2").css("display","none");
	$(".imgdisp3").css("display","none");
}

function hover2()
{
	$(".imgdisp1").css("display","none");
	$(".imgdisp2").css("display","block");
	$(".imgdisp3").css("display","none");
}

function hover3()
{
	$(".imgdisp1").css("display","none");
	$(".imgdisp2").css("display","none");
	$(".imgdisp3").css("display","block");
}

