<?php

class Personne {
    protected $nom;
    protected $prenom;

    
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    
    public function presenter() {
        return "Je m'appelle {$this->nom} {$this->prenom}.";
    }
}


$personne = new Personne("RAKOTONIAINA", "Jean Charlys Lucah");
echo $personne->presenter(); 
?>
