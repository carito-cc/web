<?php
/*Exo-boucles-01
Créer un programme qui affiche un compte à rebours de 5 à 1.

1-. À l'aide d'une boucle while, faites en sorte que le compteur commence à 5 et s'arrête lorsqu'il atteint 1.
2-. Affichez dans le terminal la valeur du compteur à chaque itération de la boucle.
*/




/*Exo-boucles-02
Créer un compteur paramétrable dont la valeur de départ et la valeur de fin peuvent être définies à partir des 
variables $valDebut et $valFin.

1-. Déclarez et initialisez deux variables :
        $valDebut, qui représentera la valeur de départ du compteur
        $valFin, qui représentera la valeur d'arrêt
2-. À l'aide d'une boucle while, faites en sorte que le compteur commence à la valeur contenue dans $valDebut 
et s'arrête une fois qu'il atteint la valeur contenue dans $valFin.
3-. Affichez dans le terminal la valeur du compteur à chaque itération de la boucle, de $valDebut jusqu'à $valFin.
*/






/*
Exo-boucles-03
L'objectif de l'exercice suivant est de réaliser un petit programme avec la boucle while qui vous demandera de 
trouver un nombre mystère (entre 1 et 20) :

1-. Déclarez et initialisez la variable $nombreMystere avec la fonction rand() pour qu'elle renvoie un nombre 
entier de façon pseudo-aléatoire compris entre 1 et 20.
2-. Déclarez et initialisez la variable $compteur qui sera utiliser pour stocker le nombre de tentatives.
3-. Utilisez la fonction readline() pour que le programme vous demande de proposer un nombre jusqu'au moment votre
nombre sera égal à celui du nombre mystère.
4-. Si le nombre que vous proposez n'est pas le bon, le programme vous affichera ceci dans la console avant de vous
demander une nouvelle proposition :
        Si le nombre mystère est plus petit que le nombre proposé : "Le nombre mystère est plus petit!"
        Si le nombre mystère est plus grand que le nombre proposé : "Le nombre mystère est plus grand!"
5-. Finalement, lorsque le nombre mystère est trouvé, le programme affichera ceci : "Félicitations, vous avez 
découvert le nombre mystère : $nombreMystere en $compteur tentatives."
Comme nous n'avons pas encore vu la méthode rand(), je vais vous fournir le début de la solution :
    $nombreMystere = rand(1, 20);
*/
