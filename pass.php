<?php

/*checks whether cookie has been set - 
	- if cookie not set redirect to form page
	- if cookie under age redirect to fail page
	- if over age display welcome message
	*/
	
if (isset($_COOKIE["age"]))
	{
	if ($_COOKIE["age"] == "under") {
 		header('Location: form.php');
	}
	
	/*else if ($_COOKIE["age"] == "over")
	{
		echo "welcome to the over 18 page";
	}*/	}		
	else  header('Location: form.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pass Page</title>

</head>

<body>

<p>welcome to the over 18 page</p>

</body>
</html>