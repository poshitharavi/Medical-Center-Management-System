let doctorsTable;

window.onload = function () {

    //initilizing the table with datatable library
    doctorsTable = $('#doctorsTable').DataTable({
        responsive: true,
        bPaginate: false,
        sScrollY: '150px'
    });

    //calling the function on page load
    getData();
};

//geting the all doctor details
function getData() {

    //ajax call to the get-all-doctors.php (this is also same as the fetch another type of service caller)
    $.ajax({
        method: "POST",
        url: "../service/get-all-doctors.php",
        dataType: "JSON",
    }).done(function (data) {
        // if data table has data clear the all data
        if (doctorsTable) {
            doctorsTable.destroy();
        }

        //if data is available set the data to the datatable
        if (data.length > 0) {
            doctorsTable = $('#doctorsTable').DataTable({
                data: data,
                responsive: true,
            });

        } else {
            //if data is not available clear all the data
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