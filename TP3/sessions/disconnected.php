<!doctype html>
<html>
    <head>
        <title>Déconnexion</title>
        <link rel="stylesheet" href="style.css" type="text/css"
        media="screen" title="default" charset="utf-8" />
    </head>
    <?php
        session_start();
        session_unset();
        session_destroy();
    ?>
    <body>
        <h1>Vous avez bien été deconnecté</h1>
        <a href='login.php'>Retour à page de connexion</a>
    </body>
</html>