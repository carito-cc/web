<?php
$eleve1 = 'Sébastien';
$eleve2 = 'Martine';
$eleve1NoteMath = 4;
$eleve2NoteFrancais = 2;

echo 'Comme dirait '  .$eleve2 . ': ' . $eleve1 . ' est un cancre, il n\'a que ' 
. ($eleve1NoteMath + $eleve2NoteFrancais)/2 . ' de moyenne.'. PHP_EOL;


$claudyVousDitBonjour = 'coucou petite perruche !' . PHP_EOL;

$claudyVousDitaurevoir = str_replace('coucou', 'aurevoir', $claudyVousDitBonjour);

echo $claudyVousDitaurevoir . PHP_EOL; 