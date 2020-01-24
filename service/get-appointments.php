<?php
include "../util/session.php";
require_once '../database/connection.php';

//insert statement
$sql = "SELECT appointment.appointmentID, appointment.appointmentDateTime, shedule.doctorSheduleChanelCategory, shedule.doctorSheduleWeek, shedule.doctorSheduleTime, doctor.docorName
FROM medical_center_management_system.appointments appointment, medical_center_management_system.doctor_shedule shedule
INNER JOIN  medical_center_management_system.doctors doctor on doctor.doctorID = shedule.doctorSheduleDoctor 
WHERE appointment.appointmentUser = ".$_SESSION["user_id"]." AND appointment.appointmentShedule = shedule.doctorSheduleID;";

if($stmt = $pdo->prepare($sql)){

    if($stmt->execute()){

        $results=$stmt->fetchAll(PDO::FETCH_OBJ);
        if($stmt->rowCount() > 0){

            $output = array();
            foreach ($results as $r) {
                $o = array($r->appointmentID, $r->appointmentDateTime, $r->doctorSheduleChanelCategory, $r->doctorSheduleWeek, $r->doctorSheduleTime, $r->docorName);
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