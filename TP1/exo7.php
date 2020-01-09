<?php

$personnes = [
  'mdupond' => ['Prénom' => 'Martin', 'Nom' => 'Dupond', 'Age' => 25, 'Ville' => 'Paris'       ],
  'jm'      => ['Prénom' => 'Jean'  , 'Nom' => 'Martin', 'Age' => 20, 'Ville' => 'Villetaneuse'],
  'toto'    => ['Prénom' => 'Tom'   , 'Nom' => 'Tonge' , 'Age' => 18, 'Ville' => 'Epinay'      ],
  'arn'     => ['Prénom' => 'Arnaud', 'Nom' => 'Dupond', 'Age' => 33, 'Ville' => 'Paris'       ],
  'email'   => ['Prénom' => 'Emilie', 'Nom' => 'Ailta' , 'Age' => 46, 'Ville' => 'Villetaneuse'],
  'dask'    => ['Prénom' => 'Damien', 'Nom' => 'Askier', 'Age' => 7 , 'Ville' => 'Villetaneuse']
];


/* 7.1 
$pseudo_trouve=0;
if (isset($_GET["pseudo"]) and !preg_match("#^ +$#", $_GET["pseudo"]) ){
  foreach($personnes as $c => $v){
    if($_GET["pseudo"]==$c){
      foreach ($v as $cle => $val){
        echo "$cle : $val, ";
        $pseudo_trouve==1;
      }
    }
  }
  if($pseudo_trouve==0) echo "Désolé, votre pseudonyme n'apparait pas dans la liste.";
}
else{
  echo "Veuillez entrer un pseudonyme dans l'url.";
}
*/


/* 7.2 
echo "<form action='exo7.php' method='post'>
  <input type='texte' name='pseudo' placeholder=".$_POST["pseudo"].">
    <button type='submit' name='button_co' > Connexion </button>
</form>";

$cbon=False;
if (isset($_POST["pseudo"]) and !preg_match("#^ +$#", $_POST["pseudo"]) ){
  foreach($personnes as $c => $v){
    if($_POST["pseudo"]==$c){
      foreach ($v as $cle => $val){
        echo "$cle : $val, ";
        $cbon=True;
      }
    }
  }
}
if($cbon!=True)
echo "Désolé, votre pseudonyme n'apparait pas dans la liste.";
*/

/* 7.3 */

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

echo "<form action='exo7.php' method='post'>
  <input type='texte' name='pseudo' placeholder='pseudonyme'>
  <input type='texte' name='prenom' placeholder='prenom'>
  <input type='texte' name='nom' placeholder='nom'>
  <input type='integer' name='age' placeholder='age'>
  <input type='texte' name='ville' placeholder='ville'>
    <button type='submit' name='button_co' > Ajouter </button>
</form>";

$tabl=['Prénom' => $_POST["prenom"], 'Nom' => $_POST["nom"], 'Age' => $_POST["age"], 'Ville' => $_POST["ville"] ];
$personnes[$_POST["pseudo"]]=$tabl;
tablehtml($personnes);
//var_dump($personnes);


?>