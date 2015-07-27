<?php

// Displays field information from record
function fmDisplayFieldResult ($fieldToDisplay,$record) {
	$fieldResult1=htmlentities($record->getField($fieldToDisplay));
	//replaces ampersands to HTML-friendly version
	$fieldResult2=str_replace("&amp;","&",$fieldResult1);
	if(empty($fieldResult2)) {
		//if field has nothing, returns greyed-out dash
		return '<span class="fieldResultNull">-</span>';
	} else {
		return '<span class="fieldResult">'.$fieldResult2.'</span>';
	}
}

// Displays search result for an image
function displayResultImage($records,$resultType) {
	if ($records != null) {
		foreach ($records as $record) {
			if ($resultType=="text") {
				$strOutput = "<div class='imageSearchCard'>";
				$strOutput .= "<div class='imageSearchImg'>";
				// Insert image thumbnail here
				$strOutput .= "</div>";
				
				$strOutput .= "<div class='imageSearchInfo'>";
				$strOutput .= fmDisplayFieldResult('_id_Filename',$record);
				$strOutput .= "<br />";
				$strOutput .= "<b>".fmDisplayFieldResult('calc_ProjectNames',$record)."</b>";
				$strOutput .= "<br />";
				$strOutput .= fmDisplayFieldResult('description',$record);
				$strOutput .= "<br />";
				
				$strOutput .= "</div>"; //end image info
				
				$strOutput .= "</div>"; //end image search card
				echo $strOutput;
			} elseif ($resultType=="image") {
				$strOutput = "<div class='imageSearchCard'>";
				$strOutput .= "THUMBNAIL HERE";
				$strOutput .= "</div>";
				echo $strOutput;
			}
		}
	}
}


// Displays search result for a creator
function displayResultCreator($records,$resultType) {
	if ($records != null) {
		foreach ($records as $record) {
			echo fmDisplayFieldResult('name',$record);
			echo "<br />";
		}
	}
}

// Displays search result for a project
function displayResultProject($records,$resultType) {
	if ($records != null) {
		foreach ($records as $record) {
			echo fmDisplayFieldResult('name',$record);
			echo "<br />";
		}
	}
}


?>