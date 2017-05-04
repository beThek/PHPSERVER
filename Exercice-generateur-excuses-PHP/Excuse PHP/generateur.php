<html>
<head>
		<title>Générateur d'excuse</title>
	 	<link rel="stylesheet" type="text/css" href="main.css">
	 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	 	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<header class="body">
</header>




	

<section class="body">
	<form action="reponses.php" method="post" name="generateur">

		
		<p>1. Nom de l'enfant</p>

			<input name="nomdelenfant" placeholder="Pierro">
				
		<p>2. Nom de l'institutrice</p>
			 <input name="nomdelinstitutrice" placeholder="Mme Jodocy">
				
		<p>
		3. Raison de l'abscence</p>
		
		<label for="maladie">Maladie</label>
		<input type="radio" name="choix" id="indigestion virulente" value="indigestion virulente">

		<label for="deces animal de compagnie">Décès de l'animal de compagnie</label>
		<input type="radio" name="choix" id="deces animal de compagnie" value="le chien de Pierro s'est fait renversé par une voiture">
		
		
		<label for="activite extra-scolaire importante">Activité extra-scolaire importante</label>
		<input type="radio" name="choix" id="activite extra-scolaire importante" value="Pierro est épuisé, en effet celui-ci à fait trop de sport cette semaine, il a besoin de repos">

		<label for="raison familiales">Raisons familiales</label>
		<input type="radio" name="choix" id="raisons familiales" value="raisons familiales">

		

		<input id="submit" name="submit" type="submit" value="Envoyer">

	

	</form>
</section>




</body>
</html>