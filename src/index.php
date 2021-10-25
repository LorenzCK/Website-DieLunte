<!DOCTYPE>
<html>
	<head>
		<!--
		/*
		 * MyFonts Webfont Build ID 794172, 2011-04-30T10:43:05-0400
		 * 
		 * The fonts listed in this notice are subject to the End User License
		 * Agreement(s) entered into by the website owner. All other parties are 
		 * explicitly restricted from using the Licensed Webfonts(s).
		 * 
		 * You may obtain a valid license at the URLs below.
		 * 
		 * Webfont: DIN Condensed
		 * URL: http://new.myfonts.com/fonts/paratype/din-condensed/pt-din-condensed/
		 * Foundry: ParaType
		 * Copyright: Copyright (c) ParaType, Inc., 2005. All rights reserved.
		 * License: http://www.myfonts.com/viewlicense?1056
		 * Licensed pageviews: 10,000/month
		 * CSS font-family: DINCondensed
		 * CSS font-weight: normal
		 * 
		 * (c) 2011 Bitstream Inc
		*/-->
		<link rel="stylesheet" type="text/css" href="MyFontsWebfontsOrderM2894272.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		
		<title>Die Lunte Verlag - Die schräge Reihe im Margarete Berg Buchverlag, Köln</title>
	</head>
	
	<body>

		<nav>
			<ul>
				<li><a href="/">News</a></li>
				<li><a href="?p=editorial">Editorial</a></li>
				<li><a href="?p=schwein-gehabt-klopfenstein" title="Clemens Klopfenstein">Klopfenstein</a></li>
				<li><a href="?p=vergiss-venedig-nester" title="Marcus P. Nester">Nester</a></li>
				<li><a href="?p=logans-party-hennig" title="Martin Hennig">Hennig</a></li>
				<li><a href="?p=christoph-geiser" title="Christoph Geiser">Geiser</a></li>
				<li><a href="?p=essais">Essais</a></li>
				<li><a href="?p=presse">Presse</a></li>
				<li><a href="?p=materialien">Materialien</a></li>
				<li><a href="?p=kontakt">Kontakt</a></li>
			</ul>
		</nav>

		<div class="container">
			<div class="wrapper">
				<header>
					<a href="/"><img src="img/dielune_logo_anim.gif" width="456" height="75" alt="Die Lunte Verlag logo" /></a>
					<span class="texthelp">Die Lunte Verlag</span>
					<?php /*<div class="subtitle">Die schräge Reihe im <a href="http://www.margaretebergverlag.de/">Margarete Berg Buchverlag</a> &ndash; Köln.</div> */ ?>
					<div class="subtitle">Im <a href="http://spiegelberg-verlag.com/">Spiegelberg Verlag</a>.</div>
				</header>
			
			<!-- Begin page -->
<?php
	//PAGE LOADING
	$page = (isset($_GET['p'])) ? $_GET['p'] : null;
	if(!$page){ $page = 'welcome'; }

	$pageFiles = scandir('./pages');
	$pageFilename = './pages/' . $page . '.php';

	if(in_array($page . '.php', $pageFiles) && file_exists($pageFilename)){
		include($pageFilename);
	}
	else{
		echo "<p>Invalid page.</p>";
	}	

?>
		<!-- End page -->

			</div> <!-- .wrapper -->
		</div> <!-- .container -->
	
	</body>
	
	<script type="text/javascript">
		$(document).ready(function(){
			//Clean up mail
			$('a.email').each(function(){
				var mangled = $(this).attr('href');
				$(this).attr('href', "mailto:" + mangled.replace(' (at) ', '@').replace(' (dot) ', '.'));
			});
		});
	</script>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-23612278-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</html>
