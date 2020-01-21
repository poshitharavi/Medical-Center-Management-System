<?php
require_once '../database/connection.php';

//get the post body details
$postData = file_get_contents('php://input');
$data = json_decode($postData, TRUE);//convert the JSON

$doctorName = $data['doctorName'];
$date = $data['availableDay'];
$category = $data['channellingCategory'];

//insert statement
$sql = "  SELECT shedule.doctorSheduleID, doctor.docorName, doctor.doctorContactNumber, doctor.doctorQualifications, shedule.doctorSheduleWeek, shedule.doctorSheduleTime,	doctor.doctorChanellingHospital, shedule.doctorSheduleChanelCategory
 FROM medical_center_management_system.doctors doctor, medical_center_management_system.doctor_shedule shedule
 WHERE doctor.doctorID = shedule.doctorSheduleDoctor";

if ($doctorName != ""){
    $sql.= " and doctor.docorName LIKE '".$doctorName."%'";
}

if ($date != ""){

    $sql.= " and shedule.doctorSheduleWeek = '".$date."'";
}

if ($category != ""){

    $sql.= " and shedule.doctorSheduleChanelCategory = '".$category."'";
}

if($stmt = $pdo->prepare($sql)){

    if($stmt->execute()){

        $results=$stmt->fetchAll(PDO::FETCH_OBJ);
        if($stmt->rowCount() > 0){

            $output = array();
            foreach ($results as $r) {
                $o = array($r->doctorSheduleChanelCategory, $r->docorName, $r->doctorQualifications, $r->doctorSheduleWeek, $r->doctorSheduleTime, $r->doctorChanellingHospital, $r->doctorSheduleID);
                array_push($output, $o);
            }
            echo json_encode($output);
        }else {
            echo json_encode("no_value");
        }

    } else{
        echo json_encode("failed");
    }

// Close statement
    unset($stmt);
}

// Close connection
unset($pdo);
