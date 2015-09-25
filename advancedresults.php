<?php 
include('header.php');
$searchArray = array();
?>

<h1>Advanced search results (BETA)</h1>

<?php
$param_needles = array ("EXACT_","_");
$param_new_needles = array (""," ");

foreach ($_GET as $param_name => $param_val) {
	if($param_val != "") {
		if ($param_name != "page") {
			$searchArray[$param_name] = $param_val;
			$param_display_name = str_replace($param_needles,$param_new_needles,$param_name);
			echo "<span class='greytext'>$param_display_name:</span> $param_val<br />";
		}
	}
}
?>

<p>&nbsp;</p>

<?php
include('includes/fm-search.php');
fmSearchResults($searchArray);
?>

<?php include('footer.php'); ?>





