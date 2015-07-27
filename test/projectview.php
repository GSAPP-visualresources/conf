<?php 

include('header.php');

$id=$_GET["id"];

$findCommand =& $fm->newFindCommand($fmLayout_Projects);
$findCommand->addFindCriterion('__id_Serial', '=='.$id);
$result = $findCommand->execute();
$records = $result->getRecords();
foreach ($records as $record) {
	?>
	<div style="margin-top: 10px;">
		<table class="tabledefault">
			<tr><td colspan=2>&nbsp;</td></tr>
			<?php 
			fmDisplayFieldResult('__id_Serial',$record); 
			fmDisplayFieldResult('name',$record); 
			?>
		</table>
	</div>
		
	<?php 
	
	$relatedCreators = $record->getRelatedSet($fmTable_Creators);
	
	foreach ($relatedCreators as $relatedCreator) {
		fmDisplayFieldResult($fmTable_Creators.'::'.'name',$relatedCreator);
	}
		
} //end foreach

include('footer.php');
 
?>