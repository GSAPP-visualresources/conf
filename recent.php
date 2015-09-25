<?php 
include('header.php');
$searchArray = array();
$searchArray["mode"]="recent";
?>

<h1><span class="greytext"><?php echo($paginate_number); ?> recent additions</span></h1>
<p>&nbsp;</p>

<?php

include('includes/fm-search.php');
fmRecentResults(); ?>


<?php include('footer.php'); ?>