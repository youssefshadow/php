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
      echo $modify; 

?>

