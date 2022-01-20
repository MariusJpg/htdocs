<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("person.php") ?>
</head>
<body>

    <form action="oop1.php" method="POST" >
    



    <label for="type"></label>

        <select name="type" id="type">
            <option value="Clausen">Clausen</option>
            <option value="Marius">Marius</option>
            <option value="Thomas">Thomas</option>
        </select><br>

    <input type="submit" value="submit">

    
    <?php

    $marius = new person("Marius Jensen", "18", "696969", "69dv@mango.ru");
    $clausen = new person("Sander Clausen", "18", "111110", "pppopo@hack.ru");
    $thomas = new person("Thomas Mekker Hoe", "18", "113112110", "mrhacker@russia.ru");

if (isset($_POST["Clausen"]) && isset($_POST["Marius"]) && isset($_POST["Thomas"])){
    $Claus  = $_POST["Clausen"];
    $Mar  = $_POST["Marius"];
    $Thom  = $_POST["Thomas"];





  if ($Claus){

    echo "hele navet til clausen er: " .$clausen->get_name() . "<br>";
    echo "alderen til Clausen er: " .$clausen->get_alder() . "<br>";
    echo "Nummere til Clausen er: " .$clausen->get_mobil() . "<br>";
    echo "Eposten til Clausen er: " .$clausen->get_epost() . "<br>";

  }
    
  if ($Mar){

    echo "hele navet til Marius er: " .$marius->get_name() . "<br>";
    echo "alderen til Marius er: " .$marius->get_alder() . "<br>";
    echo "Nummere til Marius er: " .$marius->get_mobil() . "<br>";
    echo "Eposten til Marius er: " .$marius->get_epost() . "<br>";

 
  }
  if ($Thom){

    echo "hele navet til Thomas er: " .$thomas->get_name() . "<br>";
    echo "alderen til Thomas er: " .$thomas->get_alder() . "<br>";
    echo "Nummere til Thomas er: " .$thomas->get_mobil() . "<br>";
    echo "Eposten til Thomas er: " .$thomas->get_epost() . "<br>";
  }


}

?>
</form>


   
</body>
</html>