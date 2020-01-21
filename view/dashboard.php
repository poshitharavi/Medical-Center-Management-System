<?php
include_once('header.php');
?>

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="block-header">
                            <h2>Home</h2>
                        </div>
                    </div>
                    <div class="body">
                        <H3 align="center">Welcome <?php echo $_SESSION['user_name'] ?></H3>
                        <h4 align="center">To Medical Center</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('default-imports.php');
?>
</body>

</html>