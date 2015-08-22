<?php

// Retrieves global pagination maximum
$max=$paginate_number;

// Function takes array of search parameters, performs the search, and displays results.
function fmSearchResults($searchArray,$searchLayout,$sortArray,$page) {
	// Grabs variables from outside the function
	global $fm,$max,$querystring,$fmDefaultSortArray;
	
	// Uses maximum and URL to tell page how many to skip.
	$skip = ($page-1)*$max;
	
	// Create FileMaker_Command_CompoundFind object on layout to search
	$compoundFind =& $fm->newCompoundFindCommand($searchLayout);
	$compoundFindNum=0;
	$findreq =& $fm->newFindRequest($searchLayout);
	
	// Create find requests on layout
	foreach ($searchArray as $searchName => $searchCriteria) { // adds find criteria
		if(strpos($searchName,'EXACT_') !== false) { //If given keywords with "EXACT_" prefix, searches for exact match in field
			$searchNameExact=str_replace("EXACT_","",$searchName);
			$findreq->addFindCriterion($searchNameExact, "==$searchCriteria");
		} elseif ($searchName=="Work_Date_Begin") {
			$findreq->addFindCriterion($searchName, ">$searchCriteria");
		} elseif($searchName == "page") {
		} else {
			$findreq->addFindCriterion($searchName, $searchCriteria);
		}
		$compoundFind->add($compoundFindNum,$findreq);
	}

	// Set Range
	$compoundFind->setRange($skip, $max);

	// Set sort order
	$sorti=1;
	foreach($sortArray as $sortName => $sortCriteria){
		if($sortCriteria=="descend"){
			$compoundFind->addSortRule($sortName, $sorti, FILEMAKER_SORT_DESCEND);
		} else {
			$compoundFind->addSortRule($sortName, $sorti, FILEMAKER_SORT_ASCEND);
		}
		$sorti++;
	}
	
	$defaultSortOrder=$fmDefaultSortArray[$searchLayout];
	$compoundFind->addSortRule($defaultSortOrder, $sorti, FILEMAKER_SORT_ASCEND);

	// Execute compound find command
	$result = $compoundFind->execute();	
	
	if (FileMaker::isError($result)) {
		echo "Error: " . $result->getMessage(). "<br>";
		return null;
		//exit;
	} else {
		$records = $result->getRecords();
		return $records;
	}
}

/*// Displays all entries by reverse order of date added, with pagination
function fmRecentResults() {
	// Grabs variables from outside the function
	global $fm,$skip,$paginate_number,$max,$page;
	
	// Create FileMaker_Command_Find on layout to search
	$findAllCommand =& $fm->newFindAllCommand($searchLayout);

	// Sort records in descending 'Title' order
	$findAllCommand->addSortRule('Date_Entered', 1, FILEMAKER_SORT_DESCEND);

	// Set Range
	$findAllCommand->setRange($skip, $paginate_number);
	
	// Execute find command
	$result = $findAllCommand->execute();
	
	//Display search results
	fmDisplaySearchResults($result,false);
}*/

?>