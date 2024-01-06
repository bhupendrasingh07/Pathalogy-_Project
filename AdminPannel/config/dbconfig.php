<?php

function getcon() {
    $conn = mysqli_connect('localhost', 'root', '', 'pathalogy');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function sql($query){
    return mysqli_query(getcon(),$query);
  }


?>