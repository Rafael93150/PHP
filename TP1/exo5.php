<?php

$tabMagazines = [
  'le monde'              => ['frequence' => 'quotidien', 'type' => 'actualité', 'prix' => 220],
  'le point'              => ['frequence' => 'hebdo'    , 'type' => 'actualité', 'prix' => 80 ],
  'causette'              => ['frequence' => 'mensuel'  , 'type' => 'féministe', 'prix' => 180],
  'politis'               => ['frequence' => 'hebdo'    , 'type' => 'opinion'  , 'prix' => 100],
  'le monde diplomatique' => ['frequence' => 'mensuel'  , 'type' => 'analyse'  , 'prix' => 60 ]
];

$tabMagazinesAbonne = ['le monde', 'le monde diplomatique'];

echo "<h2>1.</h2>";

$tab = array_keys($tabMagazines);    #récupère les clés et les met dans un tableau
sort($tab);                #ordonne le tableau
$chaine = implode(", " , $tab);   #transforme le tableau ordonné en chaine de caractères sépaés par une virgule
echo "$chaine" ;



echo "<h2>2.</h2>";

echo "<ul>";
$x=0;
foreach ($tabMagazines as $key => $val) {

  echo "<li> $key (";

  $c = array_keys($tabMagazines)[$x];
  $v = $tabMagazines[$c];

  foreach ($v as $c => $v) {

    if($c == "prix"){
      echo "$v";
    }
    else echo "$v, ";

  }
  $x+=1;
  echo ")</li>";
}
echo "</ul>";



echo "<h2>3.</h2>";

$prix = 0;
foreach ($tabMagazinesAbonne as $c) {
  foreach ($tabMagazines as $k => $v) {
    if($c == $k){
      $prix += $v['prix'];
    }
  }
}

echo "$prix";

?>
