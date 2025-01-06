<?php
// Variables.php

/**
 * Les variables en PHP
 * 
 * Une variable est un espace de stockage qui permet de conserver des données.
 * En PHP, une variable est déclarée en utilisant le symbole $ suivi du nom de la variable. 
 * Les variables sont dynamiques, ce qui signifie que leur type est déterminé automatiquement en fonction de la valeur qu'elles contiennent.
 */

/*
  Déclaration de variables en PHP :
  - Le nom d'une variable commence par le symbole $ suivi du nom de la variable.
  - Les noms de variables sont sensibles à la casse (distinction entre majuscules et minuscules)
  - Une variable peut contenir des types de données comme des chaînes, des nombres, des tableaux, etc.
*/

// Déclaration d'une variable contenant une chaîne de caractères
$nom = "Thierry"; 

// Affichage de la variable
echo "Bonjour, je m'appelle $nom.";

/*
 Règles de nommage des variables en PHP
 Les noms des variables doivent respecter certaines règles :
 -Doivent commencer par le signe $, suivi par une lettre ou un "_".
 -Ne peuvent pas commencer par un chiffre.
 -Peuvent contenir des lettres (a-z, A-Z), des chiffres (0-9) et des underscores (_).
 -Sont sensibles à la casse.
 */

 // Exemples de noms valides :

$variable; // Valide
$_variable; // Valide
$variable1; // Valide

$1variable; // Invalide : commence par un chiffre
$variable!; // Invalide : contient un caractère spécial
?>