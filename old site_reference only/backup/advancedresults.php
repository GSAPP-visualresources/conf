<?php 
include('header.php');
$searchArray = array();
?>

<h1>Advanced search results (BETA)</h1>

<?php
$param_needles = array ("AE_AllSearch","EXACT_","_");
$param_new_needles = array ("Keywords",""," ");

foreach ($_GET as $param_name => $param_val) {
	if($param_val != "") {
		if ($param_name != "page") {
			$searchArray[$param_name] = $param_val;
			$param_display_name = str_replace($param_needles,$param_new_needles,$param_name);
			echo "<span class='greytext'>$param_display_name:</span> $param_val<br />";
		}
	}
}
?>

<p>&nbsp;</p>

<?php

//retrieves global pagination maximum
$max=$paginate_number;

//sets page number from URL
if(!isset($_GET['page'])) { $page = 1; } else { $page = $_GET["page"]; }

//uses maximum and URL to tell page how many to skip.
$skip = ($page-1)*$max;

// Create FileMaker_Command_CompoundFind object on layout to search
$compoundFind =& $fm->newCompoundFindCommand('AllInfo');
$compoundFindNum=0;
$findreq =& $fm->newFindRequest('AllInfo');

// Create find requests on layout
foreach ($searchArray as $searchName => $searchCriteria) {
	if(strpos($searchName,'EXACT_') !== false) {
		$searchNameExact=str_replace("EXACT_","",$searchName);
		$findreq->addFindCriterion($searchNameExact, "==$searchCriteria");
	} elseif ($searchName=="Work_Date_Begin") {
		$findreq->addFindCriterion($searchName, ">$searchCriteria");
	} elseif ($searchName=="page") {
		//do not add as find criterion
	} else {
		$findreq->addFindCriterion($searchName, $searchCriteria);
		//$findreq->setOmit(false);
	}
	$compoundFind->add($compoundFindNum,$findreq);
}

//Set Range
$compoundFind->setRange($skip, $paginate_number);

// Set sort order
$compoundFind->addSortRule('Source_type', 1, FILEMAKER_SORT_DESCEND);
$compoundFind->addSortRule('Title', 2, FILEMAKER_SORT_ASCEND);

// Execute compound find command
$result = $compoundFind->execute();

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
		if($record->getField('Source_Type')=="Video") {
			displayVideoPreview($record);
		} else {
			if($fileType != "Images") {
				echo ('<p>&nbsp;</p><div class="recordSeparator">Images</div>');
			}
			displayImgPreview($record);
			$fileType = "Images";
		}
	}
	
	include('includes/pagination.php'); 
}
?>

<?php include('footer.php'); ?>





