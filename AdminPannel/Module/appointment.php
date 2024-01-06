<?php
    include('../Model/AppoinmentModel.php');
    $result = getAllAppointment();
    $data = array();

    if ($result !== false) {
        foreach ($result as $res) {
            $data[] = $res;
        }
    }
    header('Content-Type: application/json; charset=utf-8');
    if (!empty($data)) {
        echo json_encode(['success' => true, 'data' => $data]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to retrieve data']);
    }
    
    
    


?>