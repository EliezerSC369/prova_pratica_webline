<?php
    if (!isset($_SESSION)){
        session_start();
    }
?>
<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="webline";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

   

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());   
    }
      
     $sql = "INSERT INTO automoveis (nome, placa, chassi, montadora) VALUES ('" . $_SESSION['n'] . "','" . $_SESSION['p'] . "','" . $_SESSION['c'] . "','" . $_SESSION['m'] . "')";
      
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
?>
<?php
session_destroy();
?>