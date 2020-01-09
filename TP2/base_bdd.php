<form action="accueil.php" method="post">
    <input type="texte" name="id" placeholder="Identifiant">
    <button type="submit" name="button_co" > Connexion </button>
</form>

<?php

try {

    $bd=new PDO('mysql:host=localhost;dbname=php_tp2', 'root', '');
    $bd->query("SET NAMES 'utf8'");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req=$bd->prepare("");
    $req->execute();
    //$ligne=$req->fetch();
    //var_dump($ligne);

} catch(PDOException $e) {

    die("<p> La connexion a échouée. </p>");

}
?>