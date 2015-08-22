<?php
/* This file connects to the CAROUSEL_online database and contains functions for displaying field information */

// Include FileMaker API
require_once("FileMaker.php");

//Create a new connection to CAROUSEL_online database.
//new FileMaker('DatabaseName', NULL [hostspec], 'username', 'password');
$fm = new FileMaker('CAROUSEL_online');

$fmTable_Images="Assets_Images";
$fmTable_Projects='Data_Projects';
$fmTable_Creators='Data_Creators';
$fmTable_Settings='Variables';

$fmLayout_Images='Assets_Images';
$fmLayout_Projects='Data_Projects';
$fmLayout_Creators='Data_Creators';
$fmLayout_Settings='_Settings';

$fmDefaultSortArray= array (
	$fmLayout_Images => "_id_Filename",
	$fmLayout_Projects => "name",
	$fmLayout_Creators => "name"
);

?>