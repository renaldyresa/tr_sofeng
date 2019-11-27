<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="author" content="colorlib">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>UKSW</title>
    <!--CSS ============================================= -->
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
    $this->load->view('templates/top');
    ?>
    <!-- Start events-list Area -->
    <center>
        <h1 class="pt-5">Events</h1>
    </center>
    <section class="events-list-area section-gap event-page-lists">
        <div class="container">
            <div class="row align-items-center">
                <?php foreach ($data as $dt) : ?>
                    <div class="col-lg-6 pb-30">
                        <div class="single-carusel row align-items-center">
                            <div class="col-12 col-md-6 thumb">
                                <a href="<?php echo site_url('Event/detail/' . $dt->Id_Event) ?>">
                                    <img class="img-fluid" src="<?= base_url('upload/gambar/') . $dt->Gambar ?>" alt="">
                                </a>
                            </div>
                            <div class="detials col-12 col-md-6">
                                <p>Upload : <?= $dt->Tgl_Publikasi ?></p>
                                <p>Update : <?php if ($dt->Tgl_Pembaharuan == null) {
                                                    echo '-';
                                                } else {
                                                    echo $dt->Tgl_Pembaharuan;
                                                } ?></p>
                                <a href="<?php echo site_url('Event/detail/' . $dt->Id_Event) ?>">
                                    <h4><?= $dt->Nama_Event ?></h4>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!-- End events-list Area -->
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