<?php

// Exo 1

$age = 18;

// Exo 2

$isEasy = true;


// Exo 3

$AgeType = 9;
$Genre = "Homm";

// Exo 4

$magnitude = 6;


// Exo 5

$gender = "Homm";

// Exo 6

$AgeExo6 = 19;

// Exo 7

$isOk = false;




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="Exo1">
        <h2>
            Exo1
        </h2>
        <p>
            <?php echo $age . " ans ";
            if ($age > 18) {
                echo "vous êtes majeur";
            } else {
                echo "vous êtes mineur";
            }    ?>
        </p>
    </div>
    <div class="Exo2">
        <h2>
            Exo 2
        </h2>
        <p>
            <?php
            if ($isEasy) {
                echo "C'est facile !!";
            } else {
                echo "C'est difficile !!!!";
            }
            ?>
        </p>
    </div>
    <div class="Exo3">
        <h2>
            Exo3
        </h2>
        <p>
            <?php
            if ($Genre == "Homme") {
                echo "Vous êtes un homme";
            } else {
                echo "Vous êtes une femme";
            }
            if ($AgeType > 18) {
                echo " et vous êtes majeur";
            } else {
                echo " et vous êtes mineur";
            }

            ?>
        </p>
    </div>

    <div class="Exo4">
        <h2>
            Exo4
        </h2>
        <p>
            <?php
            switch ($magnitude) {
                case 1:
                    echo "Micro-séisme impossible à ressentir.";
                    break;
                case 2:
                    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                    break;
                case 3:
                    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                    break;
                case 4:
                    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                    break;
                case 5:
                    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                    break;
                case 6:
                    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                    break;
                case 7:
                    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                    break;
                case 8:
                    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                    break;
                case 9:
                    echo "Séisme capable de tout détruire sur une très vaste zone.";
                    break;
            }

            ?>
        </p>
    </div>
    <div class="Exo5">
        <h2>
            Exo5
        </h2>
        <p>
            <?php 
            
            if($gender != "Homme"){
                echo "C'est une developpeuse !!!";
            } else {
                echo "C'est un développeur !!!";
            }
            
            ?>
        </p>
    </div>

    <div class="Exo6">
        <h2>
            Exo 6
        </h2>
        <p>
            <?php 
            if($AgeExo6 >= 18){
                echo "Vous êtes majeur";
            } else {
                echo "Vous êtes mineur";
            }
            ?>
        </p>
    </div>
    <div class="Exo7">
        <h2>
            Exo 7
        </h2>
        <p>
            <?php 
            if($isOk == false){
                echo "C'est pas bon !!!";
            } else {
                echo "C'est ok !!";
            }
            
            ?>
        </p>
    </div>
    <div class="Exo8">
        <h2>
            Exo8
        </h2>
        <p>
            <?php  
            if($isOk){
                echo "C'est ok !!!";
            } else {
                echo "C'est pas bon !!";
            }
            
            ?>
        </p>
    </div>





</body>

</html>