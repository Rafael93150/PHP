<?php

$personnes = [
  'mdupond' => ['Prénom' => 'Martin', 'Nom' => 'Dupond', 'Age' => 25, 'Ville' => 'Paris'       ],
  'jm'      => ['Prénom' => 'Jean'  , 'Nom' => 'Martin', 'Age' => 20, 'Ville' => 'Villetaneuse'],
  'toto'    => ['Prénom' => 'Tom'   , 'Nom' => 'Tonge' , 'Age' => 18, 'Ville' => 'Epinay'      ],
  'arn'     => ['Prénom' => 'Arnaud', 'Nom' => 'Dupond', 'Age' => 33, 'Ville' => 'Paris'       ],
  'email'   => ['Prénom' => 'Emilie', 'Nom' => 'Ailta' , 'Age' => 46, 'Ville' => 'Villetaneuse'],
  'dask'    => ['Prénom' => 'Damien', 'Nom' => 'Askier', 'Age' => 7 , 'Ville' => 'Villetaneuse']
];

$scores = [
  ['Joueur' => 'Camille'  , 'score' => 156 ],
  ['Joueur' => 'Guillaume', 'score' => 254 ],
  ['Joueur' => 'Julien'   , 'score' => 192 ],
  ['Joueur' => 'Nabila'   , 'score' => 317 ],
  ['Joueur' => 'Lorianne' , 'score' => 235 ],
  ['Joueur' => 'Tom'      , 'score' => 83  ],
  ['Joueur' => 'Michael'  , 'score' => 325 ],
  ['Joueur' => 'Eddy'     , 'score' => 299 ]
];

function tablehtml($tab){

  $cles = array_keys($tab)[0];  #$cles est la première clé du tableau contenant toutes les clés.
  $v = $tab[$cles];             #récupère le tableau qui est la valeur de la clé $v

  foreach ($v as $c => $val) {  #Pour chaque clé de $v....
    echo "<td> $c </td>";
  }

  echo "<table>";

    foreach ($tab as $c => $ligne){
      echo "<tr> ";

        foreach ($ligne as $key => $value) {
          echo "<td> $value </td>";
        }

      echo "</tr>";
    }

  echo "</table>";
}

tablehtml($scores);
 ?>
