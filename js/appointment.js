window.onload = function () {
    //form submit
    $('#appointmentForm').submit(function () {
        // stopping post form refresh
        event.preventDefault();

        //getting the textbox values to variables
        let shedule = document.getElementById("shedule").value;

        //calling the appointment function
        submit_Appointment(shedule);


    });

};

//submitting the appointment details it only passes the shedule id because shedule is already in the database
async function submit_Appointment(shedule) {

    //setting values to the javascript array
    let details = {
        shedule: shedule
    };
    //fetch request calling appointment-submisstion.php
    let response = await fetch('../service/appointment-submisstion.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(details)
    });
    //response of the request
    let result = await response.json();

    console.log(result);

    //checking the status is success
    if (result.message === "success") {
        console.log(result);
        alert("Appointment was places your appointment number "+result.number);//opening the alert box in page
        window.location.replace("dashboard.php");//redirecting after submission
    }else if (result.message === "failed"){

    }

}