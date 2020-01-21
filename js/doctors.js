let doctorsTable;

window.onload = function () {

    doctorsTable = $('#doctorsTable').DataTable({
        responsive: true,
        bPaginate: false,
        sScrollY: '150px'
    });

    getData()
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