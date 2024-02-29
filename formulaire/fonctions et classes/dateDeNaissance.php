<?php
class Personne {
    protected $nom;
    protected $prenom;
    protected $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function presenter() {
        return "Je m'appelle {$this->nom} {$this->prenom}.";
    }

    public function age() {
        
        $aujourdhui = new DateTime();
        $dateNaissance = DateTime::createFromFormat('d-m-Y', $this->dateNaissance);
        $difference = $dateNaissance->diff($aujourdhui);
        return $difference->y; 
    }
}


$personne = new Personne("RAKOTONIAINA", "Jean Charlys Lucah", "18-12-2003");
echo $personne->presenter(); 
echo "<br>";
echo "J'ai {$personne->age()} ans."; 
?>
