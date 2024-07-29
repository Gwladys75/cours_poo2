<?php
require_once "classes/Compte.php";
require_once "classes/CompteCourant.php";
require_once "classes/CompteEpargne.php";


function debug($var)
{

    echo '<pre>';

    var_dump($var);

    echo '</pre>';
}

// On instancie le compte
$compte1 = new CompteCourant('Roberto', 500, 200);
// $compte1->setSolde(200);
// $compte1-decouvert = 200
// echo "Le solde du compte est : " . $compte1->getSolde();
$compte1->retirer(200);
$compte1->setTitulaire('Julius');
// $compte1->

debug($compte1);

// $compte2 = new CompteCourant();
// debug($compte2);




// On instancie le compte
$compte2 = new CompteEpargne('Elisha', 200, 10);
debug($compte2);

// $compte2 = new CompteCourant();
// debug($compte2);

$compte2->calculInterets();
debug($compte2);