<?php
$record = $fm->getRecordById('_Settings', 1);
if (FileMaker::isError($record)) {
    echo "<body>Error: " . $record->getMessage(). "</body>";
    exit;
}?>

<p>This database was last synced on <?php echo $record->getField('Date_LastSync'); ?></p>