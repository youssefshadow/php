<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<style>
<?php include 'style.css'; ?>
</style>
<h1>Formulaire de malade</h1>
	<form method="post" action="recup.php">
		<label for="nbr1">Nombre 1 :</label>
		<input type="text" name="nbr1" id="nbr1"><br><br>
		<label for="nbr2">Nombre 2 :</label>
		<input type="text" name="nbr2" id="nbr2"><br><br>
		<input type="submit" name="submit" value="Envoyer">
	</form>
</body>
</html>



