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


$personne1 = new Personne("RAKOTONIAINA", "Jean Charlys Lucah");
$personne2 = new Personne("Dieu", "Donné");


echo $personne1->presenter(); 
echo "<br>"; 
echo $personne2->presenter(); 
?>
