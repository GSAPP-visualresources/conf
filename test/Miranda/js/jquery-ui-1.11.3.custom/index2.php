<?php include('00_settings.php'); ?>



<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Example Page</title>
	<link href="jquery-ui.css" rel="stylesheet">
	<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>
	
	<?php
	include('includes/fm-connect.php');
	include('includes/fm-display-functions.php');
	?>
	
	<script src="external/jquery/jquery.js"></script>
	<script src="jquery-ui.js"></script>
</head>
<body>

<h1>Autocomplete test</h1>

<!-- Autocomplete -->
<h2 class="demoHeaders">Autocomplete</h2>
<div>
	<input id="tags" title="type &quot;a&quot;">
</div>




<script>

// var availableTags = [
	// "ActionScript",
	// "AppleScript",
	// "Asp",
	// "BASIC",
	// "C",
	// "C++",
	// "Clojure",
	// "COBOL",
	// "ColdFusion",
	// "Erlang",
	// "Fortran",
	// "Groovy",
	// "Haskell",
	// "Java",
	// "JavaScript",
	// "Lisp",
	// "Perl",
	// "PHP",
	// "Python",
	// "Ruby",
	// "Scala",
	// "Scheme"
// ];
// $( "#autocomplete" ).autocomplete({source: availableTags});

</script>

<script type="text/javascript">
	function reqListener () {
		var rawText=this.responseText;
		console.log(rawText);
		alert(typeof rawText);
		alert(rawText);
		
		var availableTags2=JSON.parse(rawText); //Nothing is happening after alert
		
		if (availableTags2 instanceof Array) {
			alert(typeof availableTags2);
		}
		
		alert(availableTags2);
		$( "#tags" ).autocomplete({	source: availableTags2 });
	}

	function xmlRequester (filename) {
		var oReq = new XMLHttpRequest(); //New request object
		oReq.onload=reqListener;
		oReq.open("get", "../../includes/indexedSearchArrays/"+filename+".txt", true);
		oReq.send();
	}
	
	xmlRequester("indexed_ProjectNames");
	
</script>

</body>
</html>
