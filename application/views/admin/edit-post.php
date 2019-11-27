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
                                <h4 class="page-title">Edit Post </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Post</a>
                                    </li>
                                    <li class="active">
                                        Edit Post
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-6">


                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="p-6">
                                <div class="">
                                    <form action="<?php echo site_url('admin/Manage_post/update/' . $data->Id_Event) ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $data->Nama_Event ?>" required>
                                        </div>
                                        <input type="hidden" name="publikasi" value="<?php echo $data->Tgl_Publikasi ?>" />
                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Kapasitas</label>
                                            <input type="number" class="form-control" id="kapasitas" name="kapasitas" value="<?= $data->Kapasitas ?>">
                                        </div>
                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Tanggal Mulai</label>
                                            <input type="date" class="form-control" id="mulai" name="mulai" value="<?= $data->Tgl_Mulai ?>">
                                        </div>
                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Tanggal Berakhir</label>
                                            <input type="date" class="form-control" id="akhir" name="akhir" value="<?= $data->Tgl_Berakhir ?>">
                                        </div>
                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Harga</label>
                                            <input type="number" class="form-control" id="harga" name="harga" value="<?= $data->Harga ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box">
                                                    <h4 class="m-b-30 m-t-0 header-title"><b>Detail</b></h4>
                                                    <textarea class="summernote" name="detail" required><?= $data->Detail_Event ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box">
                                                    <h4 class="m-b-30 m-t-0 header-title"><b>Gambar</b></h4>
                                                    <input type="hidden" name="old_image" value="<?php echo $data->Gambar ?>" />
                                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box">
                                                    <h4 class="m-b-30 m-t-0 header-title"><b>Status</b></h4>
                                                    <label class="radio-inline"><input type="radio" name="status" value='1' <?php if ($data->Status == '1') echo 'checked' ?>>Active</label>
                                                    <label class="radio-inline"><input type="radio" name="status" value='0' <?php if ($data->Status == '0') echo 'checked' ?>>Non Active</label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Update</button>
                                        <a href="<?php echo site_url('admin/Manage_post/') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button></a>
                                    </form>
                                </div>
                            </div> <!-- end p-20 -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->



                </div> <!-- container -->

            </div> <!-- content -->


        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('admin/templates/footer');
        ?>

    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
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

    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 240, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
            // Select2
            $(".select2").select2();

            $(".select2-limiting").select2({
                maximumSelectionLength: 2
            });
        });
    </script>
    <script src="<?php echo base_url() ?>assets1/plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="<?php echo base_url() ?>assets1/plugins/summernote/summernote.min.js"></script>




</body>

</html>