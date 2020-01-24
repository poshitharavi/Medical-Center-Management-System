<?php
include "../util/session.php";
require_once '../database/connection.php';

//get the post body details
$postData = file_get_contents('php://input');
$data = json_decode($postData, TRUE);//convert the JSON

//now date
$dateTime = new DateTime("now", new DateTimeZone('Asia/Jayapura') );



//insert statement
$sql = "INSERT INTO appointments (appointmentShedule, appointmentDateTime, appointmentUser)
            VALUES (:sheduleID, :date, :userID)";

if($stmt = $pdo->prepare($sql)){

    // Bind variables to the prepared statement as parameters
    $stmt->bindParam(":sheduleID", $paramSheduleID);
    $stmt->bindParam(":date", $paramDate);
    $stmt->bindParam(":userID", $paramUserID);

    // Set parameters
    $paramSheduleID = $data['shedule'];
    $paramDate = $dateTime->format('Y-m-d H:i:s');;
    $paramUserID = $_SESSION["user_id"];

    // Attempt to execute the prepared statement
    if($stmt->execute()){
        // Records created successfully. Redirect to landing page
        $lastID = $pdo->lastInsertId();//get the APPOINTMENT last id inserted
        echo json_encode(array('message' => "success", 'number' => $lastID));
        exit();
    } else{
        echo json_encode(array('message' => "failed"));
    }

// Close statement
    unset($stmt);
}

// Close connection
unset($pdo);