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
    
    /*
    public function getUsers_byEmail(User $object) 
    {        
        $requete = $this->_bdd->prepare('SELECT * FROM users WHERE email = :email;');
        $requete->bindValue(':email', $object->getEmail(), PDO::PARAM_INT);
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);
        
        if ($object->getEmail() == $result['email'])
        {                      
            setcookie("password", $result['password'], time() + 365*24*3600, null, null, false, true);
            setcookie("nom", $result['nom'], time() + 365*24*3600, null, null, false, true);
            setcookie("prenom", $result['prenom'], time() + 365*24*3600, null, null, false, true);
            setcookie("tel", $result['tel'], time() + 365*24*3600, null, null, false, true);
            setcookie("website", $result['website'], time() + 365*24*3600, null, null, false, true);
            setcookie("sexe", $result['sexe'], time() + 365*24*3600, null, null, false, true);
            setcookie("birthdate", $result['birthdate'], time() + 365*24*3600, null, null, false, true);
            setcookie("ville", $result['ville'], time() + 365*24*3600, null, null, false, true);
            setcookie("taille", $result['taille'], time() + 365*24*3600, null, null, false, true);
            setcookie("couleur", $result['couleur'], time() + 365*24*3600, null, null, false, true);
            setcookie("profilepic", $result['profilepic'], time() + 365*24*3600, null, null, false, true);
            
        }
    }
    */
    
    /*
    public function getUsers_byEmail(User $object) 
    {        
        $requete = $this->_bdd->prepare('SELECT * FROM users WHERE email = :email;');
        $requete->bindValue(':email', $object->getEmail(), PDO::PARAM_INT);
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);
        
        if ($object->getEmail() == $result['email'])
        {                      
            session_start();
            $_SESSION['password'] = $result['password'];
            $_SESSION['nom'] = $result['nom'];
            $_SESSION['prenom'] = $result['prenom'];
            $_SESSION['tel'] = $result['tel'];
            $_SESSION['website'] = $result['website'];
            $_SESSION['sexe'] = $result['sexe'];
            $_SESSION['birthdate'] = $result['birthdate'];
            $_SESSION['ville'] = $result['ville'];
            $_SESSION['taille'] = $result['taille'];        
            $_SESSION['couleur'] = $result['couleur'];
            $_SESSION['profilepic'] = $result['profilepic'];
        }
    }
    */
    
    
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
        $requete = $this->_bdd->prepare('INSERT INTO users(email, password, nom, prenom, tel, website, sexe, birthdate, ville, taille, couleur, profilepic) '
                                        .'VALUES (:email, :password, :nom, :prenom, :tel, :website, :sexe, :birthdate, :ville, :taille, :couleur, :profilepic);');
        $requete->bindValue(':email', htmlentities($object->getEmail()) );
        $requete->bindValue(':password', htmlentities($object->getPassword()) );
        $requete->bindValue(':nom', htmlentities($object->getNom()) );
        $requete->bindValue(':prenom', htmlentities($object->getPrenom()) );
        $requete->bindValue(':tel', htmlentities($object->getTel()) );
        $requete->bindValue(':website', htmlentities($object->getWebsite()) );
        $requete->bindValue(':sexe', htmlentities($object->getSexe()) );
        $requete->bindValue(':birthdate', htmlentities($object->getBirthdate()) );
        $requete->bindValue(':ville', htmlentities($object->getVille()) );
        $requete->bindValue(':taille', htmlentities($object->getTaille()) );
        $requete->bindValue(':couleur', htmlentities($object->getCouleur()) );
        $requete->bindValue(':profilepic', htmlentities($object->getProfilepic()) );
        $requete->execute();
    }
    // --------------------------------------------------- //
    
}


?>