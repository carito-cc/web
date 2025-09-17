<?php

//Utilisez la structure conditionnelle if...else pour afficher un message approprié à partir de la variable suivante :
//$estPresent;
//Si le ministre était présent : affichez "Le ministre était présent".
//Si le ministre n'était pas présent : affichez "Le ministre était absent".
//Pour tester les deux situations, modifiez manuellement la valeur de la variable $estPresent. Mettez-la d'abord à true pour vérifier le premier cas, puis à false pour vérifier le second.

$estPresent = True;
$estPresent = False;

if ($estPresent) {
    echo "Le ministre était présent\n";
} else {
    echo "la ministre était absent\n";
};

//Réalisez à nouveau l'exercice 1, mais cette fois-ci, utilisez la structure conditionnelle ternaire.
$text = $estPresent ? "Le ministre était present\n" : "Le ministre était absent\n";
echo $text;

//Utilisez la structure conditionnelle if... elseif... else pour afficher le message approprié en fonction de la valeur entrée par l'utilisateur à l'aide de la fonction readline() et stockée dans la variable $etatEbriete. 3 états d'ébriété sont acceptés : (0 = sobre, 1 = joyeux, 2 = ivre) :
//$etatEbriete = readline("Quel était l'état d'ébriété du ministre (0 = sobre, 1 = joyeux, 2 = ivre) : ");
//Si l'état d'ébriété est 0, affichez "Le ministre est sobre et responsable !"
//Si l'état d'ébriété est 1, affichez "Le ministre est joyeux !"
//Si l'état d'ébriété est 2, affichez "Le ministre est ivre !"
//Si l'état d'ébriété ne correspond à aucune de ces valeurs, affichez "Erreur ! État d'ébriété inconnu !"
//Testez les différentes valeurs de la variable $etatEbriete pour vous assurer que les messages s'affichent correctement en fonction de l'état d'ébriété.

$etatEbriete = readline("Quel était l'état d'ébriété du ministre (0 = sobre, 1 = joyeux, 2 = ivre): ");

if ($etatEbriete == 0)
{
    echo "Le ministre est sobre et responsable!\n";
}
elseif($etatEbriete == 1)
{
    echo "Le ministre est joyeux!\n";
}
elseif($etatEbriete == 2)
{
    echo "Le ministre est ivre!\n";
}
else
{
    echo "Erreur ! État d'ébriété inconnu!\n";
};
