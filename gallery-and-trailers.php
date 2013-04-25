
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="js/jquery.fancybox.css?v=2.0.6" media="screen" />
	<link href="css/fancybox_overide_styles.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
		.top_tabs{
			margin:0px 10px 0 0px;
		}
		.tab_trailer, .tab_gallery{
			display:inline-block;
			width:138px;
			height:43px;
			}
		.tab_trailer.off{
			background-image:url(img/gallery-trailers-2.jpg);
		}
		.tab_gallery.off{
			background-image:url(img/gallery-gallery-2.jpg);
		}
		.tab_trailer.on{
			background-image:url(img/gallery-trailers-1.jpg);
		}
		.tab_gallery.on{
			background-image:url(img/gallery-gallery-1.jpg);
		}
		
		.imagereplace{
			/*image replacement technique: http://www.zeldman.com/2012/03/01/replacing-the-9999px-hack-new-image-replacement*/
			text-indent:120%;
			white-space: nowrap;
			overflow: hidden;
		}
		#wrapper {
			position: absolute;
			width:780px;
			left: 0px;
			top: 45px;
		}
		#carousel-wrapper {
			padding-bottom: 0px;
			position: relative;
		}
		#carousel, #thumbs {
			overflow: hidden;
		}
		#carousel span, #carousel img,#thumbs a, #thumbs img  {
			display: block;
			float: left;
		}
		#carousel span, #carousel a,#thumbs span, #thumbs a {
			position: relative;
		}
		#carousel img,#thumbs img {
			border: none;
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
		}
		#carousel img.glare,#thumbs img.glare {
			display:none;
		}
		 
		#carousel span {
			width: 780px;
			height: 538px;
		}
		 
		#thumbs-wrapper {
			padding: 10px 40px;
			position: relative;
		}
		#thumbs a {
			width: 178px;
			height: 100px;
			margin: 0 5px;
			overflow: hidden;
		}
		#prev, #next {
			background: transparent url('img/carousel_nav.png') no-repeat 0 0;
			display: block;
			width: 35px;
			height: 100px;
			margin-top: 0px;
			position: absolute;
		}
		#prev {
			background-position: 0 0;
			left: 0px;
			top:10px;
		}
		#next {
			background-position: -35px 0;
			right: 0px;
			top:10px;
		}			
		#prev:hover { 
			background-position:0 -100px;			
		}
		#next:hover {
			background-position:  -35px -100px;				
		}
		#prev.disabled, #next.disabled {
			display: none !important;
		}
		#prev_slide{
			position:absolute;
			top:230px;
			left:0px;
			z-index:10001;
			opacity:0.6;
		}
		#next_slide{
			position:absolute;
			top:230px;
			left:730px;
			z-index:10002;
			opacity:0.6;
		}
		#next_slide:hover,	#prev_slide:hover{	
			opacity:1;
			}
		.thumbs img{
			padding:2px;
			border:1px solid #333;
		}
	</style>
	

	</head>
<body>
<div class="modal_gallery">
	<div class="top_tabs">
		<a href="javascript:void(0);" onClick="showSection('trailer'); _gaq.push(['_trackEvent', 'Riptide_galleryandtrailers', 'Riptide_Click', 'Trailers tab']);" class="tab_trailer off imagereplace">Trailers</a>
		<a href="javascript:void(0);" onClick="showSection('gallery'); _gaq.push(['_trackEvent', 'Riptide_galleryandtrailers', 'Riptide_Click', 'Gallery tab']);" class="tab_gallery off imagereplace">Gallery</a>
	</div>
	
	<div class="wrap_gallery">
		<div id="scrollArea">
		
				<div id="wrapper">
					<div id="carousel-wrapper">
						<div id="carousel">
							<span id="slide_01"><img src="img/screenshot_01.jpg" width="800" height="450" /></span>
							<span id="slide_02"><img src="img/screenshot_02.jpg" /></span>
							<span id="slide_03"><img src="img/screenshot_03.jpg" /></span>
							<span id="slide_04"><img src="img/screenshot_04.jpg" /></span>
							<span id="slide_05"><img src="img/screenshot_05.jpg" /></span>
							<span id="slide_06"><img src="img/screenshot_06.jpg" /></span>
							<span id="slide_07"><img src="img/screenshot_07.jpg" /></span>
							<span id="slide_08"><img src="img/screenshot_08.jpg" /></span>
							<span id="slide_09"><img src="img/screenshot_09.jpg" /></span>
							<span id="slide_10"><img src="img/screenshot_10.jpg" /></span>
						</div>
					</div>
					<div id="thumbs-wrapper">
						<div id="thumbs">
							<a href="#slide_01" class="selected"><img src="img/thumbnail_01.jpg" /></a>
							<a href="#slide_02"><img src="img/thumbnail_02.jpg" /></a>
							<a href="#slide_03"><img src="img/thumbnail_03.jpg" /></a>
							<a href="#slide_04"><img src="img/thumbnail_04.jpg" /></a>
							<a href="#slide_05"><img src="img/thumbnail_05.jpg" /></a>
							<a href="#slide_06"><img src="img/thumbnail_06.jpg" /></a>
							<a href="#slide_07"><img src="img/thumbnail_07.jpg" /></a>
							<a href="#slide_08"><img src="img/thumbnail_08.jpg"  /></a>
							<a href="#slide_09"><img src="img/thumbnail_09.jpg" /></a>
							<a href="#slide_10"><img src="img/thumbnail_10.jpg" /></a>
						</div>
						<a id="prev" href="#"></a>
						<a id="next" href="#"></a>
					</div>
				</div>
				
		</div>
		<div class="clearfix"></div>
		<a class="prev" id="prev_slide" href="#"><span><img src="img/arrow_left.png" /></span></a>
		<a class="next" id="next_slide" href="#"><span><img src="img/arrow_right.png" /></span></a>

	</div>
</div><!--end wrap gallery-->
<div class="wrap_trailer">
<div class="trailer_iframe">
	<iframe width='780' height='439' src='http://www.youtube.com/embed/HdgoCVzl60s' frameborder='0' allowfullscreen></iframe>
</div>	
	<div class="thumbs">
	
	<a href="javascript:void(0);" onClick="changeClip(1); _gaq.push(['_trackEvent', 'Riptide_galleryandtrailers', 'Riptide_Click', 'Video 1']);"><img src="img/trailer_1_thumb.jpg" width="180" height="90" alt="Trailer 1"></a>
	
	<a href="javascript:void(0);" onClick="changeClip(2); _gaq.push(['_trackEvent', 'Riptide_galleryandtrailers', 'Riptide_Click', 'Video 2']);"><img src="img/trailer_2_thumb.jpg" width="180" height="90" alt="Trailer 2"></a>
	
	<a href="javascript:void(0);" onClick="changeClip(3); _gaq.push(['_trackEvent', 'Riptide_galleryandtrailers', 'Riptide_Click', 'Video 3']);"><img src="img/trailer_3_thumb.jpg" width="180" height="90" alt="Trailer 3"></a>
	
	<a href="javascript:void(0);" onClick="changeClip(4); _gaq.push(['_trackEvent', 'Riptide_galleryandtrailers', 'Riptide_Click', 'Video 4']);"><img src="img/trailer_4_thumb.jpg" width="180" height="90" alt="Trailer 3"></a>
	</div>

</div>



   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
   <script type="text/javascript" src="js/libs/jquery.carouFredSel-5.6.4-packed.js"></script>
	

    <script  type="text/javascript">
	
	
   		$(function() {
			
			$('#carousel span').append('<img src="img/gui/carousel_glare.png" class="glare" />');
			$('#thumbs a').append('<img src="img/gui/carousel_glare_small.png" class="glare" />');
		 
			$('#carousel').carouFredSel({
				responsive: true,
				circular: false,
				auto: false,
				items: {
					visible: 1,
					width: 780,
					height: '56%'
				},
				scroll: {
					fx:"crossfade",
					duration:500,
					speed:"fast"
				} ,
				prev: "#prev_slide",
                next: "#next_slide"
			});
		 
			$('#thumbs').carouFredSel({
				responsive: true,
				circular: false,
				glare: false,
				infinite: false,
				auto: false,
				prev: '#prev',
				next: '#next',
				items: {
					visible: {
						min: 2,
						max: 4
					},
					width: 158,
					height: 90				}
			});
		 
			$('#thumbs a').click(function() {
				$('#carousel').trigger('slideTo', '#' + this.href.split('#').pop() );
				$('#thumbs a').removeClass('selected');
				$(this).addClass('selected');
				return false;
			});
		 
		});
		
		/*switch between trailers and gallery*/
		function showSection(theSection){
			if (theSection == 'trailer'){
				$('.wrap_trailer').show();
				$('.tab_trailer').removeClass('off').addClass('on');
				$('.wrap_gallery').hide();
				$('.tab_gallery').removeClass('on').addClass('off');
				}
			else if (theSection == 'gallery'){
				$('.wrap_trailer').hide();
				$('.tab_trailer').removeClass('on').addClass('off');
				$('.wrap_gallery').show();
				$('.tab_gallery').removeClass('off').addClass('on');
				
				}
		}
		
		$(document).ready(function() {
				showSection('gallery');
		});
		
		function changeClip(theClip){
			var theHtml;
			if (theClip == 1){
				theHtml = "<iframe width='780' height='439' src='http://www.youtube.com/embed/HdgoCVzl60s' frameborder='0' allowfullscreen></iframe>";	
				}
			else if (theClip == 2){
				theHtml = "<iframe width='780' height='439' src='http://www.youtube.com/embed/QjKW9vvlP1Y' frameborder='0' allowfullscreen></iframe>";
			}
			else if (theClip == 3){
				theHtml = "<iframe width='780' height='439' src='http://www.youtube.com/embed/gp6TizgPxmQ' frameborder='0' allowfullscreen></iframe>";	
			}
			else if (theClip == 4){
				theHtml = "<iframe width='780' height='439' src='http://www.youtube.com/embed/W1pe2ulIvvU' frameborder='0' allowfullscreen></iframe>";
				}
			$(".trailer_iframe").html(theHtml);
			$(".trailer_iframe").fadeIn();
		}
		
    </script>
	
		<!--Google analytics-->
	<script>var _gaq=[["_setAccount","UA-15279170-1"],["_trackPageview","/deadislandriptide"]];(function(e,a){var c=e.createElement(a),b=e.getElementsByTagName(a)[0];c.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";b.parentNode.insertBefore(c,b)}(document,"script"));</script>
	
	
</body>
</html>
