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
                            Edit Doctor Details
                        </h2>
                    </div>
                    <div class="body">
                        <form id="addDoctorForm">
                            <div class="row clearfix" hidden>
                                <div class="col-sm-12">
                                    <label for="doctorId">Doctor Name</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="doctorId" name="doctorId" class="form-control"
                                                   placeholder="Name" value="<?php echo $_GET['id']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="doctorName">Doctor Name</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="doctorName" name="doctorName" class="form-control"
                                                   placeholder="Name" value="<?php echo $_GET['name']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="doctorChannellingPlace">Channelling Hospital</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="doctorChannellingPlace" name="doctorChannellingPlace" class="form-control"
                                                   placeholder="Channelling Hospital" value="<?php echo $_GET['hospital']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="doctorContactNumber">Contact Number</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="doctorContactNumber" name="doctorContactNumber" class="form-control"
                                                   placeholder="Channelling Hospital" value="<?php echo $_GET['contact']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="doctorProfessionalQualification">Professional Qualifications</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="doctorProfessionalQualification" name="doctorProfessionalQualification" class="form-control"
                                                   placeholder="Channelling Hospital" value="<?php echo $_GET['qualification']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="channellingCategory">Channelling Category</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control show-tick selectpicker" id="channellingCategory" name="channellingCategory" required>
                                                <option value="">-- Please select --</option>
                                                <option value="Cardiology" <?php if($_GET['category'] == 'Cardiology')echo 'selected';?>>Cardiology</option>
                                                <option value="OPD" <?php if($_GET['category'] == 'OPD')echo 'selected';?>>OPD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="availableTime">Available Time</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="availableTime" name="availableTime" class="timepicker form-control" value="<?php echo $_GET['time']; ?>"  placeholder="Choose the time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="availableDay">Available Day</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control show-tick selectpicker" id="availableDay" name="availableDay">
                                                <option value="">-- Please select --</option>
                                                <option value="Monday" <?php if($_GET['week'] == 'Monday')echo 'selected';?>>Monday</option>
                                                <option value="Tuesday" <?php if($_GET['week'] == 'Tuesday')echo 'selected';?>>Tuesday</option>
                                                <option value="Wednesday" <?php if($_GET['week'] == 'Wednesday')echo 'selected';?>>Wednesday</option>
                                                <option value="Thursday" <?php if($_GET['week'] == 'Thursday')echo 'selected';?>>Thursday</option>
                                                <option value="Friday" <?php if($_GET['week'] == 'Friday')echo 'selected';?>>Friday</option>
                                                <option value="Saturday" <?php if($_GET['week'] == 'Saturday')echo 'selected';?>>Saturday</option>
                                                <option value="Sunday" <?php if($_GET['week'] == 'Sunday')echo 'selected';?>>Sunday</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="saveBtn">Save</button>
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
<!--Custom Js-->
<script src="../js/edit-doctor.js"></script>
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="../template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
</body>

</html>