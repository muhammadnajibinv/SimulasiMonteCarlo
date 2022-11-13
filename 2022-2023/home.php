<?php
$con = mysqli_connect('localhost', 'root', '', 'testing') or die(mysqli_error());
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Monte Carlo SD Telkom Padang</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/styles.css" rel="stylesheet" />

    <style>
        .disable {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>

</head>

<body id="page-top">
    <!-- Navigation animsition-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger">
            <span class="d-block d-lg-none">Monte Carlo SD Telkom Padang</span>
            <span class="d-none d-lg-block"><img class="img-fluid mx-auto mb-2" src="../images/icon/logo-white.png" alt="..." style="max-width: 60%;" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link">Prediksi 2022 - 2023</a></li>
                <?php if ($_GET['p'] == 'home' || $_GET['p'] == 'welcome') { ?> <li class="active"> <?php } else { ?>
                    <li> <?php } ?>
                    <a class="nav-link js-scroll-trigger" href="home.php?p=home">
                        <i class="fas fa-home"></i>
                        <span class="bot-line"></span>Home</a>

                    <?php if ($_GET['p'] == 'distribusi-frekuensi') { ?>
                    <li class="active"> <?php } else { ?>
                    <li> <?php } ?>
                    <a class="nav-link js-scroll-trigger" href="home.php?p=distribusi-frekuensi">
                        <i class="fas fa-line-chart"></i>
                        <span class="bot-line"></span>1.Frekuensi</a>

                    <?php if ($_GET['p'] == 'distribusi-probabilitas') { ?>
                    <li class="active"> <?php } else { ?>
                    <li> <?php } ?>
                    <a class="nav-link js-scroll-trigger" href="home.php?p=distribusi-probabilitas">
                        <i class="fas fa-server"></i>
                        <span class="bot-line"></span>2.Probabilitas</a>

                    <?php if ($_GET['p'] == 'probabilitas-kumulatif') { ?>
                    <li class="active"> <?php } else { ?>
                    <li> <?php } ?>
                    <a class="nav-link js-scroll-trigger" href="home.php?p=probabilitas-kumulatif">
                        <i class="fas fa-signal"></i>
                        <span class="bot-line"></span>3.Prob. Kumulatif</a>

                    <?php if ($_GET['p'] == 'interval') { ?>
                    <li class="active"> <?php } else { ?>
                    <li> <?php } ?>
                    <a class="nav-link js-scroll-trigger" href="home.php?p=interval">
                        <i class="fas fa-bar-chart"></i>
                        <span class="bot-line"></span>4.Interval</a>

                    <?php if ($_GET['p'] == 'random-number' || $_GET['p'] == 'generate') { ?>
                    <li class="active"> <?php } else if (empty($_SESSION['random-number'])) { ?>
                    <li class="disable"> <?php } else { ?>
                    <li> <?php } ?>
                    <a class="nav-link js-scroll-trigger" href="home.php?p=generate">
                        <i class="fas fa-pie-chart"></i>
                        <span class="bot-line"></span>5.Random Number</a>

                    <?php if ($_GET['p'] == 'hasil-simulasi') { ?>
                    <li class="active"> <?php } else if (empty($_SESSION['hasil'])) { ?>
                    <li class="disable"> <?php } else { ?>
                    <li> <?php } ?>
                    <a class="nav-link js-scroll-trigger" href="home.php?p=hasil-simulasi">
                        <i class="fas fa-window-maximize"></i>
                        <span class="bot-line"></span>6.Hasil Simulasi</a>

                    <?php if ($_GET['p'] == 'keluar') { ?>
                    <li class="active"> <?php } else { ?>
                    <li> <?php } ?>
                    <a class="nav-link js-scroll-trigger" href="home.php?p=keluar">
                        <i class="fas fa-chevron-circle-left"></i>
                        <span class="bot-line"></span>Kembali</a>

            </ul>
        </div>
    </nav>

    <!-- PAGE CONTENT-->
    <?php
    if ($_GET['p'] == 'distribusi-frekuensi') {
        include('distribusi-frekuensi.php');
    } else if ($_GET['p'] == 'home' || $_GET['p'] == 'welcome') {
        include('beranda.php');
    } else if ($_GET['p'] == 'distribusi-probabilitas') {
        include('distribusi-probabilitas.php');
    } else if ($_GET['p'] == 'probabilitas-kumulatif') {
        include('probabilitas-kumulatif.php');
    } else if ($_GET['p'] == 'interval') {
        include('interval.php');
    } else if ($_GET['p'] == 'generate') {
        include('generate.php');
    } else if ($_GET['p'] == 'random-number') {
        include('random-number.php');
    } else if ($_GET['p'] == 'hasil-simulasi') {
        include('hasil-simulasi.php');
    } else if ($_GET['p'] == 'keluar') {
        include('logout.php');
    }
    ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->