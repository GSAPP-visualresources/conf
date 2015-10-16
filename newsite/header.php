<?php include('settings.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		
		<title>Quick Search</title>
		  
		<link rel="stylesheet" type="text/css" href="style.css" />
<<<<<<< HEAD
=======

		<link rel="stylesheet" type="text/css" href="./css/style.php" />
>>>>>>> 7f681ad8c642ffeca0deed747b49771800de5cbc
		<!--<link rel="stylesheet" type="text/css" href="./css/jqModal.css" />-->
				
		<!--jQuery general-->
		<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
		
		<!--ZeroClipboard-->
		<script src="js/ZeroClipboard.js" type="text/javascript"></script>
		
		<!--currentLink-->
		<script src="js/currentLink.js" type="text/javascript"></script>
<<<<<<< HEAD
=======

		<script src="_assets/js/ZeroClipboard.js" type="text/javascript"></script>
>>>>>>> 7f681ad8c642ffeca0deed747b49771800de5cbc
		
		<!--Slidepanel-->
		<script type="text/javascript" src="./js/jquery.slidepanel.js"></script>
		<link rel="stylesheet" href="./css/jquery.slidepanel.css" type="text/css" media="screen" />
		
		<script type="text/javascript">
			//ZeroClipboard: Uses Javascript and a flash file to allow clicks to copy information to user clipboard.
			$(window).load(function() {
					var clip = new ZeroClipboard.Client();
					clip.glue('clipButton','clipButtonContain');
					var txt = $("#projectionURL").text();
					clip.setText(txt);
					//Add a complete event to let the user know the text was copied
					clip.addEventListener('complete', function(client, text) {
						//alert("Copied text to clipboard:\n" + text);
						$("#fadingAlert").show();
						$("#fadingAlert").fadeOut(6000);
					});
			});
		</script>
		
		<?php
			include('includes/fm-connect.php');
			include('includes/fm-display-functions.php');
			$querystring = querystring();
		?>
		
		<?php $projectionFilepath=""; ?>
				
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
	
	<body>

<!--Searchbar-->

    <div class="container">
		<div class="navigation">
	    		<div class="textLeft">
                    <fieldset>
                         <form action="quickresults.php" method="get">
			             <span>
                         <input class="searchBar" type="search" name="keywords" placeholder="Search"
                         autofocus="autofocus">
			             </span>
			           </form>
    				</div>
                    </fieldset>
                </div>
				
<!--Center Text-->
				
                <div class="textCenter">
					<p>Visual Resources Collection<br>Graduate School of Architecture Planning and Preservation</p>
                </div>
				
<!--Nav Bar-->

<div class="textRight">
	<div class="navigation">
		<div class="textRight">
                    <ul>
                        <li><a href="images_video.php">Resources</a></li>
                        <li><a href="architects_projects.php">Index</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                </div>
<<<<<<< HEAD
	    </div>
=======
	    </div>
	</head>
	<body>
	
	<!--Serena's layout NEEDS TO BE REPLACED W/ NEW TAYLOR LAYOUT CODE-->
	
	
	<div class="horizbar" id="header"><div class="horizbar2">
		<a href="index.php"><div id="headerlogo">
			<!--<img src="img/GSAPP_logo-whitetext.png" />-->
			<span style="font-family:'Arial Black', Arial, sans-serif; font-size: 200%;">GSAPP </span>
			<span style="font-family:'Arial Narrow', Arial, sans-serif; font-size: 200%;"><?php echo($site_title); ?></span>
		</div></a>
		
		<div id="headersearch">
			<form action="quickresults.php" method="get">
			<span>
			<input type="text" class="searchinput" name="keywords" autofocus="autofocus">
			<input type="submit" class="searchbutton" value="Search">
			</span>
			</form>
			<a href="./advancedsearch.php" data-slidepanel="panel" class="button" style="position: relative; top: 5px; clear: both;">Advanced search...</a>
		</div>
		
		<div class="clear"></div>
		
	</div></div><!--End header bar-->
	
	<div class="horizbar" id="navbar"><div class="horizbar2"><?php include('00_navbar.php'); ?><div class="clear"></div></div></div><!--End Navbar-->
	
	<div class="horizbar" id="meat"><div class="horizbar2">
>>>>>>> 7f681ad8c642ffeca0deed747b49771800de5cbc
