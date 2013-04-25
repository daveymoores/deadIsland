
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Characters</title>
	<link rel="stylesheet" type="text/css" href="js/jquery.fancybox.css?v=2.0.6" media="screen" />
	<link href="css/fancybox_overide_styles.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<div class="modal_characters">
		<div class="tabs" id="tab_1">
			<img src="img/character-heading-1.gif" width="790" height="153" alt="Dead Island Riptide brings back the explosive gameplay..."><br>
			<img src="img/character-heading-2.gif" width="207" height="42" alt=" "><br>
			<img src="img/character-selection.jpg" alt="Select a character" width="439" height="202" usemap="#Map">
			<map name="Map">
				<area shape="rect" coords="351,4,432,196" href="javascript:void(0);" onclick="$('.tabs').hide(); $('#tab_6').fadeIn();">
				<area shape="rect" coords="270,5,351,197" href="javascript:void(0);" onclick="$('.tabs').hide(); $('#tab_5').fadeIn();">
				<area shape="rect" coords="187,4,268,196" href="javascript:void(0);" onclick="$('.tabs').hide(); $('#tab_4').fadeIn();">
				<area shape="rect" coords="101,4,182,196" href="javascript:void(0);" onclick="$('.tabs').hide(); $('#tab_3').fadeIn();">
				<area shape="rect" coords="16,4,97,196"   href="javascript:void(0);" onclick="$('.tabs').hide(); $('#tab_2').fadeIn();">
			</map>
		</div>
		<div class="tabs" id="tab_2">
			<img src="img/characters-1.jpg" alt="Character" width="800" height="530" usemap="#Map_back">		
		</div>
		<div class="tabs" id="tab_3">
			<img src="img/characters-2.jpg" width="800" height="530" alt="Character" usemap="#Map_back">
		</div>
		<div class="tabs" id="tab_4">
			<img src="img/characters-3.jpg" width="800" height="530" alt="Character" usemap="#Map_back">
		</div>
		<div class="tabs" id="tab_5">
			<img src="img/characters-4.jpg" width="800" height="530" alt="Character" usemap="#Map_back">
		</div>
		<div class="tabs" id="tab_6">
			<img src="img/characters-5.jpg" width="800" height="530" alt="Character" usemap="#Map_back">
		</div>
</div>

<map name="Map_back">
				<area shape="rect" coords="686,3,798,44"  href="javascript:void(0);" onclick="$('.tabs').hide(); $('#tab_1').fadeIn();">
</map>
			
<script type="text/javascript" src="js/libs/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
	$('.tabs').hide(); 	$('#tab_1').show(); 
	
</script>
</body>
</html>




