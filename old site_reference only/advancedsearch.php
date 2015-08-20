<!--Advanced search-->

<?php
//connect to filemaker
include('includes/fm-connect.php');
?>

<div id="slidepanel" style="top: 0px; right: 0px; display: block;">

<h2>Advanced Search</h2>
(BETA)
<p>&nbsp;</p>
<form action="advancedresults.php" method="get">

<table class="searchtable">
<tr><td>Keywords</td><td><input type="text" name="keywords" placeholder=""></td></tr>
<tr><td>Filename</td><td><input type="text" name="Filename" placeholder=""></td></tr>

<tr><td colspan=4><br /><p>&nbsp;</p><h3>Source</h3></td></tr>

<tr><td>Source Author</td><td><input type="text" name="Source_Author" placeholder=""></td></tr>
<tr><td>Source Title</td><td><input type="text" name="Source_Title" placeholder=""></td></tr>

<tr><td colspan=4><br /><p>&nbsp;</p><h3>Exactly match...</h3></td></tr>

<?php
valueLister("Course_Name","Courses");
valueLister("Requester_Name","Requested by");
valueLister("Source_Type","Source type");
valueLister("Work_Subject","Work subject");
?>

<!--<tr><td>Date Range</td><td><input type="text" name="Work_Date_Begin" placeholder="" style="width: 40px;"> - <input type="text" name="Work_Date_End" placeholder=""  style="width: 40px;"></td></tr>-->

<tr><td colspan=4 class="alignright"><p>&nbsp;</p><input type="submit" class="searchbutton" value="Search"></td></tr>
</table>


</form>

</div><!--end slidepanel-->



<?php

//function for drop-down inputs
function valueLister($fieldName,$fieldDisplayAs) {
	global $fmLayout;
	$fieldObject = $fmLayout->getField($fieldName);
	$list = $fieldObject->getValueList();
	echo "<tr><td>$fieldDisplayAs</td><td><div class='selectsearchcontainer'><select class='selectsearch' name='EXACT_$fieldName' style='width: 200px; border: none; background: #ddd;'>";
	echo "<option value=''>Select...</option>";
	foreach($list as $listValue) { echo "<option value='$listValue'>$listValue</option>";}
	echo "</select></div></td></tr>";
}

?>