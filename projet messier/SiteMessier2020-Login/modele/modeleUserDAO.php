<?php    
require_once("connexion.php");	
    
    class UserDAO{
        // retourne un tableau associatif à 2 dimensions (ligne / colonne) contenant tous les objets		
        public static function inscrire($nom, $login, $mdp) {
             //requéte SQL
            $req = Connexion::getInstance()->prepare("INSERT into `user` (nom, login, mdp) VALUES(:nom, :login, :mdp)");
            try {
                $req->bindValue(':nom', $nom, PDO::PARAM_STR);
                $req->bindValue(':login', $login, PDO::PARAM_STR);
                // mot de passe crypté
                $req->bindValue(':mdp', password_hash($mdp, PASSWORD_DEFAULT), PDO::PARAM_STR);                
                $req->execute();
            }
            catch(PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }            
        }
        public static function valider($login, $mdp) {
            $res = false;
             //requéte SQL
            $req = Connexion::getInstance()->prepare("SELECT * FROM user WHERE login=:login");
            try {
                $req->bindValue(':login', $login, PDO::PARAM_STR);
                $req->execute();
                
                if($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
                    $res = password_verify($mdp, $ligne['mdp']);
                }     
            }
            catch(PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }    
            return $res;
        }        
    }