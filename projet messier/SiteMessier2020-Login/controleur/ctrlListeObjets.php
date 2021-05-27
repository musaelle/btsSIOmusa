<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=liste&page=1","label"=>"Liste des objets");
$menuBurger[] = Array("url"=>"./?action=recherche&critere=numero","label"=>"Recherche par numéro");


//include_once "$racine/modele/bd.objet.inc.php";
include_once "$racine/modele/modeleObjetDAO.php";


// appel des fonctions permettant de recuperer les données utiles à l'affichage 
$listeObjets = ObjetDAO::readAll();


// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des objets";
include "$racine/vue/vueEntete.php";
include "$racine/vue/vueListeObjets.php";
include "$racine/vue/vuePied.php";


?>