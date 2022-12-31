<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les boucles en PHP</title>
</head>
<body>

<!--
    1) Créez une boucle for qui affiche les nombres de 1 à 10.
    2) Créez une boucle while qui affiche les nombres de 1 à 10.
    3) Créez une boucle do while qui affiche les nombres de 1 à 10.
    4) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres pairs.
    5) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres impairs.
    6) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui saute le nombre 5.
    7) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui s'arrête au nombre 5.
    8) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche le nombre 5 en rouge et les autres nombres en noir.
    9) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 5.
    10) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 7.
    11) Créez un tableau contenant les noms de 5 de vos amis.
         Utilisez une boucle foreach pour afficher chaque nom dans une liste HTML en utilisant la balise <li>.
    12) Créez un tableau contenant les noms de 5 de vos amis.
         Utilisez une boucle foreach pour afficher chaque nom dans une phrase différente, par exemple "Mon ami s'appelle nom_amis".
    13) Créez un tableau contenant 5 noms de fruits et utilisez une boucle foreach pour afficher chaque fruit.
    14) Créez un tableau associatif qui associe des noms de fruits à leurs couleurs respectives et utilisez une boucle foreach pour afficher chaque fruit et sa couleur.
    15) Créez un tableau contenant des nombres et utilisez une boucle foreach pour afficher la somme de tous les nombres.
    16) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en majuscules.
    17) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en minuscules.
    18) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en capitalisant la première lettre du nom.
    19) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher chaque personne et son âge.
    20) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher uniquement les personnes âgées de plus de 30 ans.
    21) Créez un tableau contenant des noms de villes et utilisez une boucle foreach pour afficher chaque ville précédée de la phrase "J'aimerais visiter la ville de".
    22) Créez un tableau associatif qui associe des noms de villes à leurs pays respectifs et utilisez une boucle foreach pour afficher chaque ville et son pays.
-->


<?php

//1) Créez une boucle for qui affiche les nombres de 1 à 10.
$i = 1;
for ($i=1; $i<=10;$i++){
    echo $i.' ';
}

?><br><?php

//2) Créez une boucle while qui affiche les nombres de 1 à 10.
$nbr = 1;
while ($nbr <=10){
    echo ($nbr.' ');
    $nbr++;
}

?><br><?php

//3) Créez une boucle do while qui affiche les nombres de 1 à 10.
$nbr = 1;
do{
    echo $nbr.' ';
    $nbr++;
}
while ($nbr <= 10);

?><br><?php

//4) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres pairs.
$i = 1;
for ($i=2; $i<=10; $i+=2){
    echo $i.' ';
}
//ou
?><br><?php
$i = 1;
for ($i=1; $i<=5; $i++){
    echo ($i+$i).' ';
}

?><br><?php

//5) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres impairs.
$i = 1;
for ($i=1; $i<=10; $i+=2){
    echo $i.' ';
}

?><br><?php

//6) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui saute le nombre 5.

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i.' ';
}

?><br><?php

//7) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui s'arrête au nombre 5.
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break;
    }
    echo $i.' ';
}
//ou
?><br><?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        goto fin;
    }
    echo $i.' ';
}
fin:
echo 'fin des 5 premiers';

?><br><?php

//8) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche le nombre 5 en rouge et les autres nombres en noir.
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "<span style='color: red;'>$i </span>";
    } else {
    echo "<span style='color: black;'>$i </span>";
    }
}

?><br><?php

//9) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 5.
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo $i.' ';
        //break;
    }  
}

?><br><?php

//10) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 7.
for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) {
        echo $i.' ';
        //break;
    }  
}

?><br><?php

//11) Créez un tableau contenant les noms de 5 de vos amis.
//Utilisez une boucle foreach pour afficher chaque nom dans une liste HTML en utilisant la balise <;>.
$amis = array("Aragorn", "Legolas", "Gimli", "Elrond", "Galadriel");
echo "<ul>";
foreach ($amis as $amli) {
    echo "<li>$amli</li>";
}
echo "</ul>";

//12) Créez un tableau contenant les noms de 5 de vos amis.
//Utilisez une boucle foreach pour afficher chaque nom dans une phrase différente, par exemple "Mon ami s'appelle nom_amis".
$amis = array("Aragorn", "Legolas", "Gimli", "Elrond", "Galadriel");
$i = 1;
foreach ($amis as $amli) {
    echo "Mon ami s'appelle $amli.<br />";
    $i++;
}
//ou ??? 
foreach ($amis as $amli) {
    if ($amli == $amis[0]) {
        echo "$amis[0] est roi.<br />"; //seul les echos avec index suffiraient
    } elseif ($amli == "Legolas") {
        echo "Trop de $amli tue le $amli.<br />";
    } elseif ($amli == "Gimli") {
        echo "$amli est cool.<br />";
    } elseif ($amli == $amis[3]) {
        echo "$amis[3] a l'air d'avoir un sacré balai.<br />";
    } elseif ($amli == "Galadriel") {
        echo "$amli ... no comment.<br />";
    } 
}

?><br><?php

//13) Créez un tableau contenant 5 noms de fruits et utilisez une boucle foreach pour afficher chaque fruit.
$fruits = array("pomme", "kiwi", "banane", "poire ", "orange");
foreach ($fruits as $frulist) {
    echo ucfirst($frulist.' ');
}

?><br><?php

//14) Créez un tableau associatif qui associe des noms de fruits à leurs couleurs respectives et utilisez une boucle foreach pour afficher chaque fruit et sa couleur.
$fruits = array(
    "pomme" => "rouge", 
    "prune" => "mauve", 
    "banane" => "jaune", 
    "poire " => "verte", 
    "orange" => "orange"
);
foreach ($fruits as $frulist => $couleur) {
    echo "Une $frulist est de couleur $couleur.<br />";
}

?><br><?php

//15) Créez un tableau contenant des nombres et utilisez une boucle foreach pour afficher la somme de tous les nombres.
$nbrs = array(11, 12, 31, 6, 9);
$somme = 0;
foreach ($nbrs as $nbr) {
    $somme += $nbr;
}
echo "La somme du tableau est $somme";
?><br><?php
//ou
echo "La somme du tableau est ".array_sum($nbrs);

?><br><?php

//16) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en majuscules.
$pays = array("france", "espagne", "belgique", "japon", "chine");
foreach ($pays as $payslist) {
    echo strtoupper($payslist.' ');
}

?><br><?php

//17) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en minuscules.
$pays = array("france", "espagne", "belgique", "JAPON", "chine");
foreach ($pays as $payslist) {
    echo strtolower($payslist.' ');
}

?><br><?php

//18) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en capitalisant la première lettre du nom.
$pays = array("france", "espagne", "belgique", "japon", "chine");
foreach ($pays as $payslist) {
    echo ucfirst($payslist.' ');
}

?><br><?php

//19) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher chaque personne et son âge.
$personnes = array(
    "jean" => 61,
    "marc" => 25,
    "Pierre" => 11,
    "enzo" => 32,
);
foreach ($personnes as $personne => $age){
    echo "$personne a $age ans <br />";
}

?><br><?php

//20) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher uniquement les personnes âgées de plus de 30 ans.
$personnes = array(
    "clovis" => 44,
    "paul" => 20,
    "Patrick" => 14,
    "henry" => 32,
);
foreach ($personnes as $personne => $age){
    if ($age > 30){
        echo "$personne a $age ans <br />";
    }  
}

?><br><?php

//21) Créez un tableau contenant des noms de villes et utilisez une boucle foreach pour afficher chaque ville précédée de la phrase "J'aimerais visiter la ville de".
$villes = array("Tokyo", "Varsovie", "Prague", "New-York");
foreach ($villes as $ville){
    echo "J'aimerais visiter la ville de $ville<br />";

}
?><br><?php

//22) Créez un tableau associatif qui associe des noms de villes à leurs pays respectifs et utilisez une boucle foreach pour afficher chaque ville et son pays.
$villes = array(
    "Paris" => "France",
    "Londre" => "Angleterre",
    "Prague" => "République Tchèque",
    "varsovie" => "Pologne",
    "Berlin" => "Allemagne",
);
foreach ($villes as $ville => $pays){
    echo "la ville de $ville se trouve en $pays<br />";
}

?>
</body>
</html>