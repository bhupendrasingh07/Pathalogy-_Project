<?php
include('../config/dbconfig.php');

// Show Result 
function getAllAppointment(){
    $query = "SELECT * from appointments ";
    $res = sql($query);
    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }

    return $data;
        
   }



?>