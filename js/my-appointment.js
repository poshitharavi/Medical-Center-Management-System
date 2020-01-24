let appointmentstable;

window.onload = function () {

    appointmentstable = $('#appointmentstable').DataTable({
        responsive: true,
        bPaginate: false,
        sScrollY: '150px'
    });

    getData();


    $('#appointmentstable tbody').on( 'click', 'button', function () {
        var data = appointmentstable.row( $(this).parents('tr') ).data();
        delete_Appointment(data[0]);
    } );
};


function getData() {

    $.ajax({
        method: "POST",
        url: "../service/get-appointments.php",
        dataType: "JSON",
    }).done(function (data) {
        // console.log(data);
        if (appointmentstable) {
            appointmentstable.destroy();
        }


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

async function delete_Appointment(id) {

    let data = {
        id: id
    };

    let response = await fetch('../service/delete-appointment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(data)
    });

    let result = await response.json();
    console.log(result);

    if (result === "success"){
        console.log(result);
        alert("Your appointment is been deleted");
        window.location.replace("my-appoinments.php");
    }
}