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
                <li class="nav-item"><a class="nav-link">Simulasi Monte Carlo</a></li>
                <li class="nav-item"><a class="nav-link">Tahun Ajaran</a></li>
                <li class=""><a class="nav-link js-scroll-trigger" href="../2021-2022/"><i class="fas fa-calendar"></i><span class="bot-line"></span> 2021 - 2022</a></li>
                <li class=""><a class="nav-link js-scroll-trigger" href="../2022-2023/"><i class="fas fa-calendar"></i><span class="bot-line"></span> 2022 - 2023</a></li>
                <li class=""><a class="nav-link js-scroll-trigger" href="../2023-2024/"><i class="fas fa-calendar"></i><span class="bot-line"></span> 2023 - 2024</a></li>
                <li class=""><a class="nav-link js-scroll-trigger" href="../landing"><i class="fas fa-chevron-circle-left"></i><span class="bot-line"></span> Kembali</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- Home-->
        <section class="resume-section" id="home">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    Simulasi <br>
                    <span class="text-primary">Monte Carlo</span>
                </h1>
                <div class="subheading mb-3">
                    Dibuat Oleh : Muhammad Najib
                </div>
                <p class="lead mb-5">Prediksi Peserta Didik Baru untuk Mengoptimalkan Promosi Menggunakan Algoritma Monte Carlo</p>
                <div class="social-icons">
                    <a class="social-icon" href="https://id.linkedin.com/in/muhammadnajibinv/" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="https://www.instagram.com/muhammadnajibinv/" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                    <a class="social-icon" href="https://www.youtube.com/buanditchemical/" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
                    <a class="social-icon" href="https://www.facebook.com/thainvoker/" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>

        <!-- Pengertian-->
        <section class="resume-section" id="pengertian">
            <div class="resume-section-content">
                <h2 class="mb-2">Apa Itu Monte Carlo ?</h2>
                <p><b>Monte Carlo</b> adalah suatu metode yang digunakan untuk menghasilkan outcome
                    dari suatu distribusi probabilitas. Proses random dalam Monte Carlo menggunakan
                    angka-angka random. Angka random ini adalah suatu set angka yang kemungkinan
                    timbulnya adalah sama (probabilitas timbulnya angka tersebut sama) dan pola angka
                    yang timbul tidak dapat diidentifikasi. Angka random yang dipakai dalam simulasi
                    Monte Carlo ini dihasilkan komputer <b>(Dewi &amp; Sumijan, 2021)</b>.</p>
                <p class="mb-0">Simulasi Monte Carlo
                    digunakan untuk menerjemahkan ketidakpastian resiko yang secara detail dan
                    mempunyai dampak yang potensial atau tinggi pada penelitian, melakukan
                    pengelompokan berdasarkan dampak-dampak dari efek yang terjadi pada sebuah
                    penelitian <b>(Anggraini &amp; Nurcahyo, 2021)</b>.</p>
            </div>
        </section>

        <!-- Pembimbing-->
        <section class="resume-section" id="pembimbing">
            <div class="resume-section-content">
                <h2 class="mb-5">Dosen Pembimbing</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Dr. Ir. Sumijan, MSc.</h3>
                        <div class="subheading mb-3">Dosen Pembimbing 1</div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Dr. Ir. Gunadi Widi Nurcahyo, M.Sc</h3>
                        <div class="subheading mb-3">Dosen Pembimbing 2</div>
                    </div>
                </div>
            </div>
        </section>

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