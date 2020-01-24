<?php

require_once '../database/connection.php';

//insert statement
$sql = " SELECT doctor.doctorID, shedule.doctorSheduleID, doctor.docorName, doctor.doctorContactNumber, doctor.doctorQualifications, 
 shedule.doctorSheduleWeek, shedule.doctorSheduleTime,	doctor.doctorChanellingHospital, shedule.doctorSheduleChanelCategory, shedule.doctorSheduleStatus
 FROM medical_center_management_system.doctors doctor, medical_center_management_system.doctor_shedule shedule
 WHERE doctor.doctorID = shedule.doctorSheduleDoctor and doctor.doctorID =".$_POST["id"];

if($stmt = $pdo->prepare($sql)){

    if($stmt->execute()){

        $results=$stmt->fetchAll(PDO::FETCH_OBJ);
        if($stmt->rowCount() > 0){

            echo json_encode($results);
        }

    } else{
        echo json_encode("failed");
    }

// Close statement
    unset($stmt);
}

// Close connection
unset($pdo);