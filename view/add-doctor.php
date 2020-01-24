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
                            Doctor Registration
                        </h2>
                    </div>
                    <div class="body">
                        <form id="addDoctorForm">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for="doctorName">Doctor Name</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="doctorName" name="doctorName" class="form-control"
                                                   placeholder="Name"required>
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
                                                   placeholder="Channelling Hospital" required>
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
                                                   placeholder="Channelling Hospital" required>
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
                                                   placeholder="Channelling Hospital" required>
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
                                                <option value="Cardiology">Cardiology</option>
                                                <option value="OPD">OPD</option>
                                                <option value="Allergist / Immunologist">Allergist / Immunologist</option>
                                                <option value="Cardiologist">Cardiologist</option>
                                                <option value="Dental Surgeon">Dental Surgeon</option>
                                                <option value="Dermatalogist">Dermatalogist</option>
                                                <option value="Endocrinologist">Endocrinologist</option>
                                                <option value="Gynocologist">Gynocologist</option>
                                                <option value="Nephronologist">Nephronologist</option>
                                                <option value="Neurologist">Neurologist</option>
                                                <option value="Oncologist">Oncologist</option>
                                                <option value="Opthalmologist">Opthalmologist</option>
                                                <option value="Orthopedist">Orthopedist</option>
                                                <option value="Pediatrician">Pediatrician</option>
                                                <option value="Podiatrist">Podiatrist</option>
                                                <option value="Pulmonologist">Pulmonologist</option>
                                                <option value="Psychiatrist">Psychiatrist</option>
                                                <option value="Rheumtalogist">Rheumtalogist</option>
                                                <option value="Surgeon">Surgeon</option>
                                                <option value="Visiting Physician">Visiting Physician</option>
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
                                            <input type="text" id="availableTime" name="availableTime" class="timepicker form-control" placeholder="Choose the time">
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
                                                <option value="Monday" >Monday</option>
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
<script src="../js/add-doctor.js"></script>
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="../template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
</body>

</html>