<?php 
include('header.php'); 
if(isset($_GET["quicksearch"])) {$quicksearch=$_GET["quicksearch"];} else {$quicksearch=$quicksearch_none; }
?>

<h1><span class="greytext">Quick search</span> <?php echo($quicksearch); ?></h1>
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

// Create first find request on layout
$findreq =& $fm->newFindRequest('AllInfo');

$findreq->addFindCriterion('AE_AllSearch', $quicksearch);

// Add find requests to compound find command
$compoundFind->add(1,$findreq);
//$compoundFind->add(2,$findreq2);

//Set Range for pagination
$compoundFind->setRange($skip, $paginate_number);

// Set sort order
$compoundFind->addSortRule('Source_type', 1, FILEMAKER_SORT_DESCEND);
$compoundFind->addSortRule('Title', 2, FILEMAKER_SORT_ASCEND);

// Execute compound find command
$result = $compoundFind->execute();

if (FileMaker::isError($result)) {
    echo "Error: " . $result->getMessage() . "\n";
    //exit;
} else {
	// Get array of found records
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
	?>

	<!--</table>-->

	<?php 
	include('includes/pagination.php');
} ?>


<?php include('footer.php'); ?>