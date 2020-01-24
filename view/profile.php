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
                            Profile
                        </h2>
                    </div>
                    <div class="body">
                        <form id="profile">
                            <h4>
                                Change Password
                            </h4>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label for="email_address">New Password</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" id="newPassword" name="newPassword" class="form-control"
                                                   placeholder="Enter your New Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email_address">Confirm Password</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control"
                                                   placeholder="Enter your Confirm Password" required>
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
<!-- Jquery Validation Plugin Css -->
<script src="../template/plugins/jquery-validation/jquery.validate.js"></script>

<!-- JQuery Steps Plugin Js -->
<script src="../template/plugins/jquery-steps/jquery.steps.js"></script>

<!-- Sweet Alert Plugin Js -->
<script src="../template/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src="../template/plugins/bootstrap-notify/bootstrap-notify.js"></script>
<!--Custom Js-->
<script src="../js/profile.js"></script>

</body>

</html>

