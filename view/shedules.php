<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Rapid Cure Doc Book</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../template/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../template/plugins/node-waves/waves.css" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="../template/plugins/animate-css/animate.css" rel="stylesheet"/>

    <!--WaitMe Css-->
    <link href="../template/plugins/waitme/waitMe.css" rel="stylesheet"/>

    <!-- JQuery DataTable Css -->
    <link href="../template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">


    <!-- Morris Chart Css-->
    <link href="../template/plugins/morrisjs/morris.css" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="../template/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../template/css/themes/all-themes.css" rel="stylesheet"/>

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../template/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
</head>
<body style="background: #4fb953;padding-top: 100px">
<div class="container" style="background:#FFFFFF;">
    <h2>Rapid Cure Doc Book</h2>
    <p>Doctors Schedule</p>
    <hr>
    <hr>
    <!-- Search Form-->
    <form id="searchForm">
        <div class="row clearfix">
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick selectpicker"
                                    id="channellingCategory" name="channellingCategory" required>
                                <option value="">-- Please select category--</option>
                                <option value="Cardiology">Cardiology</option>
                                <option value="OPD">OPD</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="form-line">
                        <select class="form-control show-tick selectpicker" id="availableDay"
                                name="availableDay">
                            <option value="">-- Please select day--</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="doctorName" name="doctorName"
                               class="form-control"
                               placeholder="Doctor Name">
                    </div>
                </div>
            </div>
        </div>
        <div class="align-right">
            <button type="button" class="btn btn-primary btn-lg waves-effect" id="searchBtn">
                <i class="material-icons">search</i>
                <span>Search</span>
            </button>
            <button type="button" class="btn btn-warning btn-lg waves-effect" id="clearBtn">
                <i class="material-icons">clear</i>
                <span>Clear</span>
            </button>
        </div>
    </form>
    <!--End Of Search Form-->
    <hr>
    <!-- Data Form-->
    <div id="dataForm">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover dataTable"
                   id="doctorsTable">
                <thead>
                <tr>
                    <th>Category</th>
                    <th>Doctor Name</th>
                    <th>Qualification</th>
                    <th>Channelling Date</th>
                    <th>Channeling Time</th>
                    <th>Hospital</th>
                    <th>Appointment</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Category</th>
                    <th>Doctor Name</th>
                    <th>Qualification</th>
                    <th>Channelling Date</th>
                    <th>Channeling Time</th>
                    <th>Hospital</th>
                    <th>Appointment</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--End Of Data Form-->
</div>
<?php
include_once('default-imports.php');
?>


<!-- Jquery Validation Plugin Css -->
<script src="../template/plugins/jquery-validation/jquery.validate.js"></script>

<!-- JQuery Steps Plugin Js -->
<script src="../template/plugins/jquery-steps/jquery.steps.js"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src="../template/plugins/bootstrap-notify/bootstrap-notify.js"></script>

<!-- Wait Me Plugin Js -->
<script src="../template/plugins/waitme/waitMe.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="../template/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="../template/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../template/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../template/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../template/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../template/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../template/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../template/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../template/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script src="../template/js/pages/tables/jquery-datatable.js"></script>

<!--Custom Js-->
<script src="../js/search.js"></script>
</body>

</html>