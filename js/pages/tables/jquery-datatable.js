var start;
var end;

$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ]
        buttons: [
            'excel'
        ]
    });

    $('#bs_datepicker_range_container').datepicker({
        autoclose: true,
        container: '#bs_datepicker_range_container'
    });


    $('#bs_datepicker_range_container').datepicker()
        .on("hide", function (e) {
            // `e` here contains the extra attributes
            var value1 = document.getElementById("endDateTxt").value;
            var value2 =  document.getElementById("startDateTxt").value;

            if (value2 != null && value1 != null) {
                console.log(value1+" "+value2 );
            }
        });


});

function searach() {

    $.ajax({
        method: "GET",
        url: "URL",
        data: "Data",
    }).done(function (msg) {
        var obj = JSON.parse(msg);
        // var data = obj.data;
        console.log(obj.length);

        // console.log(msg);
        // if (registerReportTable) {
        //     registerReportTable.destroy();
        // }
        // registerReportTable = $('#registerReport').DataTable({
        //     dom: 'Bfrtip',
        //     buttons: [
        //         'copy', 'csv', 'excel', 'pdf', 'print'
        //     ],
        //     data: obj,
        //     responsive: true,
        //     "scrollX": true
        // });

    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        console.log(textStatus);
    });
}

function setDates() {
    var d = new Date();

    var day = ('0' + d.getDate()).slice(-2);
    var month = ('0' + (d.getMonth() + 1)).slice(-2);
    var year = d.getFullYear();
    var currDate = month + '/' + day + '/' + year;

    document.getElementById('endDateTxt').value = currDate;


    d.setDate(d.getDate() - 30);

    var pastday = ('0' + d.getDate()).slice(-2);
    var pastmonth = ('0' + (d.getMonth() + 1)).slice(-2);
    var pastyear = d.getFullYear();
    var pasDate = pastmonth + '/' + pastday + '/' + pastyear;

    document.getElementById('startDateTxt').value = pasDate;
}
