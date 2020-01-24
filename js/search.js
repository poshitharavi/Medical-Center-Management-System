let doctorsTable;

window.onload = function () {
    //hide the table in form load
    $("#dataForm").hide();

    //search button click event
    $("#searchBtn").click(function () {
        searchDoctors();
    });

    //clear button event
    $("#clearBtn").click(function () {

        window.location.href = "search.php";
    });

    //initilize the table
    doctorsTable = $('#doctorsTable').DataTable({
        responsive: true,
        bPaginate: false,
        sScrollY: '150px'
    });

    //click event of button in the row
    $('#doctorsTable tbody').on( 'click', 'button', function () {
        var data = doctorsTable.row( $(this).parents('tr') ).data();
        //passing the data to add-appoinment.php file
        window.location.href = "add-appoinment.php?sheduleId="+data[6]+"&doctorName="+data[1]+"&category="+data[0];
    } );

};

async function searchDoctors() {
    //initilizing the javascript array
    let doctor = {
        doctorName: $('#doctorName').val(),
        availableDay: $('#availableDay').val(),
        channellingCategory: $('#channellingCategory').val(),
    };
    //fetch request in search doctor
    let response = await fetch('../service/search-doctors.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(doctor)
    });
    //fetch response
    let result = await response.json();
    console.log(result);
   //clear the current values in the table
    if (result) {
        if (doctorsTable) {
            doctorsTable.destroy();
        }
        //if there is no result show the table with no data
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
            //if data is available display the data
            $("#dataForm").hide();
            doctorsTable = $('#doctorsTable').DataTable({});
            doctorsTable
                .clear()
                .draw();
            alert("No data found");

        }

    }

}