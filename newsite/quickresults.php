<?php 
include('header.php');
$searchArray = array();
$quicksearch = "";
if(isset($_GET["keywords"])) {
	$quicksearch = $_GET["keywords"];
	$searchArray["keywords"]=$quicksearch;
;}
                   include('includes/fm-search.php');
                        fmSearchResults($searchArray);
?>

	   	<div class="pages">
	   		<div class="pageLeft">
                <div class="label"><div class="labelText">Images</div></div>
<!--replace fmsearchresults here, from line 9 above-->
                </div>
            <div class="pageRight">
                <div class="label"><div class="labelText">Images</div></div>
                
                </div>

<!--test 20151016-->