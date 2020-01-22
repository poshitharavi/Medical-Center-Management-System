<?php
require_once '../database/connection.php';

//get the post body details
$postData = file_get_contents('php://input');
$data = json_decode($postData, TRUE);//convert the JSON

//insert statement
$sql = "DELETE FROM medical_center_management_system.appointments WHERE appointmentID ='".$data['id']."'";
if($stmt = $pdo->prepare($sql)){

    // Attempt to execute the prepared statement
    if($stmt->execute()){
        // Records created successfully. Redirect to landing page
        echo json_encode("success");
        exit();
    } else{
        echo json_encode("failed");
    }

// Close statement
    unset($stmt);
}

// Close connection
unset($pdo);