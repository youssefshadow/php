
<?php
function calcul(int $nbr1, int $nbr2, string $operator) {
  switch ($operator) {
    case '+':
      echo $nbr1 + $nbr2;
      echo "<hr>";
      break;
    case '-':
      echo $nbr1 - $nbr2;
      echo "<hr>";
      break;
    case '*':
      echo $nbr1 * $nbr2 ;
      echo "<hr>";
      break;
    case '/':
      if ($nbr2 == 0) {
        echo " Diviser par zéro t'es ouf toi <hr>";
      } else {
        echo $nbr1 / $nbr2;
      }
      break;
    default:
      echo "Opérateur non valide <hr>";
  }
}

calcul(4,5,'+');
calcul(4,0,'/');
calcul(4,9,'*');
?>

