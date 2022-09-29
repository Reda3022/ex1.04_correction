<?php
// on decalre et on affecte notre tableau
$groupe=[
    [   'nom'=> 'Filali',
        'prenom' =>'Xavier',
        'taille' =>1.57,
        'poids'=>70,
        'code'=>'H123'
     ],
    [   'nom'=> 'Santchi',
        'prenom' =>'Olivier',
        'taille' =>1.3,
        'poids'=>45,
        'code'=>'H234'
    ]
];
//Ajouter la case bmi avec la valeur de la premier ligne
$groupe[0]['bmi']=$groupe[0]['poids']/($groupe[0]['taille']*$groupe[0]['taille']);
//Ajouter la case bmi avec la valeur de la deuxieme ligne
$groupe[1]['bmi']=$groupe[1]['poids']/($groupe[1]['taille']*$groupe[1]['taille']);

var_dump($groupe);

//foreach ($groupe[0] as $key => $personne){
//        echo $key. '<br>';
//   }
//parcours complet du tablea 2d

for ($i = 0; $i < count($groupe); $i++) {
    // parcours chaque ligne
    foreach ($groupe[$i] as $personne) {
        echo $personne, "-";
    }
    echo "<br>";
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css.css">
    <title>Php-Exercice 1.4</title>
</head>
<body>
<h1>exercice 1.4</h1>
<table>

    <thead>
    <tr>
    <!--    les en-têtes du tableau 2 d-->
        <th>Nom</th>
        <th>Prénom</th>
        <th>Taille</th>
        <th>poids</th>
        <th>Code</th>
        <th>Bmi</th>
    </tr>
    </thead>

    <tbody>
<!--    on met 2 for pour afficher notre tableau a 2d-->
<!--    debut de la boucle for-->
    <?php for ($i = 0; $i < count($groupe); $i++) { ?>
        <tr>
             <?php foreach($groupe[$i] as $personne)  { ?>
                <td><?php  echo $personne?><br></td>
             <?php } ?>
        </tr>
<!--    fin de la boucle for    -->
    <?php } ?>
    <tbody\>

</table>

</body>
</html>