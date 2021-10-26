<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        if (isset($_POST["sitat"]) && isset($_POST["ff"])){

            $Sitat  = $_POST["sitat"];
            $FF  = $_POST["ff"];


            $myfile = fopen("text.txt", "a") or die("Unable to open file!");
            $txt = "$Sitat - $FF\n";
            fwrite($myfile, $txt);
            fclose($myfile);
            
        }
        
        $myfile = fopen("text.txt", "r") or die("Unable to open file!");
        $arr = Array();
        
        while(!feof( $myfile)){
            echo "<p>" . fgets($myfile) . "</p>";
        }
        fclose($myfile);

       
    ?>
     
     
</body>
</html>