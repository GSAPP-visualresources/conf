<?php

// Retrieves global pagination maximum
$max=$paginate_number;

// Sets page number from URL
if(!isset($_GET['page'])) { $page = 1; } else { $page = $_GET["page"]; }

// Uses maximum and URL to tell page how many to skip.
$skip = ($page-1)*$max;

// Function takes array of search parameters, performs the search, and displays results.
function fmSearchResults($searchArray) {
	// Grabs variables from outside the function
	global $fm,$skip,$paginate_number,$max,$page,$querystring;
	// Create FileMaker_Command_CompoundFind object on layout to search
	$compoundFind =& $fm->newCompoundFindCommand('AllInfo');
	$compoundFindNum=0;
	$findreq =& $fm->newFindRequest('AllInfo');
	
	// Create find requests on layout
	foreach ($searchArray as $searchName => $searchCriteria) { // adds find criteria
		if($searchName == "keywords") {
			$findreq->addFindCriterion("AE_AllSearch", $searchCriteria);
		} elseif(strpos($searchName,'EXACT_') !== false) { //If given keywords with "EXACT_" prefix, searches for exact match in field
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

	// Set Range
	$compoundFind->setRange($skip, $paginate_number);

	// Set sort order
	$compoundFind->addSortRule('Source_type', 1, FILEMAKER_SORT_DESCEND);
	$compoundFind->addSortRule('Title', 2, FILEMAKER_SORT_ASCEND);

	// Execute compound find command
	$result = $compoundFind->execute();
	
	//Display search results
	fmDisplaySearchResults($result,true);
}

// Displays all entries by reverse order of date added, with pagination
function fmRecentResults() {
	// Grabs variables from outside the function
	global $fm,$skip,$paginate_number,$max,$page;
	
	// Create FileMaker_Command_Find on layout to search
	$findAllCommand =& $fm->newFindAllCommand('AllInfo');

	// Sort records in descending 'Title' order
	$findAllCommand->addSortRule('Date_Entered', 1, FILEMAKER_SORT_DESCEND);

	// Set Range
	$findAllCommand->setRange($skip, $paginate_number);
	
	// Execute find command
	$result = $findAllCommand->execute();
	
	//Display search results
	fmDisplaySearchResults($result,false);
}

?>