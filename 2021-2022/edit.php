<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$kd_bulan = $pendaftar = "";
$kd_bulan_err = $pendaftar_err =  "";

// Processing form data when form is submitted
if (isset($_POST["kd_bulan"]) && !empty($_POST["kd_bulan"])) {
    // Get hidden input value
    $kd_bulan = $_POST["kd_bulan"];

    // Validate Kode
    $input_kd_bulan = trim($_POST["kd_bulan"]);
    if (empty($input_kd_bulan)) {
        $kd_bulan_err = "Please enter the salary amount.";
    } elseif (!ctype_digit($input_kd_bulan)) {
        $kd_bulan_err = "Please enter a positive integer value.";
    } else {
        $kd_bulan = $input_kd_bulan;
    }

    // Validate Jumlah pendaftar
    $input_pendaftar = trim($_POST["pendaftar"]);
    if (empty($input_pendaftar)) {
        $pendaftar_err = "Please enter the Jumlah pendaftar.";
    } elseif (!ctype_digit($input_pendaftar)) {
        $pendaftar_err = "Please enter a positive integer value.";
    } else {
        $pendaftar = $input_pendaftar;
    }


    // Check input errors before inserting in database
    if (empty($kd_bulan_err) && empty($pendaftar_err)) {
        // Prepare an update statement
        $sql = "UPDATE pendaftar2021_2022 SET pendaftar=? WHERE kd_bulan=?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_pendaftar, $param_kd_bulan);

            // Set parameters
            $param_kd_bulan = $kd_bulan;
            $param_pendaftar = $pendaftar;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
                header("location: home.php?p=distribusi-frekuensi");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
} else {
    // Check existence of id parameter before processing further
    if (isset($_GET["kd_bulan"]) && !empty(trim($_GET["kd_bulan"]))) {
        // Get URL parameter
        $kd_bulan =  trim($_GET["kd_bulan"]);

        // Prepare a select statement
        $sql = "SELECT * FROM pendaftar2021_2022 WHERE kd_bulan = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_kd_bulan);

            // Set parameters
            $param_kd_bulan = $kd_bulan;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $kd_bulan = $row["kd_bulan"];
                    $pendaftar = $row["pendaftar"];
                } else {
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($link);
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

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
                <li class="nav-item"><a class="nav-link">Prediksi 2021 - 2022</a></li>
                <li class="nav-item"><a class="nav-link">Edit Frekuensi</a></li>
                <li class=""><a class="nav-link js-scroll-trigger" href="home.php?p=distribusi-frekuensi"><i class="fas fa-chevron-circle-left"></i><span class="bot-info"></span> Kembali</a></li>
            </ul>
        </div>
    </nav>

    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2 pt-5">
                    <div class="card">
                        <div class="card-header">Edit Frekuensi</div>
                        <div class="card-body">
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2 text-center">
                                    <br>
                                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                                        <div class="form-group <?php echo (!empty($kd_bulan_err)) ? 'has-error' : ''; ?>">
                                            <label>Kode Bulan</label>
                                            <input type="text" name="kd_bulan" class="form-control" readonly value="<?php echo $kd_bulan; ?>">
                                            <span class="help-block"><?php echo $kd_bulan_err; ?></span>
                                        </div>
                                        <div class="form-group <?php echo (!empty($pendaftar_err)) ? 'has-error' : ''; ?>">
                                            <label>Pendaftar</label>
                                            <input type="text" name="pendaftar" class="form-control" required value="<?php echo $pendaftar; ?>">
                                            <span class="help-block"><?php echo $pendaftar_err; ?></span>
                                        </div>
                                        <input type="hidden" name="kd_bulan" value="<?php echo $kd_bulan; ?>" />
                                        <div>
                                            <button type="submit" class="btn btn-lg btn-info btn-block" name="Perbarui">
                                                <i class="fa fa-save fa-lg"></i>&nbsp;
                                                <span>Perbarui</span>
                                            </button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
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