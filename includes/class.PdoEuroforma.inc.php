<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PdoEuroforma
{
    private static $serveur = 'mysql:host=localhost';//private c est que dans la classe mere static le meme pour tte la classe  localhost serveur locale
    private static $bdd = 'dbname=Euroforma';
    private static $user = 'root';
    private static $mdp = 'root';
    private static $monPdo;
    private static $monPdoeuroforma= null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
private function __construct()
    {
        PdoEuroforma::$monPdo = new PDO(//cree une methode qui va instancier une classe pour creer un nouvel objet 
            PdoEuroforma::$serveur . ';' . PdoEuroforma::$bdd,
            PdoEuroforma::$user,
            PdoEuroforma::$mdp
        );
        PdoEuroforma::$monPdo->query('SET CHARACTER SET utf8');//query c est qd on lance la requete 
    }


    /**
     * Méthode destructeur appelée dès qu'il n'y a plus de référence sur un
     * objet donné, ou dans n'importe quel ordre pendant la séquence d'arrêt.
     */
    public function __destruct()
    {
        PdoEuroforma::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();
     *
     * @return l'unique objet de la classe PdoGsb
     */
    public static function getPdoeuroforma()
    {
        if (PdoEuroforma::$monPdoeuroforma == null) {
            PdoEuroforma::$monPdoeuroforma = new PdoEuroforma ();
        }
        return PdoEuroforma::$monPdoeuroforma;
    }

    /**
     * Retourne les informations d'un visiteur
     *
     * @param String $login Login du visiteur
     * @param String $mdp   Mot de passe du visiteur
     *
     * @return l'id, le nom et le prénom sous la forme d'un tableau associatif
     */
    public function getInfosUtilisateur($login, $mdp)
    {
        $requetePrepare = PdoEuroforma::$monPdo->prepare(
        'SELECT utilisateur.nom AS nom '
            . 'FROM utilisateur '
            . 'WHERE utilisateur.login = :unLogin AND utilisateur.mdp = :unMdp'
        );
        $requetePrepare->bindParam(':unLogin', $login, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unMdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }
     public function getListeEleves()
   {
       $requetePrepare = PdoEuroforma::$monPdo->prepare(
           'SELECT  eleve.ideleve AS id,'
           . 'eleve.nom as nom,'
           . 'eleve.prenom AS prenom '
           . 'FROM eleve'

       );
       $requetePrepare->execute();
       return $requetePrepare->fetchAll();
   }
   public function getListeFormateurs()
   {
       $requetePrepare = PdoEuroforma::$monPdo->prepare(
           'SELECT  formateur.idformateur AS id,'
           . 'formateur.nom as nom,'
           . 'formateur.prenom AS prenom '
           . 'FROM formateur'

       );
       $requetePrepare->execute();
       return $requetePrepare->fetchAll();
   }
   
   public function getNbAbsences($idEleve)
   {
       $dateactuel=date('m');
       $date=$dateactuel.substr($dateactuel,4,2);
       echo $date;
       $requetePrepare = PdoEuroforma::$monPdo->prepare(
           'SELECT COUNT (presence),'
               . 'idEleve,'
               . 'nom ,'
               . 'prenom '
               . ' FROM eleve join emargement USING(idEleve) '
               . '               join seance USING (idSeance)'
               . 'WHERE idEleve = :unidEleve  AND presence =  "NON" AND substr(date,4,2)==:date'
          
      
         );
       $requetePrepare->bindParam(':unidEleve', $idEleve, PDO::PARAM_STR);
       $requetePrepare->bindParam(':date', $date, PDO::PARAM_STR);
       $requetePrepare->execute();
       return $requetePrepare->fetchAll();
   }
   public function getNbSeanceTotal()
   {
        $requetePrepare = PdoEuroforma::$monPdo->prepare(
                'SELECT COUNT(idSeance) '
                . 'FROM seance '
                  );
           
       $requetePrepare->execute();
       return $requetePrepare->fetchAll();
                
   }
   public function getLesSeances() {
       $requetePrepare = PdoEuroforma::$monPdo->prepare(
               'SELECT  * '
               . 'FROM seance '

       );
       $requetePrepare->execute();
       return $requetePrepare->fetchAll();
   }
   public function getEmargementFait($idseance)
   {
      $requetePrepare = PdoEuroforma::$monPdo->prepare(
               'SELECT  emarge '
              . 'FROM seance '

       );
       $requetePrepare->execute();
       return $requetePrepare->fetchAll();
   }
    public function getLesEleves()
   {
      $requetePrepare = PdoEuroforma::$monPdo->prepare(
               'SELECT  idEleve, nom, prenom '
              . 'FROM eleve '

       );
       $requetePrepare->execute();
       return $requetePrepare->fetchAll();
   }   
   public function getEnregistrement(){
       $requetePrepare = PdoEuroforma::$monPdo->prepare(
               'INSERT INTO emargement(presence, motif) '
               . 'VALUES(:presence, :motif )'
       );
       $requetePrepare->bindParam(':presence',$presence);
       $requetePrepare->bindParam(':motif',$motif);
       $requetePrepare->execute();
       return $requetePrepare->fetchAll();
       
       //On renvoie l'utilisateur vers la page de remerciement
        header("Location:v_valide-emarge.php");
    }
    
}