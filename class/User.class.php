<?php
class User
{
    private $id;
    private $email;
    private $password;
    private $nom;
    private $prenom;
    private $tel;
    private $website;
    private $sexe;
    private $birthdate;
    private $ville;
    private $taille;
    private $couleur;
    private $profilepic;
    
    // Constructeur :
    /**
     * @param array $donnees Constructeur de la classe Question, prenant en paramètre un tableau contenant les propriétés de la table Questions. Ce tableau va en paramètre de la méthode Hydrade().
     * 
     * @tutorial Permet de créer un objet de type Question.
     */
    public function __construct(array $donnees)
    {
            $this->hydrate($donnees);
    }

    // Hydratation (Assigner des valeurs aux attributs) :
    /**
     * @param array $donnees Tableau contenant des propriétés avec des valeurs faisant appel aux méthodes Setter.
     * 
     * @tutorial Cette Méthode assigne des valeurs aux attributs en faisant appel à chaque Setter de chaque propriété afin de créer l'objet.
     */
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    
    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getTel() {
        return $this->tel;
    }

    function getWebsite() {
        return $this->website;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getBirthdate() {
        return $this->birthdate;
    }

    function getVille() {
        return $this->ville;
    }

    function getTaille() {
        return $this->taille;
    }

    function getCouleur() {
        return $this->couleur;
    }

    function getProfilepic() {
        return $this->profilepic;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setWebsite($website) {
        $this->website = $website;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    function setProfilepic($profilepic) {
        $this->profilepic = $profilepic;
    }
}
