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
    $this->load->view('templates/top');
    ?>
    <section class="event-details-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 event-details-left">
                    <?php
                    if ($this->session->flashdata('info')) {
                        $flash = $this->session->flashdata('info');
                        if ($flash == '1') { ?>
                            <div class="alert alert-success" role="alert">
                                Pendaftaran Berhasil
                            </div>
                        <?php } else if ($flash == '2') { ?>
                            <div class="alert alert-warning" role="alert">
                                Anda Sudah Terdaftar !!!
                            </div>
                        <?php } else { ?>
                            <div class="alert alert-danger" role="alert">
                                Pendaftaran Gagal !!!
                            </div>
                    <?php }
                    } ?>
                    <div class="main-img pb-2">
                        <img class="img-fluid" src="<?= base_url('upload/gambar/') . $data->Gambar ?>" alt="">
                    </div>
                    <span>Upload : <?= $data->Tgl_Publikasi ?></span><br>
                    <span>Update : <?php if ($data->Tgl_Pembaharuan == null) {
                                        echo '-';
                                    } else {
                                        echo $data->Tgl_Pembaharuan;
                                    } ?></span>
                    <div class="details-content">
                        <a href="#">
                            <h4><?= $data->Nama_Event ?></h4>
                        </a>
                        <?= $data->Detail_Event ?>
                    </div>
                    <?php if ($data->Status == '1') { ?>
                        <?php if ($data->Kapasitas != null && $data->Kapasitas != 0) { ?>
                            <center>
                                <div class="card text-center mt-4" style="width: 18rem;">
                                    <div class="card-body">
                                        <h2 class="card-title">Jumlah Terdaftar</h2>
                                        <h1 class="card-title"><?= $jumlah ?></h1>
                                    </div>
                                </div>
                                <?php if ($data->Kapasitas <= $jumlah) { ?>
                                    <button class="btn btn-warning">Pendaftar Sudah Penuh !!!</button>
                                <?php } else { ?>
                                    <button onclick="ceklogin()" class="text-uppercase primary-btn mx-auto mt-40">Daftar</button>
                                <?php } ?>
                            </center>
                        <?php } ?>
                    <?php } else { ?>
                        <center>
                            <div class="card text-center mt-4" style="width: 18rem;">
                                <div class="card-body">
                                    <h2 class="card-title">Event Sudah Berakhir</h2>
                                </div>
                            </div>
                        </center>
                    <?php } ?>
                    <div class="social-nav row no-gutters">
                        <div class="col-lg-6 col-md-6 ">
                            <ul class="focials">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-md-6 navs">
                            <a href="<?= base_url('event') ?>" class="nav-prev"><span class="lnr lnr-arrow-left"></span>Back</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 event-details-right">
                    <div class="single-event-details">
                        <h4>Details</h4>
                        <ul class="mt-10">
                            <li class="justify-content-between d-flex">
                                <span>Tanggal Mulai</span>
                                <span><?php if ($data->Tgl_Mulai == null || $data->Tgl_Mulai == 0) echo '-';
                                        else {
                                            $tgl = explode("-", $data->Tgl_Mulai);
                                            echo $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];
                                        } ?></span>
                            </li>
                            <li class="justify-content-between d-flex">
                                <span>Tanggal Berakhir</span>
                                <span><?php if ($data->Tgl_Berakhir == null || $data->Tgl_Berakhir == 0) echo '-';
                                        else {
                                            $tgl = explode("-", $data->Tgl_Berakhir);
                                            echo $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];
                                        } ?></span>
                            </li>
                            <li class="justify-content-between d-flex">
                                <span>Kapasitas</span>
                                <span><?php if ($data->Kapasitas == null || $data->Kapasitas == 0) echo '-';
                                        else echo $data->Kapasitas; ?></span>
                            </li>
                            <li class="justify-content-between d-flex">
                                <span>Harga Tiket</span>
                                <span><?php if ($data->Harga  == null || $data->Harga == 0) echo 'Free';
                                        else echo 'Rp. ' . $data->Harga; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End event-details Area -->
    <?php $this->load->view('templates/footer'); ?>

    <script type="text/javascript">
        function ceklogin() {
            var cek = "<?php echo $this->session->userdata('logged_in'); ?>";
            if (cek != "" && cek != null) {
                if (confirm("Apakah anda ingin yakin daftar ?"))
                    location.href = "<?= base_url('Event/daftar/') . $data->Id_Event . "/" . $this->session->userdata('nim') ?>";
            } else {
                if (confirm("Untuk Daftar anda harus login. Apakah anda ingin login ?"))
                    location.href = "<?= base_url('login') ?>";
            }
        }
    </script>
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/hoverIntent.js"></script>
    <script src="<?php echo base_url() ?>assets/js/superfish.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.tabs.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
</body>

</html>