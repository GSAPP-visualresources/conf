<?php include('header.php'); ?>

<h1>Test page</h1>

<?php

$record = $fm->getRecordById('_Settings', 1);
if (FileMaker::isError($record)) {
    echo "<body>Error: " . $record->getMessage(). "</body>";
    exit;
}?>

BLAH BLAH BLHA
<?php echo $record->getField('Date_LastSync'); ?>



<?php include('footer.php'); ?>