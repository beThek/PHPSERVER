<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


$nom = 'kreshnik';
$age = 31;
$eyescolors = 'brown';
$booleen = true;
$classe = array('Maman', 'Soeurette', 'Frero', 'Moi');

echo "$nom";
echo "31";
echo "$booleen";
echo "$eyescolors";
echo implode($classe);

?>

<!--
<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
  </body>
</html>

