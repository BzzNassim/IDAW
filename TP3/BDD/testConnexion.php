<!DOCTYPE<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = "localhost"; $dbname = "connexion"; $user = "root"; $pass = "root";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $sth = $dbco->prepare("SELECT * FROM connexion");
                $sth->execute();
                
                
                $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
                $lenght=count($resultat);?>
                <table>
                <thead>
                    <tr>
                        <th colspan="1">login</th>
                        <th colspan="1">psw</th>
                        <th colspan="1">pseudo</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php



                for($i=0; $i<$lenght; $i++){?>
                    <tr>
                        <td><?php echo $resultat[$i]['login']; ?></td>
                        <td><?php echo $resultat[$i]['password']; ?></td>
                        <td><?php echo $resultat[$i]['pseudo']; ?></td>
                    </tr><?php

                }?>
                </tbody>
                </table>
<?php


            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>