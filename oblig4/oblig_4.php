<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblig4</title>
</head>
<body>
    <?php
        if (isset($_POST["name"]) && isset($_POST["ganger"])) {
            $navn  = $_POST["name"];
            $ganger  = $_POST["ganger"];
            for($i = 0; $i < $ganger; $i++){
                echo "Hei på deg $navn - ";
            }
        }        
    ?>
</body>
</html>



        
