<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connected</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <?php
        session_start();
        
        $login = "anonymous";
        $errorText = "";
        $successfullyLogged = false;

        $conn = new mysqli('localhost', 'root', 'root','connexion');
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            /*echo 'Connexion database reussi';
            echo "<br>";*/

            $sql = $conn->query("SELECT * from connexion");
        
        $errorText = "";
        $successfullyLogged = false;



        if(isset($_POST['login']) && isset($_POST['password'])) {
            $tryLogin=$_POST['login'];
            $tryPwd=$_POST['password'];
            while($row = $sql->fetch_assoc()){ 
              if($row['login']==$tryLogin && $row['password']==$tryPwd){
              $successfullyLogged = true;
              $login = $tryLogin;
              $pseudo=$row['pseudo'];
              } 
              else{
              $errorText = "Erreur de login/password veuillez réessayer<br> ";
              }
          }
      } 
            
            // si login existe et password correspond
            
            
        
        else
            $errorText = "Merci d'utiliser le formulaire de login";
        if(!$successfullyLogged) {
            echo $errorText;
        }
        else {
          $_SESSION['login'] = $tryLogin;
          echo "<h1>Bienvenue $pseudo.</h1>";
        }
        if ($_SESSION == array()){
          require_once("login.php");
        }
        else{
          $currentLogin = $_SESSION['login'];
          echo "<center> Vous êtes connecté en tant que $currentLogin";
          echo "<a href=\"disconnected.php\"><button type=\"button\">Déconnexion</button></a></center>";
        }

    ?>    
   
  </body>
</html>


