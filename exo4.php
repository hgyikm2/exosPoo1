<h1>Exercice 4</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée displayInfos() pourra afficher toutes les informations 
d’un véhicule</p>

<?php

Class Voiture {

    public $_marque="" ;
    public $_modele=" ";
    public $_nbportes=" ";
    public $_vitesseActuelle=0;
    public $_demarre=false;

    public function demarrer(){
        echo "le vehicule". $this->getMarque()." ".$this->getModele()." demarre<br>";
        $this->_demarre=true;
        $this->_vitesseActuelle=0;
    }

    public function accelerer($km){
        if ($this->_demarre==true){
        for ($i=0;$i<$km;$i++) {
            $this->_vitesseActuelle=$this->_vitesseActuelle+1;
            //$this->testVitesse();
        }
        echo "le vehicule". $this->getMarque()." ".$this->getModele()." accelere de $km kilometre heure <br>";
        }
    }

    public function ralentir($vitesse){
        if ($this->_demarre==true){
        while ($this->_vitesseActuelle>$vitesse) {
            $this->_vitesseActuelle=$this->_vitesseActuelle-1;
            $this->testVitesse();
        }
        echo "le vehicule". $this->getMarque()." ".$this->getModele()." est a ". $this->_vitesseActuelle." kilometre heure <br>";
        }
    }

    public function stopper(){
        echo "le vehicule $_modele stoppe"; 
        $_vitesseActuelle=0;
        $this->_demarre=false;
    }

    public function setModele($modele){
        $this->_modele=$modele;
    }

    public function setMarque($marque){
        $this->_marque=$marque; 
    }

    public function setNbportes($nbportes){
        $this->_nbportes=$nbportes;
    }

    public function getMarque(){
        return $this->_marque;
    }

    public function getNbportes(){
        return $this->_nbportes;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function displayInfos() {
        echo "marque:". $this->getmarque()."<br>";
        echo "modele:". $this->getmodele()."<br>";
        echo "nbportes:". $this->getNbportes()."<br>";
        if ($this->_vitesseActuelle==0) {
            echo "le vehicule ".$this->getMarque()." ".$this->getModele()." est a l'arret<br>";
        }
    }

    public function testVitesse(){
        if ($this->_vitesseActuelle<30) {
            echo "le vehicule ".$this->getMarque()." ".$this->getModele()." veut accelerer de 20 kilometre heures<br>"; 
           
        } 
        if ($this->_vitesseActuelle==0) {
            echo "pour accelerer il faut demarrer le vehicule ".$this->getMarque()." ".$this->getModele()." <br>"; 
        }
    }

    public function displayVitesse(){
       
        echo "la vitesse du vehicule ".$this->getMarque()." ".$this->getModele()." est de ".$this->_vitesseActuelle." kilometre heures<br>"; 
           
    }
}


$v=new Voiture();
$v->setMarque("Peugeot");
$v->setModele("408");
$v->setNbportes(5);
$v->demarrer();
$v->accelerer(50);
$v->displayInfos();
$v->displayVitesse();
//$v->ralentir(10);

$v=new Voiture();
$v->setMarque("Citroen");
$v->setModele("C4");
$v->setNbportes(3);
echo "le vehicule ".$v->getMarque()." ".$v->getModele()." est stoppe<br>";  
$v->demarrer();
$v->testVitesse();
$v->displayInfos();
$v->displayVitesse();
