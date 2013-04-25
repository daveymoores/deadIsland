
var init = function () {
    attach_main_nav_links();
};

var attach_main_nav_links = function () {

    setWidth = $(window).width();
    setHeight = $(window).height() ;

 
 $(".modalwindow_large").fancybox({
        padding: 0,
        speedIn: 900,
        speedOut: 300,
        scrolling: 'no',
        autoSize: false,
        autoScale: false,
        transitionIn: 'elastic',
        transitionOut: 'elastic'	
    });
	

	
 $(".modalwindow_small").fancybox({
        padding: 0,
        speedIn: 900,
        speedOut: 300,
		height: 450,
		width: 560,
        scrolling: 'no',
        autoSize: false,
        autoScale: false,
        transitionIn: 'elastic',
        transitionOut: 'elastic'	
    });
	
};

$(document).ready(function() {
	$(".modalwindow_large").fancybox();
	$(".modalwindow_small").fancybox();
});



/*parallax effect*/


// Detect if the browser is IE or not.
// If it is not IE, we assume that the browser is NS.
var IE = document.all?true:false

// If NS -- that is, !IE -- then set up for mouse capture
if (!IE) document.captureEvents(Event.MOUSEMOVE)

// Set-up to use getMouseXY function onMouseMove
document.onmousemove = getMouseXY;

// Temporary variables to hold mouse x-y pos.s
var tempX = 0;
var tempY = 0;

var objectArray = new Array();

fillObjectArray();
positionDivs();

function fillObjectArray()
{
	var parallaxFront_2_Div = document.getElementById("parallax_front_2");
	var parallaxFront_2_X = 350; //position div from half width of the page
	var parallaxFront_2_Y = 330;
	var parallaxFront_2_Factor = 0.4; //parallax shift factor, the bigger the value, the more it shift for parallax movement
	var parallaxFront_2_Array = new Array();
	parallaxFront_2_Array.push(parallaxFront_2_Div, parallaxFront_2_X, parallaxFront_2_Y, parallaxFront_2_Factor);
	objectArray.push(parallaxFront_2_Array);
	
	var parallaxFront_Div = document.getElementById("parallax_front");
	var parallaxFront_X = 750; //position div from half width of the page
	var parallaxFront_Y = 230;
	var parallaxFront_Factor = 0.2; //parallax shift factor, the bigger the value, the more it shift for parallax movement
	var parallaxFront_Array = new Array();
	parallaxFront_Array.push(parallaxFront_Div, parallaxFront_X, parallaxFront_Y, parallaxFront_Factor);
	objectArray.push(parallaxFront_Array);
	
	var parallaxMid_Div = document.getElementById("parallax_mid");
	var parallaxMid_X = -200;
	var parallaxMid_Y = 330;
	var parallaxMid_Factor = 0.1;
	var parallaxMid_Array = new Array();
	parallaxMid_Array.push(parallaxMid_Div, parallaxMid_X, parallaxMid_Y, parallaxMid_Factor);
	objectArray.push(parallaxMid_Array);
	
	
	$('#parallax_mid').fadeTo(3000,0.9);
	$('#parallax_front').fadeIn(2000);
	$('#parallax_front_2').fadeIn(1000);
	/*
	var parallaxBack_Div = document.getElementById("parallax-back");
	var parallaxBack_X = 0;
	var parallaxBack_Y = 0;
	var parallaxBack_Factor = 0.5;
	var parallaxBack_Array = new Array();
	parallaxBack_Array.push(parallaxBack_Div, parallaxBack_X, parallaxBack_Y, parallaxBack_Factor);
	objectArray.push(parallaxBack_Array);
	*/
	
}

// Main function to retrieve mouse x-y pos.s

function getMouseXY(e)
{
	  if (IE)
	  {
		// grab the x-y pos.s if browser is IE
		tempX = event.clientX + document.body.scrollLeft
		tempY = event.clientY + document.body.scrollTop
	  } 
	  else 
	  {
		// grab the x-y pos.s if browser is NS
		tempX = e.pageX
		tempY = e.pageY
	  }  
	  // catch possible negative values in NS4
	  if (tempX < 0){tempX = 0}
	  if (tempY < 0){tempY = 0}  
	  
	  moveDiv(tempX);
	  
	  return true
}

function moveDiv(tempX)
{	
	for (var i=0;i<objectArray.length;i++)
	{
		var yourDivPositionX = objectArray[i][3] * (0.5 * windowWidth - tempX) + objectArray[i][1];
		objectArray[i][0].style.left = yourDivPositionX + 'px';
		
		
	}
}

function positionDivs()
{
	for (var i=0;i<objectArray.length;i++)
	{
		objectArray[i][0].style.left = objectArray[i][1] + "px";
		objectArray[i][0].style.top = objectArray[i][2] + "px";
	}
}
