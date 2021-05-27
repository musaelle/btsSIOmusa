<?php
			                  
    require_once("connexion.php");	
    
    class ObjetDAO{


        // retourne un tableau associatif à 2 dimensions (ligne / colonne) contenant tous les objets		
        public static function readAll() {
            $resultat = array();
            
            $req = "SELECT numero, nomCommun, libelle FROM objet join typeObjet ON codeType = code ORDER BY 1";

            try {
                $curseur = Connexion::getInstance()->query($req);
                
                //plusieurs lignes de résultat
                while ($ligne = $curseur->fetch(PDO::FETCH_ASSOC)) {
                    $resultat[] = $ligne;
                }            
                return $resultat;
            }
            catch(PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
        }

        // retourne un tableau associatif à 2 dimensions (1 ligne / n colonnes) contenant toutes les constellations
        // On retourne un tableau à 2 dimensions pour harmoniser les traitements de la vue résultat
        public static function getObjetByNumero($numeroObj) {
            $resultat = array();
            
            try {
                $req = Connexion::getInstance()->prepare("SELECT * FROM objet join typeObjet ON codeType = code WHERE numero = :numeroObj");
                $req->bindValue(':numeroObj', $numeroObj, PDO::PARAM_STR);
                $req->execute();
                
                //une seule ligne de résultat traitée comme s'il y en avait plusieurs (pour harmoniser la vue résultat)
                while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
                    $resultat[] = $ligne;
                }            
                return $resultat;

            }
            catch(PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
        } 

    }   
?>