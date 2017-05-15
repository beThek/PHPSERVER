<?php

/*
$team = array('KReshnik', 'Eden', 'Adam', 'Eve');

echo $team[1];
*/



/*
$famille = array('Kreshnik', 'Maman', 'Frangin', 'Soeurrette');
print_r($famille);

*/



/*
$plats_preffere = ['Boulette frite', 'Côte irlandaise', 'Frite', 'Snack'];

print_r($plats_preffere);
*/



/*
$films_preffere = ['Enigma', 'Inception', 'Matrix', 'Avatar'];

echo $films_preffere[2];	
*/


/*
$person['papa']['firstname'] = 'Georgio';
	echo $person['papa']['firstname'];

$person['papa']['firstname'] = 'Sebastano';
	echo '<br>';
	echo $person['papa']['firstname'];
*/


/*
$utilisateur = array (
	'prenom' => 'Juan',
	'nom' => 'Pablo',
	'adresse' => '3 rue du Paradis',
	'ville' => 'Bruxelles',
);
	echo $utilisateur['ville'];
*/

	/*
	$moi = array (
		'prenom' => 'Kreshnik',
		'nom'	=> 'Iberdemaj',
		'age'	=> 31,
		'compte en banque' => 13452312313,
		'aime_le_foot' => 1,
);

		if ($moi['aime_le_foot'] == 1) {
			echo 'j aime le foot';
		} else {
			echo 'n aime pas le foot';
		}

		
		
		echo  $moi['prenom'];
		echo '<br>';
		echo $moi['nom'];
		echo '<br>';
		echo $moi['aime_le_foot'];
		echo '<br>';
		echo $moi['age'];
		echo '<br>';
		echo $moi['compte en banque'];
	*/

	/*



		$maman = array(
		'prenom' 		=> 'Josephine', 
		'Nom'    		=> 'AngeGardien',
		'age'	 		=> 99,
		'profession'	=> 'charpentier',
		'aime-le foot'	=> 1,
		'hobbies'		=> array(	'hobby1' => 'gym' , 
									'hobby2' => 'surf',
									'hobby3' => 'lecture',
			

			),
		);

		echo '<pre>';
		print_r($maman);
		echo '</pre>';


		$moi = array (
		'prenom' => 'Kreshnik',
		'nom'	=> 'show_ANANAS',
		'age'	=> 31,
		'compte en banque' => 13452312313,
		'aime_le_foot' => 1,
		'hobbies' => array(	'hobby1' => 'gym',
							'hobby2' => 'lecture',
							'hobby3' => 'voyages',
							'hobbi4' => 'taxidermie'),
		'maman' => $maman,
);

		echo '<pre>';
		print_r($moi);
		echo '</pre>';

		$a = count($moi['hobbies']);
		$b = count($maman['hobbies']);
		$resultat = $a+$b;
		echo $resultat;

	*/	
		
		$web_developement = array (
		'frontend'	=> array (),	
		'backend'	=> array (),
		
);
		array_push($web_developement['frontend'], 'css', 'xhtml', 'Flash', 'Javascript');
		array_push($web_developement['backend'], 'Ruby on Rails');
		
		$web_developement ['frontend'][2] = '';
		$web_developement ['frontend'][1] = 'html';
		
		print_r("<pre>");
		print_r ($web_developement);
		print_r("</pre>");





	

?>