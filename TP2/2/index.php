<!DOCTYPE html>
<html>
    <head>
        <title>Début PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <h1>L'heure :</h1>
        <?php
        $heure = date("H:i:s");
        Print($heure);
        date_default_timezone_set('Europe/Paris');
        $heure = date("H:i:s");
        echo '<br>';
        Print('L\'heure en France : '.$heure);
        echo '<br>';
        function bonjour(){
            echo 'Bonjour à tous <br>';
        }
        bonjour();
        
        $prenom = 'Pierre';
        function bonjourbis($p){
            echo 'Bonjour ' .$p. '<br>';
        }

        bonjourbis($prenom);



        $ages = ['Mathilde' => 27, 'Pierre' => 29, 'Amandine' => 21];

        
        foreach($ages as $clef => $valeur){
            echo $clef. ' a ' .$valeur. ' ans<br>';
        }
        ?>



    </body>
</html>