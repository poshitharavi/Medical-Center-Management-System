let appointmentstable;

window.onload = function () {
    //initilizing the data table
    appointmentstable = $('#appointmentstable').DataTable({
        responsive: true,
        bPaginate: false,
        sScrollY: '150px'
    });

    //getting the appoinmemtent details
    getData();

    //button click event on the table row
    $('#appointmentstable tbody').on( 'click', 'button', function () {
        //the data in the row is taken to the data array
        var data = appointmentstable.row( $(this).parents('tr') ).data();
        //the appointment id from the array is taken and passed to delete the
        delete_Appointment(data[0]);
    } );
};


function getData() {
    //ajax request to get all the appoinments of the user
    $.ajax({
        method: "POST",
        url: "../service/get-appointments.php",
        dataType: "JSON",
    }).done(function (data) {
        // console.log(data);
        //clear the table id data is available
        if (appointmentstable) {
            appointmentstable.destroy();
        }

        //setting data if available
        if (data.length > 0) {
            appointmentstable = $('#appointmentstable').DataTable({
                data: data,
                responsive: true,
                "columnDefs": [ {
                    "targets": -1,
                    "data": null,
                    "defaultContent": "<button>Click!</button>"
                } ]
            });

        } else {
            appointmentstable = $('#appointmentstable').DataTable({});
            appointmentstable
                .clear()
                .draw();
            alert("Something went wrong");
            window.location.href = "doctors.php";
        }

    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        console.log(textStatus);
    });
}

//function which calles when the delete button in the row id clicked
async function delete_Appointment(id) {

    //javascript array which uses
    let data = {
        id: id
    };
    //sending the fetch request to delete-appointment.php
    let response = await fetch('../service/delete-appointment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(data)
    });
    //response from thr fetch request
    let result = await response.json();
    console.log(result);
    //check the status of response
    if (result === "success"){
        console.log(result);
        alert("Your appointment is been deleted");
        window.location.replace("my-appoinments.php");
    }
}