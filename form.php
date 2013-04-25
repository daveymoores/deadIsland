<?php
	$minAge = 18; //
	$minAge *= 3600*24*365.25;  // $minAge in seconds
	
	if (isset($_COOKIE["age"])) 
		{
		if ($_COOKIE["age"] == "under") 
			{
				header('Location:fail.php');
			}
		
		else if ($_COOKIE["age"] == "over")
			{
			header('Location:index.php');
		}
		
		}	
	$html = <<< OET
	
<!doctype html>

<html lang="en"> 

<head>
	<meta charset="utf-8">
	<title>Dead Island Riptide</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon-114x114-precomposed.png">
	<!-- Add jQuery library -->
	<script type="text/javascript" src="js/libs/jquery-1.9.0.min.js"></script>	
	<link rel="stylesheet" href="css/boilerplate.css">
	<link rel="stylesheet" href="css/styles.css">
    <script src="js/libs/modernizr.custom.49532.js" type="text/javascript"></script>

</head>

<body>


<div class="bgcontainerwrap">
	<div id="bgcontainer">
	</div>
	<div id="container">
		<header class="mainheader">
			<section class="ignheader">
				<a href="http://uk.ign.com" target="_blank"><img src="img/ign-logo.png" width="85" height="30" alt="IGN"></a>	
			</section>
			
		</header>
		
		<div class="mainwrap">
			<section class="mainsection">
			<div class="dobform">	
			<form action="#" method="post" onsubmit="return validateForm();" name="age_check" onkeypress="return numbersOnly(event);">
			Enter your Date of Birth: <br/><br/>
			   
				<input type="text" name="day" value="" maxlength="2" type="number" style="width:25px" placeholder="DD" />
				&nbsp;&nbsp;
				<input type="text" name="month" value="" maxlength="2" style="width:25px" placeholder="MM" />
				&nbsp;&nbsp;
				<input type="text" name="year" value="" maxlength="4" style="width:40px" placeholder="YYYY"/> 
				<br/>
				<br/>
				<input type="submit" name="submit" value="Verify Age" class="dobformbutton" />
				
			  </form>
			  </div>
OET;
			
if(isset($_POST['submit'])){

$day = ($_POST['day']);
$month = ($_POST['month']);
$year = ($_POST['year']);
$dob = ($day.".".$month.".".$year);
$birth_date = strtotime($dob);
$now = strtotime("now");
$age = $now - $birth_date; // age is in seconds

	if($age > $minAge)
		{	
		include ('age_over.php'); /*sets the over age cookie*/
		header('Location:index.php');        
		}
		
	else if ($age < $minAge)			
		header('Location: fail.php');
		
} else
{
	echo $html;
}
?>


			</section><!--end main centre section-->
		</div><!--end main section wrap-->
	</div><!-- end container-->
		
		
<script type="text/javascript">
/*disable keyboard entry function*/
function numbersOnly(evt)
 {	 
	 evt = (evt) ? evt : event;
	 var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
		   ((evt.which) ? evt.which : 0));
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {          
		   return false;		
}
return true;
	}
/*input validation checks date is sensible or submit will return false:
- all form fields must contain value
- day must be < 32
- month < 13
- year > 1900
*/	
function validateForm() {
	var day = document.forms["age_check"]["day"].value;
	var month = document.forms["age_check"]["month"].value;
	var year = document.forms["age_check"]["year"].value;
	var submitButton = document.forms["age_check"]["submit"].value;
	if (day==null || day=="" || day > 31) 
	{
		window.alert("Enter correct value"); /*delete to remove validation alert*/
		return false;		
	}
	
	else if  (month==null || month=="" || month > 12) 
	{
		window.alert("Enter correct value"); /*delete to remove validation alert*/
		return false;
		
	}
	
	else if  (year==null || year=="" || year < 1900) 
	{
		window.alert("Enter correct value"); /*delete to remove validation alert*/
		return false;
		
	}
}

</script>

<script type="text/javascript">
	$(window).resize(function(){
		$('.dobform').css({
		position:'absolute',
		left: ($(window).width() - $('.dobform').outerWidth())/2,
		top: ($(window).height() - $('.dobform').outerHeight())/2 - 80 });
	});
	
	$(window).resize();
</script>	
</body>
</html>




