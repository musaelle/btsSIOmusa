<?php

//Détermination de la racine
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=liste&page=1","label"=>"Tous les objets");
$menuBurger[] = Array("url"=>"./?action=recherche&critere=numero","label"=>"Recherche par numéro");

// Affichage des vues
$titre = "Page de connexion - Les objets de Messier";
include "$racine/vue/vueEntete.php";
var_dump($_POST);
if (empty($_POST)) {
    include "$racine/vue/vueInscription.php";
}
else{
    include "$racine/modele/modeleUserDAO.php";
    $inscriptionOK = UserDAO::inscrire($_POST['nom'], $_POST['login'], $_POST['mdp']);
    include "$racine/vue/vueLogin.php";
}
include "$racine/vue/vuePied.php";

?>