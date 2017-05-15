<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

/*
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');



foreach ($pronoms_personnels as $pp => $coder){
	echo $coder;
	
}

$coder = array('code', 'codes', 'code' , 'code', 'codons', 'codez', 'codent');

for ($i=0; $i < 6; $i++) { 
	echo "<br>" . "$pronoms_personnels[$i]" . "$coder[$i]" . "<br>";
}
*/

/*//construction While
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 10000)
{
    echo $nombre_de_lignes . ': Je ne dois pas regarder les mouches voler quand japprends le PHP.<br />';
    $nombre_de_lignes++;
}
*/

/*//Construction for

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 500; $nombre_de_lignes++)
{
    echo 'Je ne dois pas regarder les mouches voler quand japprends le PHP.' . $nombre_de_lignes . '<br />';
}
*/


/*//Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  while


$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 120){
	echo $nombre_de_lignes . ': indique le nombre de ligne.<br>';
	$nombre_de_lignes++;
}

*/

/*//Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  for
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 120; $nombre_de_lignes ++) { 
	echo 'je dois voir 120 lignes' . $nombre_de_lignes .'<br>';
}
*/



/*//Crée un tableau contenant tous les prénoms des personnes composant ta classe. Affiche ces prénoms à l'aide d'une boucle.



$nom_des_gens_dans_la_classe = array('Hugo', 'Geoffrey', 'Daniela', 'Estelle', 'Safia', 'Gabriel', 'Ludo', 'Thomas', 'Dan', 'Khaled', 'Santi', 'Salvatore');

foreach ($nom_des_gens_dans_la_classe as $ng){
	echo $coder;
	
}

for ($i=0; $i < 11; $i++) { 
	echo "<br>" . "$nom_des_gens_dans_la_classe[$i]" . "<br>";
}

*/


$nom_pays = array('Italy', 'Irlande', 'Suisse', 'Luxembourg', 'Singapour', 'USA', 'Australie', 'Canada', 'France', 'Belgique');

  echo "<select name='>". $pays . "'>";
foreach ($nom_pays as $pays){
	echo '<option value ="' . $pays . '">' . $pays . '</options>';

}

echo "</select>";


?>

<!--<form> 

<select name = "pays">
  <option value="Japon">Japon</option>
  <option value="Irlande">Irlande</option>
  <option value="Suisse">Suisse</option>
  <option value="Singapour">Singapour</option>
  <option value="USA">USA</option>
  <option value="Australie">Australie</option>
  <option value="Canada">Canada</option>
  <option value="France">France</option>
  <option value="Belgique">Belgique</option>
</select>

</form> -->
</body>
</html>




</html> 