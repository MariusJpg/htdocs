<?php

 if (isset($_POST["selectNavn"]) && isset($_POST["selectOrgnr"]) && isset($_POST["selectAdresse"])){

    $selectnavn   = $_POST["selectNavn"];
    $selectorgnr  = $_POST["selectOrgnr"];
    $selectadresse= $_POST["selectAdresse"];
    
  
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
  
  $sql = "SELECT Navn, Orgnr, Adresse FROM Firmaer WHERE Orgnr='$selectorgnr' OR Navn='$selectnavn' OR Adresse='$selectadresse'";

  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Navn: " . $row["Navn"]. " - Orgnr: " . $row["Orgnr"]. "-Adresse" . $row["Adresse"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>