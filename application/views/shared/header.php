<!--

=========================================================
* Impact Design System - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/impact-design-system
* Copyright 2010 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/impact-design-system/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?php echo $title; ?></title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/impact-design-system" />

    <!--  Social tags      -->
    <meta name="keywords" content="impact design system, design system, login, form, table, tables, calendar, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, sidebar, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, car, fullcalendar, about us, invoice, account, chat, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, impact, impact ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, impact dashboard">
    <meta name="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Impact Design System by Creative Tim">
    <meta itemprop="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Impact Design System by Creative Tim">

    <meta name="twitter:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Impact Design System by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/impact-design-system/" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg" />
    <meta property="og:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included." />
    <meta property="og:site_name" content="Creative Tim" />

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>assets/dashboard/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/assets/vendor/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/assets/vendor/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/assets/vendor/summernote-master/summernote.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/assets/vendor/dropify/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/b-1.6.5/datatables.min.css" />

    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/css/dashboard.css" type="text/css">


</head>


<body>
    <!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  d-flex  align-items-center">
                <a class="navbar-brand" href="dashboard">
                    <img src="<?php echo base_url() ?>assets/dashboard/assets/img/brand/dark.svg" height="40" class="navbar-brand-img">
                </a>
                <div class=" ml-auto ">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard">
                                <i class="ni ni-shop text-primary"></i>
                                <span class="nav-link-text">Dashboards</span>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('user_level') == '1') { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-transaksi" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-transaksi">
                                    <i class="ni ni-ungroup text-orange"></i>
                                    <span class="nav-link-text">Transaksi</span>
                                </a>
                                <div class="collapse" id="navbar-transaksi">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pembelian" class="nav-link">
                                                <span class="sidenav-mini-icon"> B </span>
                                                <span class="sidenav-normal"> Pembelian </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-konfirmasi" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-konfirmasi">
                                    <i class="ni ni-bag-17 text-info"></i>
                                    <span class="nav-link-text">Konfirmasi</span>
                                </a>
                                <div class="collapse" id="navbar-konfirmasi">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pesanan" class="nav-link">
                                                <span class="sidenav-mini-icon"> P </span>
                                                <span class="sidenav-normal"> Pemesanan </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="konfirmasipengiriman" class="nav-link">
                                                <span class="sidenav-mini-icon"> P </span>
                                                <span class="sidenav-normal"> Pengiriman </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <hr class="my-3">
                            <h6 class="navbar-heading pl-4 text-muted">
                                <span class="docs-normal">Master Data</span>
                            </h6>
                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-barang" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-barang">
                                    <i class="ni ni-spaceship"></i>
                                    <span class="nav-link-text">Barang</span>
                                </a>
                                <div class="collapse" id="navbar-barang">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="barang" class="nav-link">
                                                <span class="sidenav-mini-icon"> B </span>
                                                <span class="sidenav-normal"> Barang </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="promo" class="nav-link">
                                                <span class="sidenav-mini-icon"> P </span>
                                                <span class="sidenav-normal"> Promo </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="kategori" class="nav-link">
                                                <span class="sidenav-mini-icon"> K </span>
                                                <span class="sidenav-normal"> Kategori </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-pengguna" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-pengguna">
                                    <i class="ni ni-circle-08"></i>
                                    <span class="nav-link-text">Pengguna</span>
                                </a>
                                <div class="collapse" id="navbar-pengguna">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pengguna" class="nav-link">
                                                <span class="sidenav-mini-icon"> U </span>
                                                <span class="sidenav-normal"> Pengguna </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="daftarstaff" class="nav-link">
                                                <span class="sidenav-mini-icon"> S </span>
                                                <span class="sidenav-normal"> Staff </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="bank">
                                    <i class="ni ni-credit-card"></i>
                                    <span class="nav-link-text">Bank</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="daftartutorial">
                                    <i class="ni ni-air-baloon"></i>
                                    <span class="nav-link-text">Tutorial</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="laporan">
                                    <i class="ni ni-chart-pie-35"></i>
                                    <span class="nav-link-text">Laporan</span>
                                </a>
                            </li>
                        <?php } elseif ($this->session->userdata('user_level') == '2') { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-transaksi" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-transaksi">
                                    <i class="ni ni-ungroup text-orange"></i>
                                    <span class="nav-link-text">Transaksi</span>
                                </a>
                                <div class="collapse" id="navbar-transaksi">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="penjualan" class="nav-link">
                                                <span class="sidenav-mini-icon"> J </span>
                                                <span class="sidenav-normal"> Penjualan </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pembelian" class="nav-link">
                                                <span class="sidenav-mini-icon"> B </span>
                                                <span class="sidenav-normal"> Pembelian </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-konfirmasi" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-konfirmasi">
                                    <i class="ni ni-bag-17 text-info"></i>
                                    <span class="nav-link-text">Konfirmasi</span>
                                </a>
                                <div class="collapse" id="navbar-konfirmasi">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="konfirmasipembayaran" class="nav-link">
                                                <span class="sidenav-mini-icon"> P </span>
                                                <span class="sidenav-normal"> Pembayaran </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="konfirmasipengiriman" class="nav-link">
                                                <span class="sidenav-mini-icon"> P </span>
                                                <span class="sidenav-normal"> Pengiriman </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <hr class="my-3">
                            <h6 class="navbar-heading pl-4 text-muted">
                                <span class="docs-normal">Master Data</span>
                            </h6>

                            <li class="nav-item">
                                <a class="nav-link" href="laporan">
                                    <i class="ni ni-chart-pie-35"></i>
                                    <span class="nav-link-text">Laporan</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-transaksi" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-transaksi">
                                    <i class="ni ni-ungroup text-orange"></i>
                                    <span class="nav-link-text">Transaksi</span>
                                </a>
                                <div class="collapse" id="navbar-transaksi">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="status_pemesanan" class="nav-link">
                                                <span class="sidenav-mini-icon"> SP </span>
                                                <span class="sidenav-normal"> Status Pemesanan </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart" class="nav-link">
                                                <span class="sidenav-mini-icon"> C </span>
                                                <span class="sidenav-normal"> Cart </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="<?php echo base_url() ?>assets/dashboard/assets/img/theme/team-4.jpg">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"><?php echo $this->session->userdata('user_nama'); ?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Settings</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="logout" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->