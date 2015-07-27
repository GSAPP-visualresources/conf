<?php
include('00_settings.php');
include('includes/fm-connect.php');
include('includes/fm-display-functions.php');

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/style.php" />
		<link rel="stylesheet" type="text/css" href="./css/searchResultStyles.css" />
		<!--<link rel="stylesheet" type="text/css" href="./css/jqModal.css" />-->
				
		<!--jQuery general-->
		<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
		
		<!--jQuery UI-->
		<script type="text/javascript" src="./js/jquery-ui-1.11.3.custom/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="./css/jquery_ui.css" />
		
		<!--Auto-complete-->
		<script type="text/javascript">
		
			function oReqLoad (filename, tagname) {
				var oReq = new XMLHttpRequest(); //New request object
				oReq.open("get", "includes/indexedSearchArrays/"+filename, true);
				oReq.onload = function(e) {
					var rawText= oReq.responseText
					//console.log(rawText);
					var availableTags=JSON.parse(rawText);
					$( tagname ).autocomplete({	source: availableTags });
				}
				oReq.send();
			}
			
			oReqLoad("indexed_ProjectNames.txt","#tags");
			
		</script>
		
		<?php $projectionFilepath=""; ?>
	</head>
	<body>
	
	<div class="horizbar" id="header"><div class="horizbar2">
		<a href="index.php"><div id="headerlogo">
			<!--<img src="img/GSAPP_logo-whitetext.png" />-->
			<span style="font-family:'Arial Black', Arial, sans-serif; font-size: 200%;">GSAPP </span>
			<span style="font-family:'Arial Narrow', Arial, sans-serif; font-size: 200%;"><?php echo($site_title); ?></span>
		</div></a>
		
		<div id="headersearch">
			<form action="search.php" method="get">
			<span>
			<input type="text" class="searchinput" name="keywords" autofocus="autofocus" id="tags">
			<input type="submit" class="searchbutton" value="Search">
			</span>
			</form>
		</div>
		
		<div class="clear"></div>
		
	</div></div><!--End header bar-->
	
	<div class="horizbar" id="navbar"><div class="horizbar2"><?php include('00_navbar.php'); ?><div class="clear"></div></div></div><!--End Navbar-->
	
	<div class="horizbar" id="meat"><div class="horizbar2">