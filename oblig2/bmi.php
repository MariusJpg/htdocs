<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bmi.php</title>
</head>
<body>
<?php




if (isset($_POST["name"]) && isset($_POST["height"]) && isset($_POST["weight"]) && isset($_POST["gender"])){}

$navn   = $_POST["name"];
$hoyde  = $_POST["height"];
$vekt   = $_POST["weight"];
$kjonn  = $_POST["gender"];

$a = $hoyde;
$b = $vekt;

$bmi = ($b / ($a * $a))*10000;


echo "$bmi";

if ($bmi < 17){
    echo "$navn, Spis";
}

elseif ($bmi >=17 && $bmi<25){
    echo "$navn, Ja";
}

else {
    echo "$navn, Nei";
}

?>

</body>
</html>




