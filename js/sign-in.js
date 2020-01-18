window.onload = function () {
    //form submit
    $('#sign_in').submit(function () {
        // stopping post form refresh
        event.preventDefault();

        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;

        if (email !== "" && password !== "") {
            user_logging_credentials(email, password);
        }
    });
};

//asyncronus task which cals the service
async function user_logging_credentials(email, password) {

    //fetch request call
    let user = {
        email: email,
        password: password
    };

    let response = await fetch('../service/user-sign-in-submit.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(user)
    });

    let result = await response.json();

    //checking the response
    if (result === "invalid") {
        alert("Email is invalid, Please check again and try");
    } else if (result === "false") {
        alert("Password is invalid, Please check and try");
    } else {
        window.location.replace("../index.php");
    }

}