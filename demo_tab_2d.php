<?php


//initialisation dutableau 2d

$cars = [
    [3, 150, 'rouge'],
    [5, 80, 'blue']
];

var_dump($cars);

for ($i = 0; $i < count($cars); $i++) {
   var_dump($cars[$i]); //afficahge technique
}

for ($i = 0; $i < count($cars); $i++) {
    for ($j = 0; $j < count($cars[$i]); $j++) {
        echo $cars[$i][$j], "-";
    }
}

// initialisation d'un talbeau 2d indicé et associatif
$cars2 = [
    [
        'nbporte' => 3,
        'puissance' => 150,
        'couleur' => 'rouge'
    ],
    [
        'nbporte' => 5,
        'puissance' => 80,
        'couleur' => 'bleu'
    ]
];
//affichage technique
var_dump($cars2);

// lire une valeur
echo $cars2[1]['couleur'], '<br>';


//parcours complet du tablea 2d
for ($i = 0; $i < count($cars); $i++) {
    // parcours chaque ligne
    foreach ($cars[$i] as $uneVoiture) {
        echo $uneVoiture, "-";
    }
}
