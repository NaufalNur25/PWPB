<?php 	
	for ($i=1; $i <= 5 ; $i++) { 
		echo "aku cinta kamu yang " . "ke-$i" . "x";
		echo '<br>';
	}
	for ($i=5; $i >= 1 ; $i--) {
		if ($i == 1) {
			echo "Hingga yange ke-" . $i;
			echo '<br>';
		} else{
			echo "aku cinta kamu dari yang ke-" . $i . "x";
			echo '<br>';
		}
	}
 ?>
