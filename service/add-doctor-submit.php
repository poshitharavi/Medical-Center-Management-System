<?php

require_once '../database/connection.php';

//get the post body details
$postData = file_get_contents('php://input');
$data = json_decode($postData, TRUE);//convert the JSON

try{
    $pdo->beginTransaction();
    //insert statement
    $sqlDoctor = "INSERT INTO doctors (docorName, doctorChanellingHospital, doctorContactNumber, doctorQualifications)
            VALUES (:name, :channelling, :contactNumber, :professionalQualification)";

    $sqlShedule = "INSERT INTO doctor_shedule
                (`doctorSheduleTime`, `doctorSheduleWeek`, `doctorSheduleChanelCategory`, `doctorSheduleDoctor`, `doctorSheduleStatus`)
                    VALUES (:sheduleTime, :sheduleWeek, :sheduleCategory, :sheduleDoctor, :sheduleStyatus)";


    $stmt = $pdo->prepare($sqlDoctor);
     // Bind variables to the prepared statement as parameters
    $stmt->bindParam(":name", $paramName);
    $stmt->bindParam(":channelling", $paramChanneling);
    $stmt->bindParam(":contactNumber", $paramContactNumber);
    $stmt->bindParam(":professionalQualification", $paramProfessionalQualifications);

    // Set parameters
    $paramName = $data['name'];
    $paramChanneling = $data['channellingHospital'];
    $paramContactNumber = $data['contactNumber'];
    $paramProfessionalQualifications = $data['professionalQualification'];

    $stmt->execute();

    $lastID = $pdo->lastInsertId();//get the doctor last id inserted
    $doctorStatus = 1;

    $stmt = $pdo->prepare($sqlShedule);
    // Bind variables to the prepared statement as parameters
    $stmt->bindParam(":sheduleTime", $data['availableTime']);
    $stmt->bindParam(":sheduleWeek", $data['availableDay']);
    $stmt->bindParam(":sheduleCategory", $data['channelingCategory']);
    $stmt->bindParam(":sheduleDoctor", $lastID);
    $stmt->bindParam(":sheduleStyatus", $doctorStatus);

    $stmt->execute();

    $pdo->commit();
    echo json_encode("Success");
}
catch(Exception $e){
    echo json_encode($e->getMessage());
    $pdo->rollBack();
}


