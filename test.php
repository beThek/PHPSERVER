
<!DOCTYPE html>

<html>
	<head>
	<title>Ceci est un petit générateur de salutation selon lage</title>
	<meta charset="UTF-8">
	</head>
<body>
	
	<p>Quel est votre age</p>
	<form method="GET">
	<input type="number" name="howmuch" min="0">
	
	<p></p>

	<input id="submit" name="submit" type="submit" value="Envoyer">

<p></p>

<!-----------------------------2eme partie de l'exercice-->

<p>Etes-vous un homme ou une femme</p>

	<label for="homme">Homme</label>
	<input type="radio" name="choix" id="homme" value="homme">

	<label for="femme">Femme</label>
	<input type="radio" name="choix" id="femme" value="femme">
	<br>


<?php



if (isset($_GET['howmuch'])){
$howmuch = $_GET['howmuch'];
}
else{

$howmuch = 0; 
}

$age= $_GET['howmuch'];

if ($age >= 1 && $age <= 10) {
$age="salut petit";
}
elseif ($age > 10 && $age <= 99) {
$age="salut grand";
}


if (isset($_GET['genre'])){
$genre = $_GET['genre'];
}else{
$_GET['genre'] = "";
$genre = '';
}


echo $howmuch;
echo "</br>";
echo $genre;
echo $age;


/*------------------------------ 2eme partie de l'exercice*/ 




?>

</body>
</html>

