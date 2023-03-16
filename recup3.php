<?php
    //tester si le formulaire est submit 
    if(isset($_POST['submit'])){
        //test si les champs sont remplis
        if(!empty($_POST['nom'])AND !empty($_POST['mail'])AND !empty($_POST['password'])){
            //test si le fichier à été importé (dossier tmp)
            if($_FILES['image']['tmp_name'] !=""){
                //tester la taille du fichier
                if($_FILES['image']['size'] <(100*1024)){
                    //récupération de l'extension du fichier
                    $ext =  get_file_extension($_FILES['image']['name']);
                    //test de l'extension du fichier
                    if($ext == 'jpg' OR $ext == 'jpeg' OR $ext == 'png'){
                        $destination = './image/';
                        $name = $_POST['nom'];
                        $mail = $_POST['mail'];
                        //déplacer le fichier 
                        move_uploaded_file($_FILES['image']['tmp_name'],$destination.$name.$mail.'.'.$ext);
                        echo 'le fichier à été importé';
                    }
                    else{
                        echo 'le fichier n\'a pas la bonne extension';
                    }
                }
                else{
                    echo 'le fichier est trop lourd';
                }
            }
            //test si le fichier n'a été importé
            else{
                echo 'Le fichier n\'a pas été importé';
            }
        }
        //test si les champs ne sont pas remplis
        else{
            echo 'Veuillez remplir les champs de formulaire';
        }
    }
    //fonction pour récupérer l'extension
    function get_file_extension($file) {
        return substr(strrchr($file,'.'),1);
    }
?>