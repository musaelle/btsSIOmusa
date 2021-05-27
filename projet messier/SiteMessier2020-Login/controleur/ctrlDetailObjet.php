<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=liste&page=1","label"=>"Liste des objets");
$menuBurger[] = Array("url"=>"./?action=recherche&critere=numero","label"=>"Recherche par numéro");

// on inclut les modèles nécessaires
include_once "$racine/modele/modeleObjetDAO.php";

// recuperation des donnees GET, POST, et SESSION
$numero = $_GET["numero"];

// appel des fonctions du modèle permettant de recuperer les données utiles à l'affichage 
$unObjet = ObjetDAO::getObjetByNumero($numero);
$laPhoto = $unObjet[0]['numero'].".jpg";


// appel des vues qui permettent de gerer l'affichage des données
$titre = "detail d'un objet";
include "$racine/vue/vueEntete.php";
include "$racine/vue/vueDetailObjet.php";
include "$racine/vue/vuePied.php";
?>