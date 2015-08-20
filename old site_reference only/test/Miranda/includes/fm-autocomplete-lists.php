<?php //does adding comments help

$find=$fm->newFindAnyCommand($fmLayout_Settings);
$result=$find->execute();
$rec=$result->getFirstRecord();


$projectNames=$rec->getField("indexed_ProjectNames");
$projectNames='["test1","test2"]';

echo $projectNames;
//echo json_encode($projectNames);
		

?>