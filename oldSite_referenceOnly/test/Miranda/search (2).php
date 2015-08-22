<?php 
include('header.php');
include('includes/fm-search.php');

$searchArray = array();

foreach($_GET as $key => $value){
	$searchArray[$key] = $value;
}

?>

<h1>Search results</h1>
<p>&nbsp;</p>

<?php
print_r($searchArray);
?>

<div class="searchResults">

<?php
echo '<br/>related creators: <br/>';
$sortArray=array();
$records=fmSearchResults($searchArray,$fmTable_Creators,$sortArray, $_GET["page"]);
displayResultCreator($records,"text");
/* 
echo '<br/>related projects: <br/>';
$sortArray=array();
$records=fmSearchResults($searchArray,$fmTable_Projects,$sortArray, $_GET["page"]);
displayResultProject($records,"text");

echo '<br/>related images: <br/>';
$sortArray=array("description"=>"ascend");
$records=fmSearchResults($searchArray,$fmLayout_Images,$sortArray, $_GET["page"]);
displayResultImage($records,"text"); */

?>

</div>

<?php include('footer.php'); ?>