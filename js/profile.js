window.onload = function () {

    $('#profile').submit(function () {
        // stopping post form refresh
        event.preventDefault();

        //getting the textbox values to variables
        let newPassWord = document.getElementById("newPassword").value;
        let confirmPassword = document.getElementById("confirmPassword").value;

        //checking entered passwords match
        if (newPassWord === confirmPassword){
            change_Password(newPassWord);
        }else {
            alert("Password do not match");
        }

    });

};

async function change_Password(password) {

    let user = {
        password: password,
    };

    let response = await fetch('../service/change-password.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(user)
    });

    let result = await response.json();
    console.log(result);
    if (result === "Success"){
        console.log(result);
        alert("Doctor is been successfully registered");
        window.location.replace("dashboard.php");
    }
}