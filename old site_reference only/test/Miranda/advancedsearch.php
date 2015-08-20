<?php
include('header.php');
include('includes/fm-search.php');
?>

<div id="advancedsearch">
	<form action="search.php" method="get">
	<table>
		<tr>
		<td>Keywords</td>
		<td><input type="text" class="searchinput" name="keywords"></td>
		</tr>
		
		<tr>
		<td>Project name</td>
		<td><input type="text" class="searchinput" name="<?php echo $fmTable_Projects ?>::name"></td>
		</tr>
		
		<tr>
		<td>Creator</td>
		<td><input type="text" class="searchinput" name="<?php echo $fmTable_Creators ?>::name"></td>
		</tr>
		
	</table>
	<input type="submit" class="searchbutton" value="Search">
	</form>
</div>

<?php
include('footer.php');
?>