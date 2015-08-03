<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
<?=$title ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?=$title ?> - <?=$graph->description ?>">

<!-- Le styles -->
<link href="/public/css/bootstrap.css" rel="stylesheet">
<style>
body { padding-top: 60px;/* 60px to make the container go all the way to the bottom of the topbar */ }
</style>
<link href="/public/css/bootstrap-responsive.css" rel="stylesheet" />
<link href="/public/css/cookiecuttr.css" rel="stylesheet" />
<link href="/public/css/customization.css" rel="stylesheet" />
<link href="/public/css/style.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/public/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/public/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/public/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/public/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="/public/ico/favicon.png">
</head>

<body>
<div class="navbar navbar-inverse navbar-static-top header">
	<div class="container">
		<div class="span4"> <a href="/"><img src="/public/img/Bosworth-logo.png" id="logo" class="pull-left visible-desktop visible-tablet hidden-phone" /> </a> </div>
		<div id="topNav" class="span8 visible-desktop hidden-tablet hidden-phone"> Email: <a href="mailto:bosworth@leics.gov.uk" class="email">bosworth@leics.gov.uk</a> | Telephone:
			<?=$graph->phone ?>
		</div>
		<div id="topNav" class="span8 hidden-desktop visible-tablet visible-phone"> Email: <a href="mailto:bosworth@leics.gov.uk" class="email">bosworth@leics.gov.uk</a><br>
			Telephone:
			<?=$graph->phone ?>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="navbar-inner">
		<div class="woodNav"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <span class="hidden-desktop hidden-tablet visible-phone"> <a class="brand" href="/">Bosworth Battlefield</a> </span>
			<div class="container">
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="/" id="home">Home</a></li>
						<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="visit-dropdown">Visit <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/welcome/visit" id="visit">Visit</a></li>
								<li><a href="/welcome/eat" id="eat">Eat and Shop</a></li>
								<li><a href="/welcome/about" id="about">About</a></li>
								<li><a href="/welcome/facilities" id="facilities">Facilities and Access</a></li>
								<li><a href="/welcome/location" id="location">How to find us</a></li>
							</ul>
						</li>
						<li><a href="/welcome/events" id="events">What's On</a></li>
						<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Learn <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/welcome/learn" id="learn">Learn at Bosworth</a></li>
								<li><a href="/welcome/education" id="education">Making an Educational Visit</a></li>
								<li><a href="/welcome/sessions" id="sessions">Learning Sessions</a></li>
							</ul>
						</li>
						<li><a href="/welcome/hire" id="hire">Hire</a></li>
					</ul>
					<span class="pull-right visible-desktop hidden-tablet hidden-phone">
					<h5>Two Kings, One Day</h5>
					</span> </div>
				<!--/.nav-collapse --> 
			</div>
		</div>
	</div>
</div>
<div class="banners"></div>

<div class="container"> 
	<!-- Opening Times and Prices -->
	<div class="row">
		<div class="span4 bs-docs-sidebar opening">
			<div class="drop-shadow curled timesntickets">
				<h3><a class="secret" href="<?=$graph->sourceUrl ?>">Times and Prices</a></h3>
				<ul style="list-style: none;">
					<li><b>Today:</b>
						<?=$graph->openingHoursToday ?>
					</li>
					<?php foreach ($graph->openingHours as $key => $value) : ?>
					<li> <b>
						<?=$key ?>
						:</b>
						<?=$value ?>
					</li>
					<?php endforeach ?>
				</ul>
				<ul style="list-style: none">
					<li>
						<?=$prices_post->content ?>
					</li>
				</ul>
			</div>
			<div class="social drop-shadow curled clear hidden-tablet hidden-phone"> <a href="https://twitter.com/BosworthLCC" target="_blank"><img src="/public/img/twitter.png" title="Twitter"></a> <a href="http://www.flickr.com/photos/lccheritage/" target="_blank"><img src="/public/img/flikr.png" title="Flickr"></a> <a href="https://www.facebook.com/BosworthBattlefield" target="_blank"><img src="/public/img/facebook.png" title="FaceBook"></a> <a href="https://plus.google.com/114732709443689286875/about?hl=en" target="_blank"><img src="/public/img/places.png" title="Google Places"></a> <a href=http://www.tripadvisor.co.uk/Attraction_Review-g186334-d216117-Reviews-Bosworth_Battlefield_Heritage_Centre_and_Country_Park-Leicester_Leicestershire_Eng.html target="_blank"><img src="/public/img/tripadvisor.png" title="TripAdvisor"></a>
				<div class="clear"></div>
			</div>
			<div class="location drop-shadow curled clear">
				<h3><a class="secret" href="/welcome/location">How to find us</a></h3>
				<p>Our <a href="/welcome/location">location</a>, and all you need to know about <a href="/welcome/facilities">facilities and access</a>.</p>
				<a href="/welcome/location" class="hidden-phone"><img src="/public/img/map.gif"></a> </div>
			
			<!--NEWS-->
			<div class="  drop-shadow curled visible-desktop visible-tablet hidden-phone">
				<h3><a class="secret" href="https://twitter.com/BosworthLCC">Latest News</a></h3>
				<div class="tweet">Loading news...</div>
			</div>
		</div>
		<!-- Everything else-->
		<div class="span8">
			<div class=" drop-shadow curled">
				<?=$content ?>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>

<!--footer-->
<footer>
	<div class="container">
		<div class="logos hidden-tablet hidden-phone">
			<div class="span2  offset1"> 
			  <span class="row">
			    <img src="/public/img/england.jpg" alt="Footer_logo">
			  </span>
			</div>
			<div class="span2"> 
			  <span class="row">
			    <img src="/public/img/small-visitor-attraction.jpg" alt="Footer_logo">
			  </span>
			  <span class="row">
			    <img src="/public/img/nationalforest.gif" alt="Footer_logo">
			  </span>
			</div>
			<div class="span2"> 
			  <span class="row">
			    <img src="/public/img/access-for-all.jpg" alt="Footer_logo">
			  </span>
			  <span class="row">
			    <img src="/public/img/accredited.png" alt="Footer_logo">
			  </span>
			</div>
			<div class="span2"> 
			  <span class="row">
			    <img src="/public/img/hlf.jpg" alt="Footer_logo">
			  </span>
			  <span class="row">
			    <img src="/public/img/lcc.jpg" alt="Footer_logo">
			  </span>
			</div>
			<div class="span2"> 
			  <span class="row">
			    <img src="/public/img/gold2010.jpg" alt="Footer_logo">
			  </span>
			  <span class="row"> 
			    <img src="/public/img/gold2009.jpg" alt="Footer_logo"> 
			  </span>
			</div>
		</div>
	</div>
	<div class="container" style="padding-top:20px;">
		<p>Leicestershire County Council &copy; 2013 &middot; <a href="/welcome/privacy">Privacy</a></p>
	</div>
</footer>

<!-- Le javascript --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="http://code.jquery.com/jquery-latest.js"></script> 
<script src="/public/js/bootstrap.min.js"></script> 
<script src="/public/js/jquery.cookie.js"></script> 
<script src="/public/js/jquery.cookiecuttr.js"></script> 
<script src="/public/js/jquery.tweet.js"></script>
<?php if (isset($page_specific_scripts)) {foreach ($page_specific_scripts as $script): ?>
<script src="<?php echo $script ?>"></script>
<?php endforeach; } ?>
<script type="text/javascript">
    if (jQuery.cookie('cc_cookie_accept') == "cc_cookie_accept") {
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-36961584-3', 'auto');
		ga('send', 'pageview');

		// Update the news
      	$(".tweet").tweet({
      	  username: "BosworthLCC",
          join_text: "auto",
          avatar_size: 32,
          count: 4,
          template: "{text}",
          loading_text: "loading tweets..."
      });
	}
	
	jQuery(function($){
		$.cookieCuttr();
		// Roll the carousel
		$('.carousel').carousel();
	});
    </script>
</body>
</html>