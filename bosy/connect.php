<?php


if (isset($_POST["Navn"]) && isset($_POST["Orgnr"]) && isset($_POST["Adresse"])){

  $navn   = $_POST["Navn"];
  $orgnr  = $_POST["Orgnr"];
  $adresse= $_POST["Adresse"];
  

}  



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "busy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Firmaer (Navn, Orgnr, Adresse) 
VALUES ('$navn', '$orgnr', '$adresse')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>