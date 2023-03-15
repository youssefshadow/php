<?php
    //tester si le bouton est cliqué
    if(isset($_POST['submit'])){
        //test si les nombres valent zero
        if((int)$_POST['prixHt'] === 0 AND (int)$_POST['qtx'] === 0 AND (int)$_POST['tva'] === 0){
            echo "veuillez saisir des nombres différents de zéro";
        }
        //test si différent de zéro
        else{
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
                            echo "le prix total est de : ".$total." €";
                        }
                        //test si la tva est comprise entre 1 et 2
                        else if($tva > 1 AND $tva <2){
                            $total = $prixHt*$qtx*$tva;
                            echo "le prix total est de : ".$total." €";
                        }
                        //test si est supérieur
                        else{
                            $total = $prixHt*$qtx*(($tva/100)+1);
                            echo "le prix total est de : ".$total." €";
                        }
                    } 
                }
                //test si ce n'est pas des nombres
                else{
                    echo 'veuillez utiliser des nombres';
                }   
            }
            //test si les champs ne sont pas remplis
            else{
                echo 'Veuillez remplir tous les champs du formulaire';
            } 
        }
    } 
?>