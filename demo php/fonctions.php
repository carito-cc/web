<?php 
/*Objectif : Créer une fonction permettant de calculer la moyenne des nombres contenus dans un 
tableau et d'afficher un résultat détaillé sous forme de chaîne de caractères.
Instructions :

1- Copiez le code à compléter dans votre éditeur de code :*/
// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration de la fonction...
        ...
        ...
*/

// Le tableau dont en veut calculer la moyenne.
$listeDeNombres = [8, 7, 6.5, 4.5, 7, 8];

/* Appeler la fonction "afficherMoyenne()" pour afficher la liste des nombres du tableau 
listeDeNombres, ainsi que leur moyenne.*/
afficherMoyenne($listeDeNombres); // Affiche : La moyenne des nombres [ 8, 7, 6.5, 4.5, 7, 8 ] : 6.8333333333333

/*
2-Déclarez votre fonction afficherMoyenne() avec le paramètre suivant :
    - $nombres : Le tableau des nombres dont il faut calculer la moyenne.

Complétez son bloc d'instructions :
    -Calculer la moyenne des nombres du tableau passé en argument. Attention aux erreurs pouvant
    être générées par un tableau vide (division par zéro)
    -Convertir le tableau en chaîne de caractères.
    -Afficher la chaîne de caractères (liste des nombres) suivie du résultat de la moyenne.

Vous aurez besoin des fonctions prédéfinies suivantes :

    implode() : Permet de convertir un tableau en chaîne de caractères.
    array_sum() : Permet de calculer la somme des éléments d'un tableau.
    Pour obtenir plus d'informations concernant cette méthode, rendez-vous sur la documentation 
    officielle de PHP.
*/

/* 
Objectif : Réorganiser le code réalisé lors de l'exercice précédent en décomposant la logique en 2 petites fonctions. 
Cela permettra à chaque fonction de se concentrer sur une tâche spécifique, rendant le code plus clair, plus facile à 
maintenir et plus évolutif.

Instructions :

1- Copiez le code à compléter dans votre éditeur de code :*/

// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration de la fonction...
        ...
        ...
*/

// Le tableau dont en veut calculer la moyenne.
$listeDeNombres = [8, 7, 6.5, 4.5, 7, 8];

// Appeler la fonction "calculerMoyenne()" pour calculer les nombres présents dans le tableau "$listeDeNombres".
$moyenne = calculerMoyenne($listeDeNombres);

// Convertir le tableau en chaîne de caractères.
$listeDeNombres = convertirTableauEnChaineDeCaracteres($listeDeNombres);

// Afficher la moyenne.
echo "La moyenne des nombres [ $listeDeNombres ] : $moyenne"; // Affiche : La moyenne des nombres [ 8, 7, 6.5, 4.5, 7, 8 ] : 6.8333333333333

/*
2-Déclarez votre fonction calculerMoyenne() avec le paramètre suivant :
    $nombres : Un tableau avec les nombres dont il faut calculer la moyenne.

Complétez son bloc d'instructions :
    Retourner la moyenne des nombres contenus dans le tableau passé en argument, tout en évitant les erreurs en cas de tableau vide (division par zéro).

Déclarez votre fonction convertirTableauEnChaineDeCaracteres() avec le paramètre suivant :
    nombres() : Le tableau que l'on souhaite convertir en chaîne de caractères.

Complétez son bloc d'instructions :
    Retourner la conversion en chaîne de caractères du tableau passé en argument avec une virgule et un espace séparant chaque éléments , .
*/

/*Objectif : Développer une série de fonctions permettant d'afficher la moyenne des nombres contenus dans un tableau, en ne prenant en compte que les valeurs valides (c'est-à-dire les valeurs numériques). Ces fonctions afficheront également le résultat de la somme, en précisant les valeurs utilisées pour le calcul ainsi que celles ayant été rejetées.

Instructions :

Copiez le code à compléter dans votre éditeur de code :
*/
// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration des 4 fonctions...
        ...
        ...
*/

// Le tableau dont en veut calculer la moyenne.
$listeDeNombres = [8, 'trois', 7, 6.5, 'cinq', 4.5, 7, 8];

// Appeler la fonction "afficherMoyenne()" pour calculer et afficher les nombres présents dans le tableau "$listeDeNombres".
afficherMoyenne($listeDeNombres);
/*
    Affiche :
        La moyenne des nombres [ 8, 7, 6.5, 4.5, 7, 8 ] : 6.8333333333333
        Les valeurs ayant été rejetées ['trois', 'cinq']
*/

/*
2-Déclarez votre fonction calculerSomme() ( array_sum() maison ) avec le paramètre suivant :
    $nombres : Un tableau avec les nombres dont il faut calculer la somme.

Complétez son bloc d'instructions :
    Parcourir les valeurs du tableau passé en argument $nombres, additionner chaque valeur numérique au résultat de la somme et ajouter les valeurs valides dans un tableau de sortie.
    Retourner un tableau avec la somme et le tableau avec les nombres valides.

3- Déclarez votre fonction calculerMoyenne() avec le paramètre suivant :
    $nombres : Un tableau avec les nombres dont il faut calculer la moyenne.

Complétez son bloc d'instructions :
    Récupérer la somme et les tableaux des nombres valides à l'aide de la fonction calculerSomme().
    Calculer la moyenne.
    Retourner un tableau avec la moyenne et le tableau avec les nombres valides.

4- Déclarez votre fonction convertirTableauEnChaineDeCaracteres() avec le paramètre suivant :
    $nombres : Le tableau que l'on souhaite convertir en chaîne de caractères.

Complétez son bloc d'instructions :

    Retourner la conversion en chaîne de caractères du tableau passé en argument avec une virgule et un espace séparant chaque éléments , .

5-Déclarez votre fonction afficherMoyenne() avec le paramètre suivant :
    $nombres : Le tableau que l'on souhaite convertir en chaîne de caractères.

Complétez son bloc d'instructions :
    Récupérer la moyenne et les tableaux des nombres valides à l'aide de la fonction calculerMoyenne().
    Créer un tableau avec les nombres invalides (non-numériques) à l'aide de la fonction prédéfinie array_diff(), du tableau d'origine $nombres et du tableau ne contenant que les nombres valides.
    Utiliser la fonction convertirTableauEnChaineDeCaracteres() pour convertir le tableau des nombres invalides ainsi celui des nombres valides en chaînes de caractères.
    Afficher les deux tableaux convertis ainsi que la moyenne.

Vous aurez besoin de la fonction prédéfinie suivante :

    array_diff() : Permet de comparer plusieurs tableaux et de retourner un tableau contenant les éléments présents dans le premier tableau mais absents des autres tableaux comparés..
    Pour obtenir plus d'informations concernant cette méthode, rendez-vous sur la documentation officielle de PHP.
*/