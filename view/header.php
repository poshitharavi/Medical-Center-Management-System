<?php
include "../util/session.php";
?>

<!DOCTYPE html>
<html>

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

<body class="theme-light-green">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="dashboard.php">Rapid Cure Doc Book</a>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="../template/images/user.png" width="48" height="48" alt="User"/>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false"><?php echo $_SESSION['user_name'] ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="sign-out.php"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <!--                <li class="active">-->
                <a href="dashboard.php">
                    <i class="material-icons">home</i>
                    <span>Dashboard</span>
                </a>
                <!--                </li>-->
                <li >
                    <a href="my-appoinments.php">
                        <i class="material-icons">assignment</i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="search.php">
                        <i class="material-icons">list_alt</i>
                        <span>Time Schedule</span>
                    </a>
                </li>
                <li >
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">person</i>
                        <span>Doctors</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="add-doctor.php">Doctor Registration</a>
                        </li>
                        <li>
                            <a href="doctors.php">Doctors</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019 <a href="javascript:void(0);">Rapid Cure Doc Book</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
</section>