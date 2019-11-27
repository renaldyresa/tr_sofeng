<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">0298-321212</span></a>
                    <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">humas@adm.uksw.edu</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="<?php echo base_url() ?>/index.html"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="<?php echo base_url() ?>home">Home</a></li>
                    <li><a href="<?php echo base_url() ?>home/About">About</a></li>
                    <li><a href="<?php echo base_url() ?>event">Events</a></li>
                    <?php if ($this->session->userdata('logged_in')) { ?>
                        <li class="menu-has-children"><a href=""><?php echo $this->session->userdata('nama'); ?></a>
                            <ul>
                                <li><a href="<?php echo base_url("user_c/daftar/") . $this->session->userdata('nim') ?>">Event Terdaftar</a></li>
                                <li><a href="<?php echo base_url("user_c/setting/") . $this->session->userdata('nim') ?>">Setting</a></li>
                                <li><a href="<?php echo base_url() ?>Login/logout">Log-out</a></li>
                            </ul>
                        </li>

                    <?php } else { ?>
                        <li><a href="<?php echo base_url() ?>/Login">login</a></li>
                    <?php } ?>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->