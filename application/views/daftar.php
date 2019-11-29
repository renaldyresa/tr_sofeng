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
                    <a class="nav-link" href="<?php echo base_url("user_c/setting/") . $this->session->userdata('nim') ?>">Setting</a>
                    <a class="nav-link" href="#">Event Terdaftar</a>
                </nav>
            </div>
            <div class="col-9 border">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%;">No</th>
                            <th scope="col" style="width: 20%;">Id Event</th>
                            <th scope="col" style="width: 50%;">Nama Event</th>
                            <th scope="col" style="width: 25%; text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $dt) {
                            ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $dt->Id_Event ?></td>
                                <td><?= $dt->Nama_Event ?></td>
                                <td>
                                    <a onclick="deleteConfirm('<?php echo site_url('User_C/delete_p/' . $dt->Id_Event . '/' . $this->session->userdata('nim')) ?>')" href="#!" class="btn btn-sm text-danger">
                                        <i class="fa fa-trash">Hapus</i>
                                    </a>
                                    <a href="<?php echo site_url('Event/detail/' . $dt->Id_Event) ?>" class="btn btn-sm">
                                        <i class="fa fa-info">Detail</i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $no += 1;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- End banner Area -->
    <!-- End popular-course Area -->
    <?php $this->load->view('templates/footer'); ?>

    <script>
        function deleteConfirm(url) {
            if (confirm("Apakah anda yakin batal ikut event ini  ?")) {
                window.location.href = url;
            }
        }
    </script>
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