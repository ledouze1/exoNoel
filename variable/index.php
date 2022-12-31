<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les variables en PHP</title>
</head>
<body>
<!--

1) Créez une variable $nom et affectez-lui votre nom. Affichez la variable avec echo.
2) Créez une variable $age et affectez-lui votre âge. Affichez la variable avec echo.
3) Créez une variable $estEtudiant et affectez-lui true si vous êtes étudiant, false sinon.
     Affichez la variable avec echo.
4) Créez une variable $taille et affectez-lui votre taille en centimètres. Affichez la variable avec echo.
5) Créez une variable $prix et affectez-lui le prix d'un article à 50 euros.
     Affichez le prix avec echo en utilisant la fonction number_format pour afficher le prix avec des virgules comme séparateur des milliers.
6) Créez une variable $phrase et affectez-lui une phrase de votre choix.
     Affichez la longueur de la phrase avec echo en utilisant la fonction strlen.
7) Créez une variable $texte et affectez-lui un texte de votre choix.
     Affichez la première lettre du texte avec echo en utilisant la fonction substr.
8) Créez une variable $nombre et affectez-lui un nombre de votre choix.
     Affichez le nombre au carré avec echo en utilisant l'opérateur **.
9) Créez une variable $nombre1 et affectez-lui un nombre de votre choix.
     Créez une variable $nombre2 et affectez-lui un autre nombre de votre choix.
     Affichez la somme des deux nombres avec echo en utilisant l'opérateur +.
10) Créez une variable $animal et affectez-lui le nom d'un animal de votre choix.
     Affichez la variable avec echo en utilisant la fonction strtoupper pour mettre le nom de l'animal en majuscules.
-->


<?php

//exo1------------------------------------
$nom = "Didier";
echo $nom;

?><br><?php

//exo2------------------------------------
$age = 45;
echo $age;

?><br><?php

//exo3------------------------------------
$estEtudiant = true;
echo $estEtudiant;
?><br><?php
if ($estEtudiant) {
     echo "est Etudiant";
}

?><br><?php

//exo4------------------------------------
$taille = "177";
echo $taille.'cm';

?><br><?php

//exo5------------------------------------
$prix = 50;
echo number_format($prix-0.01, 2, ',', '').'€'; 
//number_format(nombre à formater, le nombre de décimales(qui s'arrondira au besoin), caractère utilisé comme séparateur de décimales ,caractère utilisé comme séparateur de milliers)

?><br><?php

//exo6------------------------------------
$phrase = "Tout roule, no problème";
echo strlen($phrase); // les lettre avec accent compte pour 2
?><br><?php
//vérifier si une chaîne de caractères est vide ou non :
if (strlen($phrase) > 0) {
     echo 'la phrase existe, elle est bien: '.$phrase;
} else {
     echo 'la phrase n\'existe pas';
}

?><br><?php

//exo7------------------------------------
//avec la variable du 6 
echo substr($phrase, 0, 10); 
//($phrase, 0, 10) indique le début et la fin - donc 0, 1 pour l'énoncé
//($phrase, 12) indique les 12 premiers carractères à retirer

?><br><?php

//exo8------------------------------------
$nombre = 42;
echo $nombre.' au carré est égal à '.$nombre ** 2;

?><br><?php

//exo9------------------------------------
$nbr1 = 11;
$nbr2 = 12;
echo 'la somme de '.$nbr1.' et de '.$nbr2.' est: '.($nbr1+$nbr2); 

?><br><?php
//exo10-----------------------------------
$animal = 'Toto';
echo strtoupper($animal);
?>

</body>
</html>
