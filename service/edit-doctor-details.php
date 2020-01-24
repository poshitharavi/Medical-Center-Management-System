<?php

require_once '../database/connection.php';

//get the post body details
$postData = file_get_contents('php://input');
$data = json_decode($postData, TRUE);//convert the JSON

try {
    $pdo->beginTransaction();
    //update statement
    $sqlDoctor = "UPDATE medical_center_management_system.doctors 
                    SET docorName = :name, doctorChanellingHospital = :channelling, doctorContactNumber = :contactNumber, doctorQualifications = :professionalQualification  
                     WHERE doctorID = :id;";

    $stmt = $pdo->prepare($sqlDoctor);

    // Bind variables to the prepared statement as parameters
    $stmt->bindParam(":id", $paramId);
    $stmt->bindParam(":name", $paramName);
    $stmt->bindParam(":channelling", $paramChanneling);
    $stmt->bindParam(":contactNumber", $paramContactNumber);
    $stmt->bindParam(":professionalQualification", $paramProfessionalQualifications);

    // Set parameters
    $paramId = $data['id'];
    $paramName = $data['name'];
    $paramChanneling = $data['channellingHospital'];
    $paramContactNumber = $data['contactNumber'];
    $paramProfessionalQualifications = $data['professionalQualification'];

    $stmt->execute();

    $sqlShedule = "UPDATE medical_center_management_system.doctor_shedule
                     SET doctorSheduleTime = :sheduleTime, doctorSheduleWeek = :sheduleWeek, doctorSheduleChanelCategory = :sheduleCategory
                      WHERE doctorSheduleDoctor = :id;";

    $stmt = $pdo->prepare($sqlShedule);
    $stmt->bindParam(":id", $data['id']);
    $stmt->bindParam(":sheduleTime", $data['availableTime']);
    $stmt->bindParam(":sheduleWeek", $data['availableDay']);
    $stmt->bindParam(":sheduleCategory", $data['channelingCategory']);

    $stmt->execute();

    $pdo->commit();
    echo json_encode("Success");


} catch (Exception $e) {
    echo json_encode($e->getMessage());
    $pdo->rollBack();
}


