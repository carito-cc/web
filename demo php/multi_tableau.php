<?php

//Construisez un tableau multidimensionnel nommé $listeDeFilmsParCategorie basé sur les clés et le contenu suivant 

$listeDeFilmsParCategorie = [
    'horreur' => [
    [
        'nomDuFilm' => 'Hellraiser',
        'realisateur' => 'Clive Barker',
        'annee' => 1987
    ],
    [   'nomDuFilm' => 'La Colline a des Yeux',
        'realisateur' => 'Alexandre Aja',
        'annee' => 2006
    ],
    [   'nomDuFilm' => 'Dikkenek',
        'realisateur' => 'Olivier Van Hoofstadt',
        'annee' => 2006
    ],
    ]
]; 

//À partir du tableau $listeDeFilmsParCategorie, affichez l'année de sortie du film "La Colline a des Yeux" en accédant à la valeur correspondante à l'aide des clés appropriées.
    echo "l'année de sortie du film {$listeDeFilmsParCategorie['horreur'][1]['nomDuFilm']} {$listeDeFilmsParCategorie['horreur'][1]['annee']}";

//Réalisez une mutation du tableau associatif $listeDeFilmsParCategorie en y ajoutant une nouvelle catégorie "science fiction" et ses films.
$listeDeFilmsParCategorie['scienceFiction' ] = [ 
    [
        'nomDuFilm' => 'Blade Runner 2049',
        'realisateur' => 'Denis Villeneuve',
        'annee' => 2017
    ],
    [   'nomDuFilm' => 'Dune',
        'realisateur' => 'Denis Villeneuve',
        'annee' => 2021
    ],
    [   'nomDuFilm' => 'Minority Report',
        'realisateur'=> 'steven Spielberg',
        'annee' => 2002
    ]
];

//Réalisez une mutation du tableau $listeDeFilmsParCategorie en ajoutant un nouveau film dans la catégorie "comédie", à l'aide d'une affectation avec les clés appropriées :
$listeDeFilmsParCategorie['comedie'] = [
    [
        'nomDuFilm' => 'Le Dîner de cons',
        'realisateur' => 'Francis Veber',
        'annee' => 1998
    ]
];
//À partir du tableau $listeDeFilmsParCategorie, réalisez une mutation en supprimant (avec unset()) le film Dune dans la catégorie "Science fiction".
unset ($listeDeFilmsParCategorie['scienceFiction'][1]);

//Réindexez la catégorie "Science fiction" avec array_values().
//$listeDeFilmsParCategorie = array_values($listeDeFilmsParCategorie['scienceFiction']);
print_r(array_values($listeDeFilmsParCategorie['scienceFiction']));

//Supprimez l'année de sortie du film "Le dîner de cons" (avec unset()).
unset ($listeDeFilmsParCategorie['comedie'][0]['annee']);

print_r($listeDeFilmsParCategorie);

//Créez la phrase suivante : "Hellraiser n'est pas un film de Steven Spielberg !" en ciblant les éléments appropriés du tableau $listeDeFilmsParCategorie. Utilisez la concaténation implicite (par exemple : "blablabla... {$monTableau['maCle'][0]} blibli...") et stockez le résultat dans une nouvelle variable.
echo "{$listeDeFilmsParCategorie ['horreur'][0]['nomDuFilm']} n'est pas un film de {$listeDeFilmsParCategorie ['scienceFiction'][2]['realisateur']}!";
