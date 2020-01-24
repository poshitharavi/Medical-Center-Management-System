window.onload = function () {

    $('#register').submit(function () {
        // stopping post form refresh
        event.preventDefault();

        //getting the textbox values to variables
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let mobile = document.getElementById("mobile").value;
        let password = document.getElementById("password").value;
        let confirmPassword = document.getElementById("confirmPassword").value;

        //checking entered passwords match
        if (confirmPassword === password){
           user_Details_Submit(name,email,mobile,password);

        }else {
            alert("Enter password does not match");
        }


    });
};

//pass the user details filled in the form
async function user_Details_Submit(name,email,mobile,password) {
    //javascript array
    let user = {
        name: name,
        email: email,
        password: password,
        mobile: mobile
    };
    //fetch request pass to add paitent.php
    let response = await fetch('../service/add-paitents.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(user)
    });
    //response
    let result = await response.json();
    console.log(result);
    //check the status
    if (result === "success"){
        console.log(result);
        alert("You have successfully registered in the system");
        window.location.replace("sign-in.php");
    }
}