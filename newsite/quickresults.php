<?php 
include('header.php');
$searchArray = array();
$quicksearch = "";
if(isset($_GET["keywords"])) {
	$quicksearch = $_GET["keywords"];
	$searchArray["keywords"]=$quicksearch;
;}

?>

	   	<div class="pages">
	   		<div class="pageLeft">
                <div class="label"><div class="labelText">Images</div></div>
                    <?php include('includes/fm-search.php');
                        fmSearchResults($searchArray);?>
                </div>
            <div class="pageRight">
                <div class="label"><div class="labelText">Images</div></div>
                
                </div>