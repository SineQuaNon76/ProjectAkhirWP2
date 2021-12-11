<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Berita </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">
    <!-- Google font-->
    <link href="<?= base_url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600'); ?>" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/icon/themify-icons/themify-icons.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/icon/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/icon/icofont/css/icofont.css'); ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery.mCustomScrollbar.css'); ?>">
</head>

<body>
    <div class="fixed-button">
        <a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
        </a>
    </div>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="<?= base_url('assets/images/logo.png'); ?>" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">


                            <li class="user-profile header-notification">
                                <a href="#!">

                                    <img src="<?= base_url('assets/images/avatar-4.jpg'); ?>" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">

                                    <li>
                                        <a href="<?= base_url('auth/logout'); ?>">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="<?= base_url('Dashboard'); ?>">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Data </div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="<?= base_url('Berita'); ?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Berita</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>






                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Edit Data Berita</h5>


                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">

                                                        <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-spinner-alt-5"></i>
                                                        </div>

                                                    </div>
                                                    <?php
                                                    $n = $data->row_array();
                                                    ?>
                                                    <div class="card-block">

                                                        <form action="<?= base_url('Berita/update_berita'); ?>" method="POST" class="form-horizontal">

                                                            <div class="form-group row">
                                                                <input type="hidden" name="nid" value="<?= $n['id']; ?>">
                                                                <label class="col-sm-2 col-form-label">Judul Berita</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="njudul" value="<?= $n['judul']; ?>" placeholder="Masukan Judul Berita">

                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kategori Berita</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="nkategori" value="<?= $n['kategori']; ?>" placeholder="Masukan Kategori Berita">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Deskripsi Berita</label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="5" cols="5" name="nisi_berita" class="form-control" <?= $n['isi_berita']; ?> placeholder="Masukan Deskripsi Berita"></textarea>
                                                                </div>
                                                            </div>
                                                            <input type="submit" class="btn btn-inverse btn-square" value="update Berita">
                                                        </form>


                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                                                <!-- Input Grid card start -->

                                                <!-- Input Grid card end -->
                                                <!-- Input Validation card start -->

                                                <!-- Input Validation card end -->
                                                <!-- Input Alignment card start -->

                                                <!-- Input Alignment card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url('assets/js/jquery/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/popper.js/popper.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-slimscroll/jquery.slimscroll.js'); ?>"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url('assets/js/modernizr/modernizr.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/modernizr/css-scrollbars.js'); ?>"></script>

    <!-- Custom js -->
    <script type="text/javascript" src="<?= base_url('assets/js/script.js'); ?>"></script>
    <script src="<?= base_url('assets/js/pcoded.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/vartical-demo.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>

</body>

</html>