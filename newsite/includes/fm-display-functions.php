<?php

$querystring = querystring();
$querystringadded = str_replace("?","&",$querystring);
$querykeywords = querykeywords();

//returns string of referring query without page number
function querystring() {
	$querystring = "";
	foreach ($_GET as $param_name => $param_val) {
		if($param_val != "" && $param_name != "page") {
			if ($querystring == "") {
				$querystring="?$param_name=$param_val";
			} else {
				$querystring=$querystring."&$param_name=$param_val";
			}
		}
	}
	return $querystring;
}

//creates string of all query keywords separated by spaces
function querykeywords() {
	$querykeywords = "";
	foreach ($_GET as $param_name => $param_val) {
		if($param_val != "" && $param_name != "page") {
			$querykeywords .= $param_val." ";
		}
	}
	return $querykeywords;
}

//highlight: under construction
function highlight($text,$words) {
    /*preg_match_all('~\w+~', $words, $m);
    if(!$m)
        return $text;
    $re = '~\\b(' . implode('|', $m[0]) . ')\\b~';
    return preg_replace($re, '<b>$0</b>', $text);*/
}

//outputs an image record in thumbnail format with hover information
function displayImgPreview($record) {
	global $querystringadded,$querykeywords;
	$strOutput = "";
	$strOutput .= '<a href="slideview.php?img_id=';
	$strOutput .= fmDisplayFieldResult('Filename',$record);
	$strOutput .= $querystringadded.'"><div class="tilethumbcontainer"><img class="tilethumb" src="img/';
	$strOutput .= 'thumbnails/'.basename($record->getField('Filepath_Thumbnail'));
	$strOutput .= '" /><div class="imghover"><div class="imghovertext"><h3>';
	$strOutput .= fmDisplayFieldResult('Title',$record);
	$strOutput .= '</h3><br />';
	$strOutput .= fmDisplayFieldResult('Creator1_Display',$record);
	$strOutput .= '<br /><i>';
	$strOutput .= fmDisplayFieldResult('Image_Details',$record);
	$strOutput .= '</i><br /><br />';
	$strOutput .= fmDisplayFieldResult('Filename',$record).'</div></div></div></a>';
	echo($strOutput);
	//echo highlight($strOutput,$querykeywords);
}

//outputs a video record as linked text
function displayVideoPreview($record) {
	global $querystringadded;
	echo '<h3>';
	echo '<a href="slideview.php?img_id=';
	echo fmDisplayFieldResult('Filename',$record);
	echo $querystringadded.'">';
	echo fmDisplayFieldResult('Title',$record).'</h3></a>';
	echo '<b>'.fmDisplayFieldResult('Creator1_Display',$record).'</b> '.fmDisplayFieldResult('Source_Title',$record).'<br />';
	echo fmDisplayFieldResult('Image_Details',$record).'<br />';
	echo '<br /><br />';
}

// Takes an array of results and displays the information with thumbnails and pagination
function fmDisplaySearchResults($result,$whetherToPaginate) {
	global $skip,$paginate_number,$max,$page,$querystring;
	// If an error is found, return a message and exit.
	if (FileMaker::isError($result)) {
		echo "Error: " . $result->getMessage(). "<br>";
		//exit;
	} else {
		// Get records from found set
		$records = $result->getRecords();
		$found = $result->getFoundSetCount();
		//Setup sort by type
		$fileType=$records[0]->getField('Source_Type');
		if($fileType!="Video") {
			$fileType = "Images";
		}

		echo ('<div class="recordSeparator">'.$fileType.'</div>');

		foreach ($records as $record) {
			//searchResultDisplay($record,$fileType);
			if($record->getField('Source_Type')=="Images") {
				displayImgPreview($record);
			} 
				displayImgPreview($record);
				$fileType = "Images";
			}
		}
		
		if($whetherToPaginate) { // adds pagination if specified. Disabled for "recent additions" mode.
			?>

			<div style="clear: both; padding-top: 20px; text-align: right;"><!--pagination div-->
			<?php //pagination

			$displayed = count($records);
			$pagenum = ceil(($skip/$max)+1);
			$pagetotal = ceil($found/$max);

			if(($skip + $max) > $found) {$next = $skip; }

			echo("Displaying <b>$displayed</b> of <b>$found</b> results<br /><br />");
			paginate($querystring,$page,$pagetotal);
			?>
			</div>
			<?php
		}
	}
	
}

// Pagination function
function paginate($querystring,$page,$pagetotal) {
	// Only executes if the there is more than 1 page of results
	if ($pagetotal > 1) {
		echo ("<span class='greytext'>Page $page of $pagetotal | </span> ");
		
		
		// Displays "previous" arrows if current page is not the first one
		if($page>1) {
			echo ("<a href='$querystring&page=".($page-1)."'><span class='smalltext'>&#60;&#60; Prev</span></a> <span class='greytext'>|</span> ");
		}
		
		//Displays "1..." if page is in middle
		if(abs($page-1)>=4) {
			echo ("<a href='$querystring&page=1'><span class='smalltext'>1</span></a> ");
			echo ("<span class='greytext'>... </span>");
		}
		
		// Displays page numbers
		for ( $i=1; $i<=$pagetotal; $i++) {
			if($i==$page) {
				echo "<span class='smalltext'><b>$page</b></span> ";
			} elseif(abs($page-$i)<4) {
				echo ("<a href='$querystring&page=$i'><span class='smalltext'>$i</span></a> ");
			}
			
		}
		
		//Displays "... last page number" if page is in middle
		if(abs($page-$pagetotal)>=4) {
			echo ("<span class='greytext'> ...</span>");
			echo ("<a href='$querystring&page=$pagetotal'><span class='smalltext'>$pagetotal</span></a> ");	
		}
		
		//Displays "next" arrows if current page is not the last one
		if($page!=$pagetotal) {
			echo "<span class='greytext'>| </span> <a href='$querystring&page=".($page+1)."'><span class='smalltext'>Next &#62;&#62;</span></a>";
		}
	}
}

?>