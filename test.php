<?php
$nbr1 = 10;
$nbr2 = 23;
$total = $nbr1 + $nbr2;
echo "<h3>La somme de $nbr1 + $nbr2 est égale à $total.<br></h3>";
$nbr1 = 5;
$nbr2 = 8;
$total = $nbr2 - $nbr1;
echo "Le reste de la soustraction $nbr2 et $nbr1 est égale à $total.<br>";
    $nbr1 = "10";
    $nbr1 = (int)$nbr1; 
    echo gettype($nbr1);
// Correction Exercice 1 variables : 
// <?php
//     $nbr1 = 10;
//     $nbr2 = 23;
//     $total;
//     $total = $nbr1+$nbr2;
//     echo $total.'<br>';
//     $nbr1 = 42;
//     $nbr2 = 26;
//     $total = $nbr2-$nbr1;
//     echo $total;
//     Exemple de concaténation :
 $nbr1 = 10;
    $nbr2 = 22;
    $resultat = "Le résultat est égal à : ";
    //version encadrée en double 
    echo "$nbr1 + $nbr2 est égal à $resultat<br>";
    //version encadrée en simple
    echo ''.$nbr1.' +  '.$nbr2.' est égal à '.$resultat.'<br>';
    //concaténation avec opérateur .
    echo $nbr1." + ".$nbr2." est égal à : ".$resultat."<br>"; 
    //opération de concaténation
    $nbr1 .= "texte";

   
    // $mot = "adrar";

    // $majuscule = implode("", array_map(function ($i, $char) {
    // return $i % 2 == 0 ? strtolower($char) : strtoupper($char);
    // }, array_keys(str_split($mot)), str_split($mot)));

    // echo $majuscule;
    $mot = "adrar";
    $majuscule = implode("", array_map(function ($char, $i) {
    return $i % 2 == 0 ? strtolower($char) : strtoupper($char);
    }, str_split($mot), array_keys(str_split($mot))));

    echo $majuscule;
    function maj($word) {
        return strtoupper($word[0]) . substr($word, 1);
    }
    
    $result = maj("hello");
    echo $result; 
    //strlen c'est l'équibalent de length en javascript
    for ($i=0; $i < strlen($result) ; $i++) { 
       echo "$i<br>";
    };

    function replaceCharacters($myWord) {
        $myWord = str_replace("a", "@", $myWord);
        $myWord = str_replace("e", "3", $myWord);
        $myWord = str_replace("i", "1", $myWord);
        $myWord = str_replace("o", "0", $myWord);
        return $myWord;
      }
      
      // Exemple d'utilisation
      $original = "Bonjour tout le mond bearnard est cool";
      $modify = replaceCharacters($original);
      echo"$modify<br>"; 

      $stack = array("orange", "banana");
      array_push($stack, "apple", "raspberry");
      print_r($stack);


      //tab vide
    $tab = [];
    $tab2 = [1,'texte',8,9,true,'mot'];
    //affiche le contenu
    echo $tab2[2];
    //ajouter une colonne 
    $tab2[10] = 55;
    //remplacer la valeur d'une colonne
    $tab2[3] = 19;
    //ajouter à la fin d'un tableau
    $tab[]= 'ajout';

    //tableau associatif
    $tabUser = ['Nom'=> 'Mithridate', 'Prenom' => 'Mathieu', 'Entreprise'=> 'Adrar'];
    //afficher le contenu de la colonne prenom
    echo $tabUser['Prenom'];
    //remplacer le contenu de la colonne prenom
    $tabUser['Prenom'] = 'Romain';
    //ajouter une colonne
    $tabUser[] = ['test'=>''];

//     Ajouter le tableau suivant dans une page php :
// $tab = [12,42,36,48,55,87,1,59,48,36,73,49],
// afficher la somme des colonnes du tableau en utilisant une boucle,
// Bonus utiliser une fonction native de PHP,


// Calculer le nombre de colonnes
$tab = [12, 42, 36, 48, 55, 87, 1, 59, 48, 36, 73, 49];
$somme = array_sum($tab);
echo $somme; 

$little = min($tab);
echo "<h5>$little<h5>";

 //tableau de nombres
 $tab2 = [12,42,36,48,55,87,8,59,48,36,3,49];
 //variable pour stocker la valeur moyenne
 $sum = 0;
 //boucle pour ajouter les valeurs à la $sum
 foreach($tab2 as $value){
     $sum += $value;
 }
 $moy = $sum/count($tab2);
 //affichage de la valeur moyenne
 echo 'la valeur moyenne du tableau égale à : '.$moy.'<br>';

 //version avec méthode native php
 echo 'la valeur moyenne du tableau égale à : '.(array_sum($tab2)/count($tab2)).'<br>';
?>



