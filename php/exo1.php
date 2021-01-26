<?php
class Personnage {

    private $_pseudo;
    private $_vie;

    public function __construct($pseudo, $vie){
        $this->_pseudo = $pseudo;
        $this->_vie = $vie;
    }
    
    public function personnage() {

        echo "Yo mon nom est " .$this->_pseudo;
        echo ", j'ai " .$this->_vie;
    }

    public function getAttaque() {

    }

    public function attaque($pseudoAttack, $degat){
        echo "le joueur " . $pseudoAttack . "à perdu" . $degat . "vie";
    }
    public function defense($vAttaque) {

    }
}
?>