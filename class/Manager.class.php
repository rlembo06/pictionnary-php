<?php
/**
 * @author Romain Lembo
 */

/**
 * @class A faire appel notamment dans les pages de traitements pour l'AJAX ou dans les pages d'interfaces.
 */

Class Manager
{
    /**
     * @var PDO De type PDO, cette variable-objet permet de se connecter à la BDD.
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
    
    public function getUsers_byEmail(User $object, $json) 
    {        
        $requete = $this->_bdd->prepare('SELECT * FROM users WHERE email = :email;');
        $requete->bindValue(':email', $object->getEmail(), PDO::PARAM_INT);
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);
        
        return $json ? json_encode($result) : $result;
    }
    
    
    public function existUser(User $object)
    {
        $result = false;
        
        $requete = $this->_bdd->prepare('SELECT COUNT(*) FROM users WHERE email = :email;');
        $requete->bindValue(':email', $object->getEmail(), PDO::PARAM_INT);
        $requete->execute();

        $count = $requete->fetch()[0];
        return $result = $count > 0 ? true : false;
    }
    
    public function getConnexion(User $object, $redirection)
    {     
        $requete = $this->_bdd->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $requete->bindValue(':nom', $object->getNom());
        $requete->bindValue(':password', $object->getPassword());       
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);
	
        if ($object->getEmail() == $result['email'] && $object->getPassword() == $result['password'])
        {                      
            session_start();

            $_SESSION['id'] = $result['id'];
            $_SESSION['nom'] = $result['nom'];
            $_SESSION['prenom'] = $result['prenom'];
            $_SESSION['email'] = $result['email'];
        }
        else echo '<body onLoad="alert(\'Email ou mot de passe non reconnu\')">';
                
        // puis on le redirige vers la page
        echo '<meta http-equiv="refresh" content="0;URL='.$redirection.'">';
    }
    
    public function createUser(User $object)
    {   
        //$sexe = '';
        //if (array_key_exists('sexe', $object)) $sexe = stripslashes($object->getSexe());  
        
        $email       = stripslashes($object->getEmail());
        $password    = stripslashes($object->getPassword());
        $nom         = $object->getNom() != "" ? stripslashes($object->getNom()) : null;
        $prenom      = $object->getPrenom() != "" ? stripslashes($object->getPrenom()) : null;
        $tel         = $object->getTel() != "" ? stripslashes($object->getTel()) : null;
        $website     = $object->getWebsite() != "" ? stripslashes($object->getWebsite()) : null;
        //$sexe        = array_key_exists('sexe', $object) ? stripslashes($object->getSexe()) : null; 
        $sexe        = $object->getSexe() != "" ? stripslashes($object->getSexe()) : null;
        $birthdate   = stripslashes($object->getBirthdate());
        $ville       = stripslashes($object->getVille());
        $taille      = $object->getTaille() != "" ? stripslashes($object->getTaille()) : null;
        $couleur     = stripslashes(explode("#", $object->getCouleur())[1]);
        $profilepic  = $object->getProfilepic() != "" ? stripslashes($object->getProfilepic()) : null;
        
        $requete = $this->_bdd->prepare('INSERT INTO users(email, password, nom, prenom, tel, website, sexe, birthdate, ville, taille, couleur, profilepic) '
                                        .'VALUES (:email, :password, :nom, :prenom, :tel, :website, :sexe, :birthdate, :ville, :taille, :couleur, :profilepic);');
        $requete->bindValue(':email', $email);
        $requete->bindValue(':password', $password);
        $requete->bindValue(':nom', $nom);
        $requete->bindValue(':prenom', $prenom);
        $requete->bindValue(':tel', $tel);
        $requete->bindValue(':website', $website);
        $requete->bindValue(':sexe', $sexe);
        $requete->bindValue(':birthdate', $birthdate);
        $requete->bindValue(':ville', $ville);
        $requete->bindValue(':taille', $taille);
        $requete->bindValue(':couleur', $couleur);
        $requete->bindValue(':profilepic', $profilepic);
        $requete->execute();
    }
     
    // --------------------------------------------------- //
    
}


?>