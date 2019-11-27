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
    <title>Newsportal | Add Post</title>

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
                                <h4 class="page-title">Manage Post </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Post</a>
                                    </li>
                                    <li class="active">
                                        Manage Post
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <?php
                                    if ($this->session->flashdata('success')) {
                                        $flash = $this->session->flashdata('success');
                                        ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= $flash ?>
                                        </div>
                                    <?php } ?>
                                    <table class="table table-colored table-centered table-inverse m-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 7%;">Id Event</th>
                                                <th style="width: 15%;"> Judul</th>
                                                <th style="width: 7%;">Tgl Publikasi</th>
                                                <th style="width: 7%;">Update</th>
                                                <th style="width: 8%;">Kapasitas</th>
                                                <th style="width: 7%;">Mulai</th>
                                                <th style="width: 7%;">Akhir</th>
                                                <th style="width: 7%;">Status</th>
                                                <th style="width: 15%; text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $dt) : ?>
                                                <tr>
                                                    <td><?= $dt->Id_Event ?></td>
                                                    <td><?= $dt->Nama_Event ?></td>
                                                    <td><?= $dt->Tgl_Publikasi ?></td>
                                                    <td><?php if ($dt->Tgl_Pembaharuan == null) {
                                                                echo '-';
                                                            } else {
                                                                echo $dt->Tgl_Pembaharuan;
                                                            } ?></td>
                                                    <td><?php if ($dt->Kapasitas == 0) {
                                                                echo '-';
                                                            } else {
                                                                echo $dt->Kapasitas;
                                                            } ?></td>
                                                    <td><?php if ($dt->Tgl_Mulai == null) {
                                                                echo '-';
                                                            } else {
                                                                echo $dt->Tgl_Mulai;
                                                            } ?></td>
                                                    <td><?php if ($dt->Tgl_Berakhir == null) {
                                                                echo '-';
                                                            } else {
                                                                echo $dt->Tgl_Berakhir;
                                                            } ?></td>
                                                    <td><?php if ($dt->Status == '1') echo 'Active';
                                                            else echo 'Non Active'; ?></td>
                                                    <td style="text-align: center;">
                                                        <a href="<?php echo site_url('admin/Manage_post/formedit/' . $dt->Id_Event) ?>" class="btn btn-small">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                        <a onclick="deleteConfirm('<?php echo site_url('admin/Manage_post/delete/' . $dt->Id_Event) ?>')" href="#!" class="btn btn-small text-danger">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </a>
                                                        <a href="<?php echo site_url('admin/Manage_post/detail/' . $dt->Id_Event) ?>" class="btn btn-small">
                                                            <i class="fa fa-info"></i> Detail
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
            if (confirm("Apakah anda yakin menghapus event ini ?")) {
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