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
<?php 
include 'style.css';
 ?>
</style>
 <h3>Calculer le prix TTC :</h3>
 <?php
    //test de la réponse
    if(isset($_GET['error'])){
        if($_GET['error']==1){
            //erreur 1
            echo 'Veuillez remplir tous les champs du formulaire';
        }
        if($_GET['error']==2){
            //erreur 2
            echo 'veuillez utiliser des nombres';
        }
    }
    //test du résultat
    if(isset($_GET['resultat'])){
        echo "le prix total est de : ".$_GET['resultat']." €";
    }
?>

    <form action="./recup2.php" method="post">
        <p><label for="prixHt">Saisir le prix HT :</label></p>
        <input type="text" name="prixHt">
        <p><label for="qtx">Saisir la quantité :</label></p>
        <input type="text" name="qtx">
        <p><label for="tva">Saisir le taux de TVA :</label></p>
        <input type="text" name="tva">
        <p><input type="submit" value="calculer" name="submit"></p>
    </form>
</body>
</html>