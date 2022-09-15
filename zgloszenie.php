<?php
       $lowisko = $_POST["lowisko"];
       $data = $_POST["data"];
       $sedzia = $_POST["sedzia"];

       $connection = new mysqli('localhost', 'root', '', 'wedkarstwo');


       if ($connection->connect_error) {
              die("Nie połączono: " . $conn->connect_error);
       }

       $sql = "INSERT INTO 'zawody_wedkarskie' ('id', 'Karty_wedkarskie_id', 'Lowisko_id', 'data_zawodow', 'sedzia') VALUES (NULL, '0', '$lowisko', '$data', '$sedzia')";
              
       $connection->query($sql);
       
       $connection->close();      
?>