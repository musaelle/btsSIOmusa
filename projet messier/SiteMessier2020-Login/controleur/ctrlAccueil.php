<?php

//Détermination de la racine
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=liste&page=1","label"=>"Tous les objets");
$menuBurger[] = Array("url"=>"./?action=recherche&critere=numero","label"=>"Recherche par numéro");

session_start ();

if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) {
    // Affichage des vues
    $titre = "Accueil - Les objets de Messier";
    include "$racine/vue/vueEntete.php";
    include "$racine/vue/vueAccueil.php";
    include "$racine/vue/vuePied.php";
}
else{
    $titre = "Page de connexion - Les objets de Messier";
    include "$racine/vue/vueEntete.php";
    include "$racine/vue/vueLogin.php";
    include "$racine/vue/vuePied.php";    
}

?>