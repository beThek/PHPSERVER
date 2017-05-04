<?php 



$date = date("d-m-Y");
	$heure = date("H:i");
	Print("Nous sommes le $date et il est $heure");
	

	if (isset($_POST['nomdelenfant']))
	{
		echo $_POST['nomdelenfant'];	
	}

	
	if (isset($_POST['nomdelinstitutrice']))
	{
		echo $_POST['nomdelinstitutrice'];
	}

	

	if (isset($_POST['choix']))
	{

		echo $_POST['choix'];
	}


	




?>