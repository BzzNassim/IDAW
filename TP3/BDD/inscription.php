<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <form id="inscription" action="validation_inscription.php" method="POST">
        <table>
            <tr>
                <th>Login :</th>
                <td><input type="text" name="NewLogin"></td>
            </tr>
            <tr>
                <th>Pseudo :</th>
                <td><input type="text" name="NewPseudo"></td>
            </tr>
            <tr>
                <th>Mot de passe :</th>
                <td><input type="password" name="NewPassword"></td>
            </tr>
            <tr>
                <th>Confirmation mot de passe :</th>
                <td><input type="password" name="NewPassword"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Inscription" /></td>
            </tr>
        </table>
    </form>


   
  </body>
</html>



