<?php
include_once('header.php');
?>

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Doctors
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable"
                                   id="appointmentstable">
                                <thead>
                                <tr>
                                    <th>Appointment Number</th>
                                    <th>Appointment Placed Date</th>
                                    <th>Channeling Category</th>
                                    <th>Channelling Date</th>
                                    <th>Channeling Time</th>
                                    <th>Doctor Channelling</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Appointment Number</th>
                                    <th>Appointment Placed Date</th>
                                    <th>Channeling Category</th>
                                    <th>Channelling Date</th>
                                    <th>Channeling Time</th>
                                    <th>Doctor Channelling</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('default-imports.php');
?>
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
<script src="../js/my-appointment.js"></script>
</body>

</html>