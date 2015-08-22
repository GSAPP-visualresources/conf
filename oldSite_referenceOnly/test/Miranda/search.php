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

/* echo 'pagenumber is' . innerhtmlspecialchars($_GET["page"]); */
/* echo 'page number is' . $page; */
/* print_r($_SERVER);
$preg_match("&page=" + $pagenumber, $url, $page);
print_r($page); */
if ($_GET["page"]==true){

echo '<br/>related creators: <br/>';
$sortArray=array();
$records=fmSearchResults($searchArray,$fmTable_Creators,$sortArray,$_GET["page"]);
displayResultCreator($records,"text");

echo '<br/>related projects: <br/>';
$sortArray=array();
$records=fmSearchResults($searchArray,$fmTable_Projects,$sortArray,$_GET["page"]);
displayResultProject($records,"text");

echo '<br/>related images: <br/>';
$sortArray=array("description"=>"ascend");
$records=fmSearchResults($searchArray,$fmLayout_Images,$sortArray,$_GET["page"]);
displayResultImage($records,"text");

echo $key;
echo $value;
}

?>

</div>

<?php include('footer.php'); ?>