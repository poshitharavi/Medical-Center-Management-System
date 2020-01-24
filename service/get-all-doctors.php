<?php

require_once '../database/connection.php';

//insert statement
$sql = "  SELECT doctor.docorName, doctor.doctorContactNumber, doctor.doctorQualifications, doctor.doctorID, shedule.doctorSheduleWeek, shedule.doctorSheduleTime,	doctor.doctorChanellingHospital, shedule.doctorSheduleChanelCategory
 FROM medical_center_management_system.doctors doctor, medical_center_management_system.doctor_shedule shedule
 WHERE doctor.doctorID = shedule.doctorSheduleDoctor;";

if($stmt = $pdo->prepare($sql)){

    if($stmt->execute()){

        $results=$stmt->fetchAll(PDO::FETCH_OBJ);
        if($stmt->rowCount() > 0){

            $output = array();
            foreach ($results as $r) {
                $o = array($r->docorName, $r->doctorContactNumber, $r->doctorQualifications, $r->doctorSheduleWeek, $r->doctorSheduleTime, $r->doctorChanellingHospital, $r->doctorSheduleChanelCategory, $r->doctorID);
                array_push($output, $o);
            }
            echo json_encode($output);
        }

    } else{
        echo json_encode("failed");
    }

// Close statement
    unset($stmt);
}

// Close connection
unset($pdo);