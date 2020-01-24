<?php
require_once '../database/connection.php';

// Start the session
session_start();

//get the post body details
$postData = file_get_contents('php://input');
$data = json_decode($postData, TRUE);//convert the JSON


$userDataResult = get_user_details_by_email($pdo,$data['email']);

if ($userDataResult != false){

   if($userDataResult['userPassword'] == md5($data['password'])){

       $_SESSION["user_id"] = $userDataResult["userID"];
       $_SESSION["user_name"] = $userDataResult["userName"];
       $_SESSION["user_type"] = $userDataResult["userType"];

       echo json_encode("success");
   }else{
       session_destroy();
       echo json_encode("false");
   }
}else{
    session_destroy();
    echo json_encode("invalid");
}

//function of geting user details in sign in
function get_user_details_by_email($pdo,$email)
{

    $sql = "SELECT * FROM medical_center_management_system.user WHERE userEmail =:email  ;";

    if ($stmt = $pdo->prepare($sql)) {

        $stmt->bindParam(":email", $email);

        if ($stmt->execute()) {

            return $user = $stmt->fetch();

        }
    }
}

