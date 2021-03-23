<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
  <?php
           //database connexion 
           $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $database='connexion';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password,$database);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            /*echo 'Connexion database reussi';
            echo "<br>";*/
            $a=$_POST['NewLogin'];
            $b=$_POST['NewPassword'];
            $c=$_POST['NewPseudo'];
            echo $a;
            $sql = $conn->query("INSERT INTO connexion (Login,Password,Pseudo)
            VALUES ('$a','$b','$c')");
            ?>
<h2> Vous avez bien été inscrit en tant que <?php echo $_POST['NewLogin']?></h2>
<a href=login.php>Connexion</a>
   
  </body>
</html>

