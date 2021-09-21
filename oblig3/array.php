<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php

    $elever = array(
        "Elev 1" => array("Navn: " => "Marius", "Etternavn: " => " Jensen", "Klasse: " => " Klasse: 3DAA ", "Karakter: " => "Karakter: 6" , "Tidsbruk: " => " Tid: 1 timer"),
        "Elev 2" => array("Navn: " => "Thomas", "Etternavn: " => " Jensen", "Klasse: " => " Klasse: 3DAA ", "Karakter: " => "Karakter: 2" , "Tidsbruk: " => " Tid: 6 timer"),
        "Elev 3" => array("Navn: " => "Luan", "Etternavn: " => " Jensen", "Klasse: " => " Klasse: 3DAA ", "Karakter: " => "Karakter: 5" , "Tidsbruk: " => " Tid: 3 timer"),
        "Elev 4" => array("Navn: " => "Szymon", "Etternavn: " => " Jensen", "Klasse: " => " Klasse: 3DAA ", "Karakter: " => "Karakter: 6" , "Tidsbruk: " => " Tid: 4 timer"),
    );

    $elever["Elev 5"] = array("Navn: " => "Erling", "Etternavn: " => " Jensen", "Klasse: " => " Klasse: 3DAA ", "Karakter: " => "Karakter: 1" , "Tidsbruk: " => " Tid: 10 timer");

    foreach($elever as $indeks => $verdi) {
        echo $indeks . ": <br>";
        echo $verdi["Navn: "];
          
        echo $verdi["Etternavn: "] . "<br>" ;
        echo $verdi["Klasse: "] . "<br>";
        echo $verdi["Karakter: "] . "<br>";
        echo $verdi["Tidsbruk: "] . "<br><br>";    
    }
    ?>



    <?php
    $nummer = array();

    for($i = 0; $i < 100; $i++) {
        $nummer[$i] = rand(0, 1000);
    }

    foreach($nummer as $indeks => $verdi){
        if (    $verdi <500){
            echo "$verdi <br>";
        }
    }
    ?>


    <?php 
    $hobby = array
    (
        "Jakt" => array("sikte", "skyte", "drepe"),
        "Fugletitting" => array("se", "observere", "notere"),
        "Spise fugl" => array("ta ut kula", "salte og peppre", "steke." )


    );
    
    $size = 0;

    foreach($hobby as $indeks => $verdi) {
        $size += count($verdi);
    }
    echo "<ul>";
    
    foreach($hobby as $indeks => $verdi){
        echo "<li>$indeks:</li>";

        echo"<ul>";
        
        foreach($verdi as $indeks2 => $verdi2){
            echo"<li>$verdi2</li>";
            
        }
        
        echo"</ul>";
    }
    
    echo "</ul>";
    ?>
</body>
</html>