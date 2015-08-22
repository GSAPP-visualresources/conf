<?php
/* This file connects to the CAROUSEL_online database and contains functions for displaying field information */

	// Include FileMaker API
	require_once("FileMaker.php");
	
	//Create a new connection to CAROUSEL_online database.
	//new FileMaker('DatabaseName', NULL [hostspec], 'username', 'password');
	$fm = new FileMaker('CAROUSEL_online');
	$fmLayout = $fm->getLayout('AllInfo');
	
	//Display Record Information for Slideview
	function fmDisplayFieldTR($fieldDisplayName,$fieldToDisplay,$record) {
		echo "<tr><td class='greytext'>$fieldDisplayName</td><td>";
		echo fmDisplayFieldResult ($fieldToDisplay,$record);
		echo "</td></tr>";
	}
	
	//Displays field information from record
	function fmDisplayFieldResult ($fieldToDisplay,$record) {
		$fieldResult1=htmlentities($record->getField($fieldToDisplay));
		//replaces ampersands to HTML-friendly version
		$fieldResult2=str_replace("&amp;","&",$fieldResult1);
		if(empty($fieldResult2)) {
			//if field has nothing, returns greyed-out dash
			return '<span class="greytext">-</span>';
		} else {
			return $fieldResult2;
		}
	}
?>