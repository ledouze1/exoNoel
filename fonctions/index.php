<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les fonctions en php</title>
</head>
<body>
<!--
    1) Écrivez une fonction qui prend une chaîne de caractères en entrée et renvoie une chaîne de caractères qui contient tous les caractères de la chaîne d'entrée, mais en ordre inverse.
    2) Écrivez une fonction qui prend un tableau de chaînes de caractères en entrée et renvoie un tableau de chaînes de caractères qui contient toutes les chaînes du tableau d'entrée, mais en ordre alphabétique.
    3) Écrivez une fonction qui prend un tableau d'entiers en entrée et renvoie le nombre d'éléments du tableau qui sont supérieurs à la moyenne des éléments du tableau.
    4) Écrivez une fonction qui prend un entier en entrée et renvoie le nombre de diviseurs de cet entier.
    5) Écrivez une fonction qui prend un tableau d'entiers en entrée et renvoie le nombre de valeurs uniques dans le tableau.
-->

<?php

//exo1------------------------------------
function inv($phrase){
    return strrev($phrase);
}
echo inv("Joyeux Noel");

?><br><?php
?><br><?php

//exo2------------------------------------
function alph($tabs){
    sort($tabs);
    foreach ($tabs as $tab) {
        echo ucfirst($tab.', ');
    }
}

$pays = array("france", "espagne", "belgique", "japon", "chine");
alph($pays);

?><br><?php

//ou ---------- 

function alpha($tabl){
    sort($tabl);
    return $tabl;
}

$country = array("france", "espagne", "belgique", "japon", "chine");
$countryTri = alpha($country);
echo implode(", ", $countryTri);

?><br><?php

//ou ---------- mix des 2

function alphab($tableau){
    sort($tableau);
    echo implode(", ", $tableau);
}

$nation = array("france", "espagne", "belgique", "japon", "chine");
alphab($nation);

?><br><?php
?><br><?php

//exo3------------------------------------
function sup($entiers){
    $moyenne = array_sum($entiers)/count($entiers);
    foreach ($entiers as $entier) {
        if ($entier > $moyenne){
            echo ($entier.', ');
        }
    }
}

$nbr = array( 10, 20, 35, 55, 92, 100, 112);
sup($nbr);

?><br><?php
?><br><?php

//exo4------------------------------------
function diviseur($nbr) {
    $diviseurs = 0;
    for ($i = 1; $i <= $nbr; $i++) {
        if ($nbr % $i == 0) {
            $diviseurs++;
        }
    }
    return $diviseurs;
}
echo diviseur(9);

?><br><?php
?><br><?php

//exo5------------------------------------
function valuniq($nombres) {
    return count(array_unique($nombres)); // array_unique() extrait du tableau array les valeurs distinctes et supprime tous les doublons.
    //return implode(" - ",array_unique($nombres)); // plutot que compter, affiche les valeur unique avec un tiret entre
}
$tab = array(10, 10, 12, 14, 14, 48, 48, 56, 77, 92);
echo valuniq($tab);


?>
</body>
</html>