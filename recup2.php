<?php
    $erreur = 0;
    $total = 0;
    //tester si le bouton est cliqué
    if(isset($_POST['submit'])){
        
        //tester si les 3 champs sont remplis
        if(!empty($_POST['prixHt']) AND !empty($_POST['qtx'])
        AND !empty($_POST['tva'])){
            //tester si les 3 champs sont de type numérique
            if(is_numeric($_POST['prixHt']) AND is_numeric($_POST['qtx']) AND
            is_numeric($_POST['tva'])){
                //test si les champs sont différent de zero
                if($_POST['prixHt'] !=(int)0 AND $_POST['qtx'] !=(int)0 AND $_POST['tva'] !=(int)0){
                    $prixHt = $_POST['prixHt'];
                    $qtx = $_POST['qtx'];
                    $tva = $_POST['tva'];
                    $total = 0;
                    //test si le taux est inférieur à 0
                    if($tva <1){
                        $total = $prixHt*$qtx*($tva+1);
                    }
                    //test si la tva est comprise entre 1 et 2
                    else if($tva > 1 AND $tva <2){
                        $total = $prixHt*$qtx*$tva;
                    }
                    //test si est supérieur
                    else{
                        $total = $prixHt*$qtx*(($tva/100)+1);
                    }
                } 
            }
            //test si ce n'est pas des nombres
            else{
                $erreur = 2;
            }
        }    
        //test si différent de vide
        else{
            $erreur = 1;
        }
        //gestion des erreurs et résultats
        if($erreur !=0){
            header('Location: ./form2.php?error='.$erreur.'');
        }
        if($total !=0){
            header('Location: ./form2.php?resultat='.$total.'');
        }
    } 
?>