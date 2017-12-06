<?php
/**
 * @author Romain Lembo
 */

/**
 * @class A faire appel notamment dans les pages de traitements pour l'AJAX ou dans les pages d'interfaces.
 * @tutorial Cette classe gère les classes Question, Reponse, Theme, User.
 */

Class Manager
{
    /**
     * @var PDO De type PDO, cette variable-objet permet de se connecter à la BDD.
     * 
     * @tutorial Cette variable a été instanciée sur la page extend/bdd.php et sur les pages de traitements (dossiers main, admin, profil).
     */
    private $_bdd;
    
    // --------------------------------------------------- //
    // METHODES MAIN
    
    /**
     * @function Constructeur de la classe Manager permettant d'instancier des objet Manager afin de faire appel aux méthodes de cette classe.
     * 
     * @param PDO Variable-objet permettant de se connecter à la BDD.
     */
    public function __construct($bdd)
    {
        $this->setBdd($bdd);
    }
    
    /**
     * @function Permet au constructeur de la classe Manager de se connecter à une BDD.
     * 
     * @param PDO $bdd Variable-objet permettant de se connecter à la BDD.
     */
    public function setBdd(PDO $bdd)
    {
        $this->_bdd = $bdd;
    }
    // --------------------------------------------------- //
    
    // --------------------------------------------------- //
    // METHODES USER
    
    public function getUsers($json) 
    {
        $requete = $this->_bdd->prepare('SELECT * FROM users;');
        $requete->execute();
        $result = $requete->fetchAll(PDO::FETCH_ASSOC);
        
        return $json ? json_encode($result) : $result;
    }
    
    public function getUsers_byId(User $object, $json) 
    {        
        $requete = $this->_bdd->prepare('SELECT * FROM users WHERE id = :id;');
        $requete->bindValue(':id', $object->getId(), PDO::PARAM_INT);
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);
        
        return $json ? json_encode($result) : $result;
    }
    
    public function getConnexion(User $user, $redirection)
    {     
        $requete = $this->_bdd->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $requete->bindValue(':nom', $user->getNom());
        $requete->bindValue(':password', $user->getPassword());       
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);
		
        if ($user->getEmail() == $result['email'] && $user->getPassword() == $result['password'])
        {                      
            session_start();

            $_SESSION['id'] = $result['id'];
            $_SESSION['nom'] = $result['nom'];
            $_SESSION['prenom'] = $result['prenom'];
            $_SESSION['email'] = $result['email'];
        }
        else
        {   
            echo '<body onLoad="alert(\'Email ou mot de passe non reconnu\')">';
        }
                
        // puis on le redirige vers la page
        echo '<meta http-equiv="refresh" content="0;URL='.$redirection.'">';
    }
    // --------------------------------------------------- //
    
}


?>