<?php 
include('header.php');
$searchArray = array();
$quicksearch = "";
if(isset($_GET["keywords"])) {
	$quicksearch = $_GET["keywords"];
	$searchArray["keywords"]=$quicksearch;
;}
?>

<h1><span class="greytext">Quick search</span> <?php echo($quicksearch); ?></h1>
<p>&nbsp;</p>

<?php

include('includes/fm-search.php');
fmSearchResults($searchArray); ?>


<?php include('footer.php'); ?>