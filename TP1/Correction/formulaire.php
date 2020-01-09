<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sécurité</title>
</head>

<body>
    <h1>Ce site est sécurisé</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <p>Mot de passe pour accéder à la page <input type="password" name="mdp"></p>
    </form>
</body>
</html>