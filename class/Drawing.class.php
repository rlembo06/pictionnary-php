<?php
class Drawing
{
    private $id;
    private $commandes;
    private $id_user;
    private $draw;
    
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

    function getCommandes() {
        return $this->commandes;
    }

    function getId_user() {
        return $this->id_user;
    }

    function getDraw() {
        return $this->draw;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCommandes($commandes) {
        $this->commandes = $commandes;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setDraw($draw) {
        $this->draw = $draw;
    }
}