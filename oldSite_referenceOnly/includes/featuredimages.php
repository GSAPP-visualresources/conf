<?php 

//set featured search terms
$quicksearch=$featured_search; 

// Create FileMaker_Command_CompoundFind object on layout to search
$compoundFind =& $fm->newCompoundFindCommand('AllInfo');

// Create first find request on layout
$findreq =& $fm->newFindRequest('AllInfo');

$findreq->addFindCriterion('AE_AllSearch', $quicksearch);

// Add find requests to compound find command
$compoundFind->add(1,$findreq);
//$compoundFind->add(2,$findreq2);

// Set sort order
$compoundFind->addSortRule('Date_Entered', 1, FILEMAKER_SORT_ASCEND);

// Execute compound find command
$result = $compoundFind->execute();

if (FileMaker::isError($result)) {
    echo "Error: " . $result->getMessage() . "\n";
    exit;
}

// Get array of found records
$records = $result->getRecords();
$records10 = array_slice($records,0,$featured_search_number);

// Setup number variable and filetype
$curRecord = 0;
$fileType=$records10[0]->getField('Source_Type');

foreach ($records10 as $record) {
	displayImgPreview($record);
}

?>
<!-- Featured images text-->
<div class="greytext" style="width: 100%; clear: both;"><?php echo($featured_search_text); ?></div>
<p>&nbsp;</p>