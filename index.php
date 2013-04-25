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

<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Dead Island Riptide</title>
	
	<meta name="description" content="Dead Island Riptide - powered by IGN">
	<meta name="author" content="IGN UK">
	<meta name="copyright" content="2013 IGN">
	<meta name="keywords" content="Dead Island Riptide, playstation, psn, ign">
	<meta http-equiv="content-language" content="en-UK">
	<meta name="robots" content="all,index,follow"> 
	<meta name="dc.date.modified" content="2013-03-25">
	<meta name="description" content="Get all Dead Island Riptide info you need from the IGN UK Microsite!">
	<meta name="author" content="IGN UK">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
	
	
	<meta property="og:title" content="Dead Island Riptide - IGN UK"/>
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Everything you need to know about Dead Island Riptide"/>
    <meta property="og:url" content="http://uk-microsites.ign.com/deadislandriptide/index.php"/>
    <meta property="og:image" content="http://uk-microsites.ign.com/deadislandriptide/img/social.png"/>
	<meta property="fb:admins" content="546507370">
	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon-114x114-precomposed.png">

	<!-- Add jQuery library -->
	<script type="text/javascript" src="js/libs/jquery-1.9.0.min.js"></script>
	
	<link rel="stylesheet" href="css/boilerplate.css">
	<link rel="stylesheet" href="css/styles.css">
	
  	<link rel="stylesheet" type="text/css" href="js/jquery.fancybox.css?v=2.0.6" media="screen" />
    <link href="css/fancybox_overide_styles.css" rel="stylesheet" type="text/css" />
	
    <script src="js/libs/modernizr.custom.49532.js" type="text/javascript"></script>
	
    <script type="text/javascript">
		<!--parallax related-->
		var verticalPosition;
		var verticalPositionBefore;
		var windowWidth = 1024;
		var windowHeight;
	</script>

	<!--[if !IE 7]>
		<style type="text/css">
			.container {display:table;height:100%}
		</style>
	<![endif]-->
	
	<!--[if gt IE 7]> 
		<style type="text/css">.fancybox-skin {border: none !important;}</style>
	<![endif]-->
	
</head>

<body>


<div class="bgcontainerwrap">
	<div id="bgcontainer">
			<!--<div id="parallax-back" style="left: 0px; top: 0px; "></div>-->
			<div id="parallax_mid"> </div>
			<div id="parallax_front"> </div>
			<div id="parallax_front_2"> </div>
	</div>
	<div id="container">
		<header class="mainheader">
			<section class="ignheader">
				<a href="http://uk.ign.com" target="_blank" onClick="_gaq.push(['_trackEvent', 'Riptide_headerbar', 'Riptide_Click', 'IGN logo']);"><img src="img/ign-logo.png" width="85" height="30" alt="IGN"></a>
				
				<!---->
				<aside class="social">
					
					<div class="socialbtn-fb">
						<div class="fb-like" data-href="http://uk-microsites.ign.com/deadislandriptide/index.php" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
					</div>
					<div class="socialbtn-tw">
						<a href="https://twitter.com/share" class="twitter-share-button" data-text="Everything you need to know about Dead Island Riptide!" data-via="IGNUK">Tweet</a>
					</div>
					<div class="socialbtn-gp"><div class="g-plusone" data-size="medium" data-annotation="bubble" data-href="http://uk-microsites.ign.com/deadislandriptide/"></div></div>
                </aside>
				
				
			</section>
			<nav class="mainnav">
				<ul>
				
					<li class="transition_opacity"><a href="gallery-and-trailers.php" class="modalwindow_large fancybox.iframe" onClick="_gaq.push(['_trackEvent', 'Riptide_Topnav', 'Riptide_Click', 'Gallery and Trailers']);"><img src="img/nav-gallery-and-trailers.png" alt="Gallery and Trailers"></a>
					</li>
					
					<li class="transition_opacity"><a href="story.php" class="modalwindow_large fancybox.iframe"  onClick="_gaq.push(['_trackEvent', 'Riptide_Topnav', 'Riptide_Click', 'Story']);"><img src="img/nav-story.png" alt="Story"></a>
					</li>
					
					<li class="transition_opacity"><a href="characters.php"  class="modalwindow_large fancybox.iframe" onClick="_gaq.push(['_trackEvent', 'Riptide_Topnav', 'Riptide_Click', 'Characters']);"><img src="img/nav-characters.png" alt="Characters"></a>
					</li>
					
					<li class="transition_opacity"><a href="competition.php" target="_blank" class="modalwindow_small fancybox.iframe" onClick="_gaq.push(['_trackEvent', 'Riptide_Topnav', 'Riptide_Click', 'Competition']);"><img src="img/nav-competition.png" alt="Competition"></a>
					</li>
					
				</ul>
			</nav>
		</header><!--end main header-->
		
		<div class="mainwrap">
			<section class="mainsection">
				<hgroup>
					<h1 class="imagereplace">Dead Island Riptide</h1>
					</hgroup>
				<a href="lead-trailer.php" id="playbutton" class="modalwindow_large fancybox.iframe playvideo imagereplace transition_opacity" onClick="_gaq.push(['_trackEvent', 'Riptide_Trailer', 'Riptide_Click', 'Play Trailer']);">PLAY TRAILER</a>
			</section><!--end main centre section-->
		</div><!--end main section wrap-->
	</div><!-- end container-->
		
	<footer class="mainfooter">
		
		<div class="featurewrap">
			<section class="features">
				<div class="feature_1  transition_opacity">
					<img src="img/bottom-panels-feature_1.png" alt="preorder now at Amazon" width="450" height="165" usemap="#Map">
					<map name="Map">
						<area shape="rect" coords="360,97,418,146" href="http://www.amazon.co.uk/dp/B008YA0M3S" target="_blank" onClick="_gaq.push(['_trackEvent', 'Riptide_Preorder', 'Riptide_Click', 'PC']);">
						<area shape="rect" coords="228,98,348,144" href="http://www.amazon.co.uk/dp/B008YA0M38" target="_blank"  onClick="_gaq.push(['_trackEvent', 'Riptide_Preorder', 'Riptide_Click', 'Xbox 360']);">
						<area shape="rect" coords="161,97,219,146" href="http://www.amazon.co.uk/dp/B008YA0M2Y" target="_blank" onClick="_gaq.push(['_trackEvent', 'Riptide_Preorder', 'Riptide_Click', 'PS3']);">
					</map>
				</div>
				<div class="competition transition_opacity">
					<a href="competition.php" class="modalwindow_small fancybox.iframe" onClick="_gaq.push(['_trackEvent', 'Riptide_competition', 'Riptide_Click', 'Enter here']);"><img src="img/bottom-panels-competition.png" alt="Competition" width="450" height="165"></a>
				</div>
			</section><!--end feature section-->	
		</div><!--end feature section wrapper-->
		
		<article class="colophon">
			<div class="wrap">
				<div class="producers">
					<img src="img/producer-logos.jpg" width="590" height="48" alt="Producers">	
				</div>
				<div class="filminfo">
					<p>&copy; Copyright 2013 and Published by Koch Media GmbH. Deep Silver is a division of Koch Media GmbH, Gewerbegebiet 1, 6604 H&ouml;fen, Austria. Developed 2012, Techland Sp. z o.o., Poland. 
&copy; Copyright 2012, Chrome Engine, Techland Sp. z o.o.  All rights reserved.</p>
				</div>
				<div class="clearfloat"></div>
			</div>
			
		</article>
		
		<article class="ignsignoff ">
			<div class="wrap">
				<div class="igncredits">
					<a href="http://www.ign.com" class="ignlink transition_opacity"><img src="img/ign-footer.jpg" width="65" height="52" alt="IGN Entertainment"></a>
					<p>Copyright 2013 <strong>IGN Entertainment UK, Inc.</strong></p>
					<p><a href="http://corp.ign.com/privacy.html">Privacy Policy</a> | <a href="http://corp.ign.com/user-agreement.html">User Agreement</a></p>
				</div>
				<div class="footerlinks">
					<p><a href="http://uk.corp.ign.com/">About us</a> | <a href="http://uk.corp.ign.com/">Contact us</a> | <a href="http://corp.ign.com/feeds.html">RSS Feeds</a></p>
				</div>
			</div>
		</article>

	</footer><!--end mainfooter-->



	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="js/source/jquery.fancybox.css?v=2.1.4" media="screen" />

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/script.js" ></script>

	  <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=147333065402611";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>


	<!--twitter-->
	
	<script type="text/javascript">

	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
		/**/
	</script>
	<!--google plus one-->						
	<script type="text/javascript">
	
	window.___gcfg={lang:"en-GB"};(function(){var a=document.createElement("script");a.type="text/javascript";a.async=true;a.src="https://apis.google.com/js/plusone.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();
	/**/
	</script>
	
	
	<!--Google analytics-->
	<script>var _gaq=[["_setAccount","UA-15279170-1"],["_trackPageview","/deadislandriptide"]];(function(e,a){var c=e.createElement(a),b=e.getElementsByTagName(a)[0];c.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";b.parentNode.insertBefore(c,b)}(document,"script"));</script>
		
	<!-- Begin comScore Tag -->
	<script>
	  var _comscore = _comscore || [];
	  _comscore.push({ c1: "2", c2: "3000068" });
	  (function() {
		var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
		s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
		el.parentNode.insertBefore(s, el);
	  })();
	</script>
	<noscript>
	  <img src="http://b.scorecardresearch.com/p?c1=2&c2=3000068&cv=2.0&cj=1" />
	</noscript>
	<!-- End comScore Tag -->

</body>
</html>
