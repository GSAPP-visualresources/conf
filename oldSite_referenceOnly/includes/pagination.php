<div style="clear: both; padding-top: 20px; text-align: right;">
<?php //PAGINATION

$displayed = count($records);
$pagenum = ceil(($skip/$max)+1);
$pagetotal = ceil($found/$max);

if(($skip + $max) > $found) {$next = $skip; }

echo("Displaying <b>$displayed</b> of <b>$found</b> results<br /><br />");

/*if($max<$found) {
	echo("Page $pagenum of $pagetotal<br /><br />");
}*/

paginate();

function paginate() {
	global $max,$found,$skip,$page,$pagetotal,$querystring;

	if ($pagetotal > 1) {
		echo ("<span class='greytext'>Pages: </span> ");
		if($page>1) {
			echo ("<a href='$querystring&page=".($page-1)."'>&#60;&#60; Prev</a> <span class='greytext'>|</span> ");
		}
	
		for ( $i=1; $i<=$pagetotal; $i++) {
			if($i==$page) {
				echo "<span class='greytext'><b>$page</b></span> ";
			} else {
				echo ("<a href='$querystring&page=$i'>$i</a> ");
			}
		}
		if($page!=$pagetotal) {
			echo "<span class='greytext'>| </span> <a href='$querystring&page=".($page+1)."'>Next &#62;&#62;</a>";
		}
	}
	
	
}
?>
</div>