<h1>Exercice 2</h1>

<p>Ecrire une fonction personnalisée qui affiche 
une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date</p>

<?php

/*
    commentaire sur plusieurs lignes
    https://stackoverflow.com/questions/28895154/php-date-formatting-with-intldateformatter
*/

// DECLARATION DE VARIABLES

 
    function formaterDateFR($date) {

        $mois=["janvier",
        "fevrier",
        "mars",
        "avril",
        "mai",
        "juin",
        "juillet",
        "aout",
        "septembre",
        "octobre",
        "novembre",
        "decembre"] ;

        $moisduree=[31,
        29,
        31,
        30,
        31,
        30,
        31,
        31,
        30,
        31,
        30,
        31] ;

        $jours=["lundi",
        "mardi",
        "mercredi",
        "jeudi",
        "vendredi",
        "samedi",
        "dimanche"] ;
   

        $l1=strlen($date);
       $date=str_ireplace("-","",$date);
       $l2=strlen($date);
       
       $A=substr($date,0,4);
       $M=substr($date,4,2);
       $J=substr($date,6,2);
      
       //echo "$A <br>";
       //echo "$M <br>";
       //echo "$J <br>";
       
       $_mois=intval($M)-1;
      
       $_annee=intval($A);
       $duree=0;
       for ($i=0;$i<$_mois;$i++) {
        $duree=$duree+$moisduree[$i];
       }
       $_jour=$duree-floor(($duree/7))*7+1;

        echo "$jours[$_jour] $J "."$mois[$_mois] "."$_annee<br>";
   
       
    }

formaterDateFR("2018-02-23");
