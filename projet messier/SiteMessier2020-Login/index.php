<?php

//Permet de connaitre la racine du projet
include "getRacine.php";

//Appel du contrôleur principal
include "$racine/controleur/controleurPrincipal.php";

//include_once "$racine/modele/authentification.inc.php"; // pour pouvoir utiliser isLoggedOn()

//Définir l'action à faire
if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    $action = "defaut";
}

//Inclure le fichier à afficher
$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";

?>
     