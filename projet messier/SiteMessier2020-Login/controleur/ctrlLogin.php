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
if(isset($inscriptionOK)){
    if(!inscriptionOK){
        echo "Erreur d'inscription";
    }
    else{
        echo "Inscription validée, veuillez vous connecter...";
    }
}
include "$racine/vue/vueEntete.php";
include "$racine/vue/vueLogin.php";
include "$racine/vue/vuePied.php";

?>