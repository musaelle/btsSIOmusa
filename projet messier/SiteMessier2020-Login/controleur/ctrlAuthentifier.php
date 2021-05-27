<?php

//Détermination de la racine
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=liste&page=1","label"=>"Tous les objets");
$menuBurger[] = Array("url"=>"./?action=recherche&critere=numero","label"=>"Recherche par numéro");

//Vérifier si login OK
include "$racine/modele/modeleUserDAO.php";
$valide = userDAO::valider($_POST['login'], $_POST['mdp']);

if($valide){
    
    // on démarre une session
    session_start ();
    // on enregistre les paramètres de notre visiteur comme variables de session
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['mdp'] = $_POST['mdp'];
    
    // Affichage des vues
    $titre = "Page de connexion - Les objets de Messier";
    include "$racine/vue/vueEntete.php";
    include "$racine/vue/vueAccueil.php";
    include "$racine/vue/vuePied.php";    
}
else{
    // Affichage des vues
    $titre = "Page de connexion - Les objets de Messier";
    include "$racine/vue/vueEntete.php";
    include "$racine/vue/vueLogin.php";
    include "$racine/vue/vuePied.php";
    
}

?>