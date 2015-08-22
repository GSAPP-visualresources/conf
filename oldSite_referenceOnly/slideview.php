<?php 

include('header.php');

$img_id=$_GET["img_id"];

$findCommand =& $fm->newFindCommand('AllInfo');
$findCommand->addFindCriterion('Filename', $img_id);
$result = $findCommand->execute();
$records = $result->getRecords();
foreach ($records as $record) {
	?>

	<div class="leftcol slideleft">

	<?php
	if($record->getField('Source_Type')=='Video') {
		echo '<img class="tilethumb" src="img/videoicon.png">';
	} else {
		$projectionFilepath=fmDisplayFieldResult('Filepath_Projection',$record);
		echo '<img class="tilethumb" src="img/thumbnails/'.basename($record->getField('Filepath_Thumbnail')).'">';
		include('includes/clipsection.php');
	}
	?>

	<div style="margin-top: 10px;">
		<table class="tabledefault">
			<tr><td colspan=2>&nbsp;</td></tr>
			<?php 
			fmDisplayFieldTR('File number: ','Filename',$record); 
			fmDisplayFieldTR('Collection: ','Collection',$record);
			//fmDisplayFieldTR('File status: ','Filepath_Projection',$record);
			?>

			<tr><td colspan=2>&nbsp;</td></tr>

			<!--<tr><td colspan=2>Available formats:<br />
			Archive TIFF<br />
			Projection JPEG<br /></td></tr>-->

			<tr class="tablesecondary"><td colspan=2>
			<?php 
			echo ('Captured by '.fmDisplayFieldResult('Capturer_Name',$record).'<br />');
			echo ('Catalogued by '.fmDisplayFieldResult('Cataloguer_Name',$record).'<br />');
			echo ('Reviewed by '.fmDisplayFieldResult('Reviewer_Name',$record).'<br />');
			?>
			</td></tr>

			<tr><td colspan=2>&nbsp;</td></tr>

			<tr class="tablesecondary"><td colspan=2>
			<?php 
			echo ('Entered '.fmDisplayFieldResult('Date_Entered',$record).'<br /><br />'); 
			echo ('Requested by '.fmDisplayFieldResult('Requester_Name',$record).'<br />'); 
			?>
		</table>
	</div>

	</div>

	<div class="leftcol slideright">

		<div class="slideinfopanel">
			<h3>Basic Information</h3><br />
			<table class="tabledefault">
				<?php 
				fmDisplayFieldTR('Architect/creator','Creator1_Display',$record);
				fmDisplayFieldTR('Work title','Title',$record); 
				?>
				</table>
		</div>
		
		<div class="slideinfopanel">
			<h3>Work &amp; Media Information</h3><br />
			<table class="tabledefault">
				<?php 
				fmDisplayFieldTR('Image Details','Image_Details',$record); 
				fmDisplayFieldTR('Subject','Work_Subject',$record); 
				fmDisplayFieldTR('Location','Location_1',$record); 
				fmDisplayFieldTR('','Location_2',$record);
				echo ('<tr><td class="greytext">Dates</td><td>'.fmDisplayFieldResult('Work_Date_Begin',$record)."-".fmDisplayFieldResult('Work_Date_End',$record).'</td></tr>');
				fmDisplayFieldTR('Media','Work_Type1',$record); 
				?>
			</table>
		</div>
		
		<div class="slideinfopanel">
			<h3>Source</h3><br />
			<table class="tabledefault">
				<?php 
				fmDisplayFieldTR('Type','Source_Type',$record); 
				fmDisplayFieldTR('Title','Source_Title',$record);
				fmDisplayFieldTR('','Source_Title_Sub',$record);
				fmDisplayFieldTR('Author','Source_Author',$record);
				fmDisplayFieldTR('Call No.','Call#_Address',$record); 
				?>
			</table>
		</div>

		
	</div>

	<div class="leftcol slideright">
		
		<div class="slideinfopanel">
			<h3>Course information</h3><br />
			<table class="tabledefault">
				<?php 
				fmDisplayFieldTR('Lecturer','Course_Lecturer',$record);
				fmDisplayFieldTR('Course','Course_Name',$record);
				fmDisplayFieldTR('Lecture #','Course_Lecture_Number',$record);
				?>
			</table>
		</div>

	</div>

		
		
	<?php 
} //end foreach

include('footer.php');
 
?>