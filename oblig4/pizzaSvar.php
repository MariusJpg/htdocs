<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblig4</title>
</head>
<body>
    <?php
        if (isset($_POST["name"]) && isset($_POST["adresse"]) && isset($_POST["type"]) && isset($_POST["hentes"]) && isset($_POST["ekstra"]))
         {


            $navn  = $_POST["name"];
            $adresse  = $_POST["adresse"];
            $type  = $_POST["type"];
            $hentes  = $_POST["hentes"];
            $ekstra = $_POST["ekstra"];


            echo "Takk for din bestilling kjære $navn!";
            echo "Du har valgt en $type pizza med ekstra ost ";
            echo "Leveres i $adresse";

        }        
    ?>
</body>
</html>



        
