<h1>Exercice 15</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie)</p>

<?php

class Voiture {

public $marque;
public $model;

public function setModele($modele){
    $this->_modele=$modele;
}

public function setMarque($marque){
    $this->_marque=$marque; 
}

public function getMarque(){
    return $this->_marque;
}

public function getModele(){
    return $this->_modele;
}
public function getInfos() {
    echo "marque:". $this->getmarque()."<br>";
    echo "modele:". $this->getmodele()."<br>";
}
}

class VoitureElec extends Voiture {

public $autonomie;
public function setAutonomie($autonomie){
    $this->_autonomie=$autonomie;
}
public function getAutonomie(){
    return $this->_autonomie;
}

public function getInfos() {
    echo "marque:". $this->getmarque()."<br>";
    echo "modele:". $this->getmodele()."<br>";
    echo "autonomie:". $this->getautonomie()."<br>";
}
}

$v1=new Voiture();
$v1->setMarque("Peugeot");
$v1->setModele("408");
$v1->getInfos();
echo "<br>";
$ve1=new VoitureElec();
$ve1->setMarque("BMW");
$ve1->setModele("I3");
$ve1->setAutonomie(100);
$ve1->getInfos();