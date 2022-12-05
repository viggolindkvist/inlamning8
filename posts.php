<?php

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inlamning8";
    $conn = new mysqli($servername, $username, $password, $dbname);




$data = "SELECT * FROM guestbook";
    $result = $conn->query($data);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<hr> Name: " . $row["name"]. "<br><br> Email: " . $row["email"]. "<br> Homepage: " . $row["homepage"]. "<br> Comment: " . $row["comment"]. "<br><br> Posted: " . $row["time"];
        }
      } else {
        echo "0 results";
      }