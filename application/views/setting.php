<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>UKSW</title>
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css">
</head>

<body>
    <?php
    $this->load->view('templates/header');
    ?>
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-12">
                    <h1 class="text-white">
                        Universitas Kristen Satya Wacana
                    </h1>
                    <p class="pt-10 pb-10" style="color: white; font-size: 18px;">
                        UKSW
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-3">
        <h3 class="pt-2 pb-2">Account Setting</h3>
        <div class="row border">
            <div class="col-3 border">
                <nav class="nav flex-column">
                    <a class="nav-link" style="font-size: 20px;">Menu</a>
                    <a class="nav-link" href="#">Setting</a>
                    <a class="nav-link" href="<?php echo base_url("user_c/daftar/") . $this->session->userdata('nim') ?>">Event Terdaftar</a>
                </nav>
            </div>
            <div class="col-9 border">
                <form method="post" class="form-validate pb-2 " action="<?php echo base_url('User_C/update'); ?>">
                    <div class="form-group row pt-4">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nim" name="nim" value="<?= $data->Nim ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="<?= $data->Nama ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="fakultas" name='fakultas' value="<?= $data->Fakultas ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Progdi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="progdi" name='progdi' value="<?= $data->Progdi ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kontak</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="kontak" name='kontak' value="<?= $data->No_Hp ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="password" name='password' value="<?= $data->Password ?>">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-sm btn-success waves-effect waves-light float-right mb-3">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- End banner Area -->
    <!-- End popular-course Area -->
    <?php $this->load->view('templates/footer'); ?>
    <script src="<?php echo base_url() ?>/assets/js/vendor/jquery-2.2.4.min.js"></script>
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