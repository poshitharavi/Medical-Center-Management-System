<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Rapid Cure Doc Book</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Style Imports-->
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

    <!-- Custom Css -->
    <link href="../template/css/style.css" rel="stylesheet">
<!--    End of Style Imports-->
</head>

<body class="login-page">
<div class="login-box">
    <img src="../images/logo.jpeg" alt="YOGO" class="img-responsive center-block"/>
    <div class="logo"><a href="javascript:void(0);"><strong>Rapid Cure Doc Book</strong></a>
        <small>Health Is The Important</small>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="post">
                <div class="msg">Sign in to start your session</div>
                <?php if (isset($_GET['error'])){ ?>
                <p class="font-bold col-red msg">User Name or Password is Incorrect</p>
                <?php }?>
                <div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">email</i>
							</span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="email" placeholder="Email Address" id="email" required
                               autofocus>
                    </div>

                </div>
                <div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock</i>
						</span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">

                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                    </div>
                    <div class="m-t-25 m-b--5 align-center">
                        <a href="registration.php">Register Now</a>
                    </div>
                    <div class="m-t-25 m-b--5 align-center">
                        <a href="shedules.php">Check Our Shedule</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="../template/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../template/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../template/plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="../template/plugins/jquery-validation/jquery.validate.js"></script>

<!--ajax pluging-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>

<!-- Custom Js -->
<script src="../template/js/admin.js"></script>
<script src="../template/js/pages/examples/sign-in.js"></script>
<script src="../js/sign-in.js"></script>
</body>

</html>