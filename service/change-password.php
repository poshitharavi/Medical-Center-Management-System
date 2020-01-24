<?php
include "../util/session.php";
require_once '../database/connection.php';

//get the post body details
$postData = file_get_contents('php://input');
$data = json_decode($postData, TRUE);//convert the JSON

try{
    $pdo->beginTransaction();
    //update statement
    $sql = "UPDATE medical_center_management_system.user SET userPassword = :password WHERE userID = :id;";


    $stmt = $pdo->prepare($sql);

    // Bind variables to the prepared statement as parameters
    $stmt->bindParam(":id", $paramId);
    $stmt->bindParam(":password", $paramName);

    // Set parameters
    $paramId = $_SESSION["user_id"];
    $paramName = md5($data['password']);

    $stmt->execute();

    $pdo->commit();
    echo json_encode("Success");
}
catch(Exception $e){
    echo json_encode($e->getMessage());
    $pdo->rollBack();
}
