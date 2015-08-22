<?php 
include('header.php'); 
$quicksearch="Travel Sketch";
$searchArray = array();
$searchArray["keywords"]=$quicksearch;
?>

<h3><span class="greytext">Featured slides: travel sketches</h3>
<p>&nbsp;</p>

<?php
include('includes/fm-search.php');
fmSearchResults($searchArray); ?>


<?php include('footer.php'); ?>