<!-- <?php


function minTab($tab) {
  $min = min($tab);
  echo "La valeur minimale est : " . $min . "<br>";
}


function maxTab($tab) {
  $max = max($tab);
  echo "La valeur maximale est : " . $max . "<br>";
}


function moyTab($tab) {
  $moy = array_sum($tab) / count($tab);
  echo "La valeur moyenne est : " . $moy . "<br> ";
}


$tab = [5, 2, 8, 1, 9, 3];
minTab($tab); 
maxTab($tab); 
moyTab($tab); 

?> -->
<?php

function calculTab($tab, $operation) {
  switch ($operation) {
    case "min":
      $resultat = min($tab);
      echo "La valeur minimale est : " . $resultat . "<hr>";
      break;
    case "max":
      $resultat = max($tab);
      echo "La valeur maximale est : " . $resultat . "<hr>";
      break;
    case "moy":
      $resultat = array_sum($tab) / count($tab);
      echo "La valeur moyenne est : " . $resultat . "<hr>";
      break;
      case "florent":
        
        echo "Je ne connais aucun Florent <hr>";
        break;
    default:
      echo "Calcul inconu <hr> ";
      break;
  }
}

$tab = [5, 2, 8, 1, 9, 3,22,-4];
calculTab($tab, "min"); 
calculTab($tab, "moy"); 
calculTab($tab, "sum"); 
calculTab($tab, "max"); 
calculTab($tab, "mathieu"); 
calculTab($tab, "florent"); 



?>

