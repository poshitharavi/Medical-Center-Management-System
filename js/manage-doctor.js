let doctorsTable;

window.onload = function () {

    doctorsTable = $('#doctorsTable').DataTable({
        responsive: true,
        bPaginate: false,
        sScrollY: '150px'
    });

    //geting the data of doctors in the form load
    getData();

    //this is the button call in  the table , When the button is clicked it takes the row id
    //which is clicked then the data of that row is taken
    $('#doctorsTable tbody').on( 'click', 'button', function () {
        var data = doctorsTable.row( $(this).parents('tr') ).data();//taking the data of the specific row
        edit_Doctor_Data(data[7]);//passiing the data
    } );
};

//get all the doctor details
function getData() {

    //ajax request function which calles get-all-doctors.php
    $.ajax({
        method: "POST",
        url: "../service/get-all-doctors.php",
        dataType: "JSON",
    }).done(function (data) {
        // console.log(data);
        if (doctorsTable) {
            doctorsTable.destroy();
        }


        if (data.length > 0) {
            //setting data to data table column def initilize the button in table
            doctorsTable = $('#doctorsTable').DataTable({
                data: data,
                responsive: true,
                "columnDefs": [ {
                    "targets": -1,
                    "data": null,
                    "defaultContent": "<button>Click!</button>"
                } ]
            });

        } else {
            //if no data found clear the data in table
            doctorsTable = $('#doctorsTable').DataTable({});
            doctorsTable
                .clear()
                .draw();
            alert("Something went wrong");
            window.location.href = "doctors.php";
        }

    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        console.log(textStatus);
        // window.location.href = "500";
    });
}

//this is the function call to redirect edit-doctor.php
function edit_Doctor_Data(id) {

    //ajax call is sent to take the data available to the doctor id
    $.ajax({
        method: "POST",
        url: "../service/get-doctor-details-edit.php",
        dataType: "JSON",
        data :{
            id:id
        }
    }).done(function (data) {
        console.log(data[0]);
        //the data of doctor is sent to the
        window.location.href = "edit-doctor.php?id="+data[0].doctorID+"&name="+data[0].docorName+"&contact="+data[0].doctorContactNumber+"" +
            "&qualification="+data[0].doctorQualifications+"&week="+data[0].doctorSheduleWeek+"&time="+data[0].doctorSheduleTime+"" +
            "&hospital="+data[0].doctorChanellingHospital+"&category="+data[0].doctorSheduleChanelCategory+"&status="+data[0].doctorSheduleStatus;

    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        console.log(textStatus);
        // window.location.href = "500";
    });
}