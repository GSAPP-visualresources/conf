<?php 
include('header.php');
$searchArray = array();
$quicksearch = "";
if(isset($_GET["keywords"])) {
	$quicksearch = $_GET["keywords"];
	$searchArray["keywords"]=$quicksearch;
;}

include('includes/fm-search.php');
fmSearchResults($searchArray); ?>

	   	<div class="pages">
	   		<div class="pageLeft">
                </div>
            <div class="pageRight">
                </div>
            </div>