<?php include('settings.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		
		<title>Quick Search</title>
		  
		<link rel="stylesheet" type="text/css" href="style.php" />
		<!--<link rel="stylesheet" type="text/css" href="./css/jqModal.css" />-->
				
		<!--jQuery general-->
		<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
		
		<!--ZeroClipboard-->
		<script src="_assets/js/ZeroClipboard.js" type="text/javascript"></script>
		
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
                         <input class="searchBar" type="search" name="vrc_search" placeholder="Search"
                         autofocus="autofocus">
			             </span>
			           </form>
    				</div>
                    </fieldset>
                </div>
				
<!--Center Text-->
				
                <div class="textCenter">
					<a href="images_video.php">Visual Resources Collection<br>Graduate School of Architecture Planning and Preservation</a>
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
	    </div>