<?php

/*//fonction version longue

$name = "Maurice";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
$name = "Alice";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
$name = "Jésus";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
$name = "Judas";
echo "<p>Bonjour $name!</p>";
echo '<hr>';

*/


// meme fonction que ci-dessus mais version COURTE

function dis_bonjour($nom){
	echo "<p>Bonjour $nom!</p>";
	echo '<hr>';
}

// appels de la fonction 
dis_bonjour("Maurice");
dis_bonjour("Alice");
dis_bonjour("Jésus");
dis_bonjour("Judas");





/*//str_shuffle() permet de mélanger les caractères d'une chaîne

$chaine = 'bitcoins power !';
$chaine = str_shuffle($chaine);
 
echo $chaine;

*/

/*
function lettre_majuscule($test){
	echo ucfirst("emile");
}

	echo $test;
*/

/*
$foo = 'hello world!';
$foo = ucfirst($foo);

echo $foo;
*/
/*
$lettre_majuscule = 'emile';
$lettre_majuscule = ucfirst($lettre_majuscule);
	echo $lettre_majuscule;
*/

/*
echo date('Y, m, d, h, i, s');
*/
/*
function somme($a, $b){
	if (is_int($a) AND is_int($b)) {
		echo "c est bon";
		$resultat = $a + $b;
	return $resultat;
	}else {

		echo "c est pas bon";
		
	}

}

echo somme(4000, 2000);
*/


/*
$a = "In code we trust";
echo $a[0], $a[3], $a[8], $a[11];
*/


/*
$x = 'caecotrophie, chaenichthys, microsphaera, sphaerotheca';
print str_replace('ae', 'æ', $x); 
*/

/*
$x = 'caecotrophie, chaenichthys, microsphaera, sphaerotheca';
print str_replace('ae', 'æ', $x); 

echo "</br>";

$x="cæcotrophie, chænichthys, microsphæra, sphærotheca";
print str_replace('æ', 'ae', $x);

*/

?>
