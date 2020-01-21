let doctorsTable;

window.onload = function () {

    $("#dataForm").hide();

    $("#searchBtn").click(function () {
        searchDoctors();
    });

    $("#clearBtn").click(function () {

        window.location.href = "search.php";
    });

    doctorsTable = $('#doctorsTable').DataTable({
        responsive: true,
        bPaginate: false,
        sScrollY: '150px'
    });

    $('#doctorsTable tbody').on( 'click', 'button', function () {
        var data = doctorsTable.row( $(this).parents('tr') ).data();
        window.location.href = "add-appoinment.php?sheduleId="+data[6]+"&doctorName="+data[1]+"&category="+data[0]
    } );

};

async function searchDoctors() {

    let doctor = {
        doctorName: $('#doctorName').val(),
        availableDay: $('#availableDay').val(),
        channellingCategory: $('#channellingCategory').val(),
    };

    let response = await fetch('../service/search-doctors.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(doctor)
    });

    let result = await response.json();
    console.log(result);

    if (result) {
        if (doctorsTable) {
            doctorsTable.destroy();
        }
        if (result !== "no_value") {
            $("#dataForm").show();
            doctorsTable = $('#doctorsTable').DataTable({
                data: result,
                responsive: true,
                "columnDefs": [ {
                    "targets": -1,
                    "data": null,
                    "defaultContent": "<button>Click!</button>"
                } ]
            });

        } else {
            $("#dataForm").hide();
            doctorsTable = $('#doctorsTable').DataTable({});
            doctorsTable
                .clear()
                .draw();
            alert("No data found");

        }

    }

    function appointmentValues(value) {
        alert(value);
    }
}