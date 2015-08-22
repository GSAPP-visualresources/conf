<?php include('header.php'); ?>
		<?php
			test(4,8);
			function test($numtest,$arraynum) {
				$thumbarray = array("01018.001.jpg", "01019.001.jpg", "07001.047.jpg", "07001.048.jpg", "07001.051.jpg", "07001.054.jpg", "07001.057.jpg", "07001.060.jpg");
				$curarraynum=0;
				$numtest=$numtest*$arraynum;
				for ($i=0; $i<$numtest; $i++) {
					echo '<a href="slideindividual.php?img_id=';
					echo $thumbarray[$curarraynum];
					echo '"><div class="tilethumbcontainer"><img class="tilethumb" src="img/thumbnails/';
					echo $thumbarray[$curarraynum];
					echo '" /><div class="imghover"><div class="imghovertext"><h3>Image Title</h3><br />Architect<br /><i>Description</i></div></div></div></a>';
					if($curarraynum>=$arraynum-1) {
						$curarraynum=0;
					} else {
						$curarraynum++;
					}
				}
			}
		?>
<?php include('footer.php'); ?>