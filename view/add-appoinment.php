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
                            Appointment
                        </h2>
                    </div>
                    <div class="body">
                        <form id="newReceiptForm">
                            <div class="row clearfix" hidden>
                                <div class="col-sm-12">
                                    <label for="email_address">Shedule ID</label>
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" id="yogoId" name="yogoId" class="form-control"
                                                <?php if (isset($_GET['sheduleId'])) { ?>
                                                    value="<?php echo $_GET['sheduleId']; ?>"
                                                <?php } ?>
                                                   placeholder="shedule id" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="email_address">Doctor Name</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="cabNo" name="cabNo" class="form-control"
                                                <?php if (isset($_GET['doctorName'])) { ?>
                                                    value="<?php echo $_GET['doctorName']; ?>"
                                                <?php } ?>
                                                   placeholder="doctor name" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="email_address">Category</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="vehicleNo" name="vehicleNo" class="form-control"
                                            <input type="text" id="cabNo" name="cabNo" class="form-control"
                                                <?php if (isset($_GET['category'])) { ?>
                                                    value="<?php echo $_GET['category']; ?>"
                                                <?php } ?>
                                                   placeholder="Enter vehicle number" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="email_address">Patient Name</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="vehicleNo" name="vehicleNo" class="form-control"
                                            <input type="text" id="cabNo" name="cabNo" class="form-control"
                                                    value="<?php echo $_SESSION["user_name"]; ?>"
                                                   placeholder="Enter vehicle number" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="email_address">Amount</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="vehicleNo" name="vehicleNo" class="form-control"
                                            <input type="text" id="cabNo" name="cabNo" class="form-control"
                                                   value="Rs 500"
                                                   placeholder="Amount" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect" id="saveBtn">Set Appointment
                            </button>
                            <button type="button" class="btn btn-warning m-t-15 waves-effect" id="cancelBtn">Cancel
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('default-imports.php');
?>
