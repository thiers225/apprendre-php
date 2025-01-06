# Présentation de PHP

## Qu'est-ce que PHP ?  
**PHP**, ou *PHP: Hypertext Preprocessor*, est un langage de programmation libre conçu principalement pour le développement de pages web dynamiques via un serveur web. Il peut également être utilisé localement comme un langage interprété classique.  

PHP est un langage impératif qui prend également en charge la programmation orientée objet, offrant ainsi une grande flexibilité aux développeurs. Sa simplicité et sa puissance ont permis de créer des sites web emblématiques tels que **Facebook** et **Wikipédia**. Aujourd'hui, PHP est considéré comme un pilier du développement de sites web dynamiques et d'applications web interactives.  

---

## Syntaxe de base  

Le code PHP s'écrit entre les balises `<?php` et `?>`. Sa syntaxe est très proche de celle des langages **C** et **C++**, avec quelques particularités :  

- **Sensible à la casse** : PHP distingue les majuscules des minuscules (exemple : `$Nom` et `$nom` sont deux variables différentes).  
- **Point-virgule obligatoire** : Chaque instruction doit se terminer par un point-virgule (`;`), marquant la fin de l'instruction.  
- **Déclaration de variables** : Les variables commencent par le symbole `$`, suivi du nom de la variable.  

### Exemple de code :  
```php
<?php
  // Déclaration d'une variable
  $nom = "N'DRI";

  // Affichage de la variable
  echo "Bonjour, je m'appelle $nom.";
?>
