window.onload = function () {

    $('#appointmentForm').submit(function () {
        // stopping post form refresh
        event.preventDefault();

        //getting the textbox values to variables
        let shedule = document.getElementById("shedule").value;

        submit_Appointment(shedule);


    });

};

async function submit_Appointment(shedule) {

    let details = {
        shedule: shedule
    };

    let response = await fetch('../service/appointment-submisstion.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(details)
    });

    let result = await response.json();

    console.log(result);
    if (result.message === "success") {
        console.log(result);
        alert("Appointment was places your appointment number "+result.number);
        window.location.replace("dashboard.php");
    }else if (result.message === "failed"){

    }

}