
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
<?php



if (isset($_GET['howmuch'])){
$howmuch = $_GET['howmuch'];
}else{
$_GET['howmuch'] = "";
$howmuch = '';
}

$age= $_GET['howmuch'];

if ($age >= 1 && $age <= 10) {
$age="salut petit";
}
elseif ($age > 10 && $age <= 99) {
$age="salut grand";
}

echo $howmuch;
echo "</br>";
echo $age;


?>

</body>
</html>

