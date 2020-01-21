<?php
require_once '../database/connection.php';

//get the post body details
$postData = file_get_contents('php://input');
$data = json_decode($postData, TRUE);//convert the JSON

//insert statement
$sql = "INSERT INTO user (userName, userPassword, userMobile, userEmail, userType)
            VALUES (:name, :password, :mobile, :email, :type)";

if($stmt = $pdo->prepare($sql)){

    // Bind variables to the prepared statement as parameters
    $stmt->bindParam(":name", $paramName);
    $stmt->bindParam(":password", $paramPassword);
    $stmt->bindParam(":email", $paramEmail);
    $stmt->bindParam(":type", $paramType);
    $stmt->bindParam(":mobile", $paramMobile);

    // Set parameters
    $paramName = $data['name'];
    $paramEmail = $data['email'];
    $paramPassword = $data['password'];
    $paramMobile = $data['mobile'];
    $paramType = 1;// the type is 1 because it is the patient category

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


