<?php

//Fonction qui retourne le fichier controleur à utiliser
function controleurPrincipal($action){
 
    //Chaque action va déterminer le controleur à appeler
    $lesActions = array();
    $lesActions["defaut"] = "ctrlLogin.php";
    $lesActions["detail"] = "ctrlDetailObjet.php";
    $lesActions["recherche"] = "ctrlRechercheObjet.php";
    $lesActions["liste"] = "ctrlListeObjets.php";    
    $lesActions["login"] = "ctrlLogin.php";     
    $lesActions["authentifier"] = "ctrlAuthentifier.php";      
    $lesActions["inscrire"] = "ctrlInscrire.php";     

    $controleur = $lesActions["defaut"];
    
    //Permet de vérifier que l'action existe et renvoie le nom du contrôleur PHP    
    if (array_key_exists ( $action , $lesActions )){
        $controleur = $lesActions[$action];
    }
    
    return $controleur;
}

?>