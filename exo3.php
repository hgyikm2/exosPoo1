<h1>Exercice 3</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom
 et âge</p>

<?php

/*<?php
$origin = new DateTimeImmutable('2009-10-11');
$target = new DateTimeImmutable('2009-10-13');
$interval = $origin->diff($target);
echo $interval->format('%R%a days');
?>
Style procédural

<?php
$origin = date_create('2009-10-11');
$target = date_create('2009-10-13');
$interval = date_diff($origin, $target);
echo $interval->format('%R%a days');
?>*/

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION DE VARIABLES
//spl_autoload_register(function ($calcAge) {
//    include $calcAge . '.php';
// });
 
 

Class Personne {

    public $_nom="prenom" ;
    public $_prenom=" ";
    public $_datenaissance=" ";
    public $_dateCourante="2018-05-21";

    public function __construct($nom,$prenom,$datenaissance) {
       $this->_nom=$nom;
       $this->_prenom=$prenom;
       $this->_datenaissance=$datenaissance;
    }
    
    public function getNom() {
        return  $this->_nom;
    }

    public function getPrenom() {
        return  $this->_prenom;
    }

    public function age() {
        $dateTimenaissance = new DateTimeImmutable($this->_datenaissance);
        $dateTimeCourante = new DateTimeImmutable($this->_dateCourante);
        $interval = $dateTimeCourante->diff($dateTimenaissance);
        $y=$interval->y;
        $m=$interval->m ."mois " ;
        $d=$interval->d ."jours " ;
        return $y;
    }

    public function afficher() {
        //$birth=$this->date_numeric($this->_datenaissance);
        
        //$current=$this->date_numeric($this->_dateCourante);
       
        //$calc_age->birth($birth[0],$birth[1],$birth[2]);
        //$calc_age->currentDay($current[0],$current[1],$current[2]);
        //echo  "$birth[0] $birth[1] $birth[2] naissance";
        echo $this->getPrenom()." ".$this->getNom()." a ".$this->age()." ans<br>";
        //echo $calc_age->age()."ans";
    
    }

}

$p=new Personne("DUPONT","Michel","1980-02-19");
$p->afficher();

$p2=new Personne("DUCHEMIN", "Alice", "1985-01-17");
$p2->afficher();
//Cet exemple tente de charger les classes MaClasse1 et MaClasse2, 
//respectivement depuis les fichiers MaClasse1.php et MaClasse2.php.
//$obj  = new calcAge();

//$phrase = "Notre formation DL commence aujourd'hui";
//$_nbcharacters=10;
//CalcnbCphrase::combien();
//$nbphrasecalc = new CalcnbCphrase("test1");
//$nbphrasecalc->set("test1");
//$nbphrasecalc->getphrase();
//$nbphrasecalc::combien();
//echo $phrase;
