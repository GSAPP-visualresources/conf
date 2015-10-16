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
                
<<<<<<< HEAD
<<<<<<< HEAD
                </div>

<!--testing on saturday-->
=======
                </div>
>>>>>>> 7f681ad8c642ffeca0deed747b49771800de5cbc
=======
                </div>

<!--test 20151016-->
>>>>>>> aff42bb3bdfda6b8f9f1544d28920a4e46d38a5e
