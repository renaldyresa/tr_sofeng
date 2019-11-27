<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App title -->
    <title>Newsportal | Event</title>

    <!-- Summernote css -->
    <link href="<?php echo base_url() ?>assets1/plugins/summernote/summernote.css" rel="stylesheet" />

    <!-- Select2 -->
    <link href="<?php echo base_url() ?>assets1/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Jquery filer css -->
    <link href="<?php echo base_url() ?>assets1/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets1/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

    <!-- App css -->
    <link href="<?php echo base_url() ?>assets1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets1/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/plugins/switchery/switchery.min.css">
    <script src="<?php echo base_url() ?>assets1/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Start header and footer here -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Event </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Post</a>
                                    </li>
                                    <li>
                                        <a href="">Manage Post</a>
                                    </li>
                                    <li class="active">
                                        Detail Event
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <div class="col-sm-2">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Id Event</li>
                                            <li class="list-group-item">Nama Event</li>
                                            <li class="list-group-item">Tanggal Publikasi</li>
                                            <li class="list-group-item">Tanggal Pembaharuan</li>
                                            <li class="list-group-item">Tanggal Mulai</li>
                                            <li class="list-group-item">Tanggal Berakhir</li>
                                            <li class="list-group-item">Harga Tiket</li>
                                            <li class="list-group-item">Kapasitas</li>
                                            <li class="list-group-item">Status</li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">: <?= $data->Id_Event ?></li>
                                            <li class="list-group-item">: <?= $data->Nama_Event ?></li>
                                            <li class="list-group-item">: <?= $data->Tgl_Publikasi ?></li>
                                            <li class="list-group-item">: <?= $data->Tgl_Pembaharuan ?></li>
                                            <li class="list-group-item">: <?= $data->Tgl_Mulai ?></li>
                                            <li class="list-group-item">: <?= $data->Tgl_Berakhir ?></li>
                                            <li class="list-group-item">: <?= $data->Harga ?></li>
                                            <li class="list-group-item">: <?= $data->Kapasitas ?></li>
                                            <li class="list-group-item">: <?php if ($data->Status == '1') echo 'Active';
                                                                            else echo 'Non Active'; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-5">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <img width="100%" class="img-fluid" src="<?= base_url('upload/gambar/') . $data->Gambar ?>" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <table class="table table-colored table-centered table-inverse m-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 7%;">Nim</th>
                                                <th style="width: 15%;">Nama</th>
                                                <th style="width: 15%;">Fakultas</th>
                                                <th style="width: 15%;">Progdi</th>
                                                <th style="width: 10%;">Nomor HP</th>
                                                <th style="width: 10%;">Tanggal Daftar</th>
                                                <th style="width: 15%; text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data1 as $dt) : ?>
                                                <tr>
                                                    <td><?= $dt->Nim ?></td>
                                                    <td><?= $dt->Nama ?></td>
                                                    <td><?= $dt->Fakultas ?></td>
                                                    <td><?= $dt->Progdi ?></td>
                                                    <td><?= $dt->No_Hp ?></td>
                                                    <td><?= $dt->Tanggal ?></td>
                                                    <td style="text-align: center;">
                                                        <a onclick="deleteConfirm('<?php echo site_url('admin/manage_post/delete_p/' . $dt->Id_Event . '/' . $dt->Nim) ?>')" href="#!" class="btn btn-small text-danger">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->

            </div> <!-- content -->

            <?php
            $this->load->view('admin/templates/footer');
            ?>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <script>
        function deleteConfirm(url) {
            if (confirm("Apakah anda yakin menghapus peserta ini ?")) {
                window.location.href = url;
            }
        }
    </script>
    <!-- jQuery  -->
    <script src="<?php echo base_url() ?>assets1/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/detect.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/fastclick.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/jquery.blockUI.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/waves.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets1/plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="<?php echo base_url() ?>assets1/plugins/summernote/summernote.min.js"></script>
    <!-- Select 2 -->
    <script src="<?php echo base_url() ?>assets1/plugins/select2/js/select2.min.js"></script>
    <!-- Jquery filer js -->
    <script src="<?php echo base_url() ?>assets1/plugins/jquery.filer/js/jquery.filer.min.js"></script>

    <!-- page specific js -->
    <script src="<?php echo base_url() ?>assets1/pages/jquery.blog-add.init.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url() ?>assets1/js/jquery.core.js"></script>
    <script src="<?php echo base_url() ?>assets1/js/jquery.app.js"></script>
    <script src="<?php echo base_url() ?>assets1/plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="<?php echo base_url() ?>assets1/plugins/summernote/summernote.min.js"></script>

</body>

</html>