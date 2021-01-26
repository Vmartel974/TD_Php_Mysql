<?php
class personnage{

    private $_id;
    private $_vie;
    private $_pseudo;
 
    public function __construct($id, $pdo) 
    {
        $this->_id = $id;
        $this->_bdd = $pdo;
        $req = ("SELECT * FROM personnage WHERE id='".$id."'");
        $tab = $this->_bdd->query($req)->fetch();
    }
    public function affiche()
    {
        echo "Votre vie est de ".$this->_vie["vie"]." et votre pseudo est ". $this->_pseudo["pseudo"].".";
    }
    public function getPseudo()
    {
        return $this->_pseudo;
    }
}
