<?php
function Connect(){
  
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
}



if (isset($_POST["Navn"]) && isset($_POST["Orgnr"]) && isset($_POST["Adresse"])){
  
  Connect();
  $navn   = $_POST["Navn"];
  $orgnr  = $_POST["Orgnr"];
  $adresse= $_POST["Adresse"];
  
  $sql = "INSERT INTO Firmaer (Navn, Orgnr, Adresse) 
  VALUES ('$navn', '$orgnr', '$adresse')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}  
if (isset($_POST["Fornavn"]) && isset($_POST["Etternavn"]) && isset($_POST["Nummer"]) && isset($_POST["FirmaID"])){
  Connect();s
  $fornavn   = $_POST["Fornavn"];
  $etternavn  = $_POST["Etternavn"];
  $nummer= $_POST["Nummer"];
  $firmaid= $_POST["FirmaID"];
  
  $sql = "INSERT INTO Personer (Fornavn, Etternavn, nummer, firmaid) 
  VALUES ('$fornavn', '$etternavn', '$nummer', '$firmaid')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
} 






?>
