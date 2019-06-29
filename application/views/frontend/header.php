<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Masjid Jabal Rizqy</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/charity2/css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/charity2/css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/charity2/css/owl.theme.default.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?= base_url()?>assets/charity2/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/charity2/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- HEADER -->
<header id="home">
    <!-- NAVGATION -->
    <nav id="main-navbar">
        <div class="container">
            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="../index.html"><img src="<?= base_url()?>assets/charity2/img/logo.png" alt="logo"></a>
                </div>
                <!-- Logo -->

                <!-- Mobile toggle -->
                <button class="navbar-toggle-btn">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Mobile toggle -->

                <!-- Mobile Search toggle -->
                <button class="search-toggle-btn">
                    <i class="fa fa-search"></i>
                </button>
                <!-- Mobile Search toggle -->
            </div>


            <!-- Nav menu -->
            <ul class="navbar-menu nav navbar-nav navbar-right">
                <li><a href="<?= base_url()?>welcome">Home</a></li>
                <li><a href="<?= base_url()?>kajian_site">Kajian</a></li>
                <li><a href="<?= base_url()?>event_site">Event</a></li>
                <li><a href="<?= base_url()?>lowongan_site">lowongan</a></li>
                <li class="has-dropdown"><a href="#">Kategori</a>
                    <ul class="dropdown">
                        <?php
                        foreach ($kategori->result() as $k){
                            ?>
                            <li><a href="<?=site_url("welcome/kategori/".$k->kategori_id)?>"><?= $k->kategori_nama?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Login</a></li>
            </ul>
            <!-- Nav menu -->
        </div>
    </nav>
    <!-- /NAVGATION -->
