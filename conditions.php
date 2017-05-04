<?php


$temperature = 22;

if ( $temperature > 21) {
	
	$vetement_du_jour = "T-shirt";
}

elseif ( $temperature > 10) {

	$vetement_du_jour = "Pull-over";
	
}

else {

	$vetement_du_jour = "Pull-over, écharpe et bonnet";
}

echo "$vetement_du_jour";



?>