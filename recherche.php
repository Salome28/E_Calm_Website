<!DOCTYPE html>
<html>
	<head>
		<title> Recherche </title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="recherche.css"/>
		<script type="text/javascript" src="jquery-3.7.1.min.js"></script>
	</head>

	<body>
		<script>
			let q1Value
			let q2Value
			let q3Value
			let q4Value
			let q5Value
			let q6Value
		</script>
		<div class="principale">

			<h1> RECHERCHE </h1>
			<form id="searchForm" method="post" action="resultat_recherche.php">
			<div class = "div">
				<div class="choix">
					<p> Niveau </p>
					<p>
					<select name="q1">
						<option >----</option>
						<option value="CP"> CP </option>
						<option value="CE1"> CE1 </option>
						<option value="CE2"> CE2 </option>
						<option value="CM1"> CM1 </option>
						<option value="CM2"> CM2 </option>
						<option value="6"> 6 </option>
						<option value="5"> 5 </option>
						<option value="4"> 4 </option>
						<option value="3"> 3 </option>
						<option value="2"> 2 </option>
						<option value="1"> 1 </option>
						<option value="T"> T </option>
					</select> 
					</p>
		
					<p> Année </p>
					<p> 
					<select name="q2">
						<option >----</option>
						<option value="2014"> 2014 </option>
						<option value="2015"> 2015 </option>
						<option value="2016"> 2016</option>
					</select>
					</p>

					<p> Corpus </p>
					<p>
					<select name="q3">
						<option >----</option>
						<option value="EcriScol"> EcriScol</option>
						<option value="ScolEdit"> ScolEdit</option>
					</select>
					</p>
				</div>

				<div class ="choix">		
					<p> Version </p>
					<p>
					<select name="q4">
						<option >----</option>
						<option value="1"> V1 </option>
						<option value="2"> V2 </option>
					</select>
					</p>
					<p> Normalisation : </p>
					<p>
						<input type="radio" value="oui" name="q5"> Oui
						<input type="radio" value="non" name="q5"> Non 
					</p>
		
					<p> Interv. Enseignant : </p>
					<p>
						<input type="radio" value="oui" name="q6">Oui
						<input type="radio" value="non" name="q6"> Non
					</p>
					<p>
						<button type="submit" id="ok" onclick="ValiderForm()"> Valider </button>
					</p>
					<div id="errorMessage"></div>
					
				</div>
					
			</div>
		</form>
		</div>

		
		<script>
			function validerForm() {
            // Récupération des valeurs des sélecteurs
            q1Value = $("#q1").val();
			q2Value = $("#q2").val();
			q3Value = $("#q3").val();
            q4Value = $("#q4").val();
			q5Value = $("input[name='q5':checked]").val();
			q6Value = $("input[name='q6':checked]").val();

            // Vérification des valeurs sélectionnées
            if (q1Value == "----" && q2Value =="----" && q2Value == "----" && q4Value == "----") {
                // Affichage de l'erreur
                $("#errorMessage").text("Veuillez sélectionner au moins un critère.");
				return false;
            } else {
                // Soumission du formulaire si les critères sont sélectionnés
                $("#searchForm").submit();
            }
        }
          
		</script>
	</body>
</html>	
