<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/fontastic.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/custom.css">
</head>

<body>
    <div class="page login-page" style="background-color: #1a1640;">
        <div class="container d-flex align-items-center ">
            <div class="form-holder has-shadow">

                <!-- End banner Area -->
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-3">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/login-img.jpg" alt="">
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <?php
                                if ($this->session->flashdata('info')) {
                                    $flash = $this->session->flashdata('info');
                                    ?>
                                    <div class="alert alert-warning" role="alert">
                                        <?= $flash ?>
                                    </div>
                                <?php } ?>
                                <center>
                                    <form method="post" class="form-validate pb-2" action="<?php echo base_url('User_Registrasi/add'); ?>">
                                        <h2 class="form-signin-heading">Register</h2>
                                        <div class="form-group">
                                            <input id="nim" type="text" name="nim" required placeholder="Nim" class="input-material">
                                        </div>
                                        <div class="form-group">
                                            <input id="nama" type="text" name="nama" required placeholder="Nama" class="input-material">
                                        </div>
                                        <div class="form-group">
                                            <input id="fakultas" type="text" name="fakultas" required placeholder="Fakultas" class="input-material">
                                        </div>
                                        <div class="form-group">
                                            <input id="progdi" type="text" name="progdi" required placeholder="Program Studi" class="input-material">
                                        </div>
                                        <div class="form-group">
                                            <input id="no_hp" type="text" name="no_hp" required placeholder="Nomor HP" class="input-material">
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" name="password" required placeholder="Password" class="input-material">
                                        </div>

                                        <button class="btn" type="submit" style="background-color: #ff7f27; color: white;">Save</button>
                                    </form>
                                    <a href="<?= base_url() ?>/login" style="font-size: 18px;" class="float-right">Login</a><br>
                                </center>
                                <a href="<?= base_url() ?>/home" class="float-right" style="font-size: 18px;">Home</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 bg-white">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript files-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url() ?>/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url() ?>/assets/js/front.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/easing.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/hoverIntent.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/superfish.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.tabs.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/mail-script.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>
</body>

</html>