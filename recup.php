
<?php
	if(isset($_POST['submit'])) {
		$nbr1 = $_POST['nbr1'];
		$nbr2 = $_POST['nbr2'];
		if(!empty($nbr1) && !empty($nbr2)) {
			$resultat = $nbr1 + $nbr2;
			echo "Le résultat de l'addition de ".$nbr1." et ".$nbr2." est : ".$resultat;
			
			header("Refresh:5; url=form1.php");
			echo "<br>Vous allez être redirigé(e) vers la page du formulaire dans 5 secondes.";
            echo "<hr>";
		} else {
			echo "Veuillez remplir tous les champs.";
		}
	}
	?>