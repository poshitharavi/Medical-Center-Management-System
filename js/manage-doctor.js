let doctorsTable;

window.onload = function () {

    doctorsTable = $('#doctorsTable').DataTable({
        responsive: true,
        bPaginate: false,
        sScrollY: '150px'
    });

    getData();

    $('#doctorsTable tbody').on( 'click', 'button', function () {
        var data = doctorsTable.row( $(this).parents('tr') ).data();
        edit_Doctor_Data(data[7]);
    } );
};

function getData() {

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

function edit_Doctor_Data(id) {

    $.ajax({
        method: "POST",
        url: "../service/get-doctor-details-edit.php",
        dataType: "JSON",
        data :{
            id:id
        }
    }).done(function (data) {
        console.log(data[0]);
        window.location.href = "edit-doctor.php?id="+data[0].doctorID+"&name="+data[0].docorName+"&contact="+data[0].doctorContactNumber+"" +
            "&qualification="+data[0].doctorQualifications+"&week="+data[0].doctorSheduleWeek+"&time="+data[0].doctorSheduleTime+"" +
            "&hospital="+data[0].doctorChanellingHospital+"&category="+data[0].doctorSheduleChanelCategory+"&status="+data[0].doctorSheduleStatus;

    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        console.log(textStatus);
        // window.location.href = "500";
    });
}