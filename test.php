<?php



$time = date("H");
$minuts = date("i");



if ($time >= 5 AND $minuts AND $time < 9) {

	echo "Bonjour!";
}

elseif ($time >= 9 AND $minuts AND $time < 12) {
	
	echo "Bonne journée!";
}

elseif ($time >= 12 AND $minuts AND $time < 16) {

	echo "Bon après-midi!";
}

elseif ($time >= 16 AND $minuts >= 1 AND $time < 21) {
	
	echo "Bonne soirée!";
}

elseif ($time >= 21 AND $minuts AND $time <5) {
	
	echo "Bonne nuit!";
}

?>