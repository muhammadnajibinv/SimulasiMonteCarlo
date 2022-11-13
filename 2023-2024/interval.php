<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <form action="" method="post">
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-1 pt-5">
                        <h3 class="title-5 m-b-35">Interval Angka</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left"></div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="submit" name="simpan-interval">
                                    <i class="zmdi zmdi-plus"></i>Simpan Interval</button>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 text-center">
                                <thead>
                                    <tr>
                                        <th rowspan="2"> # </th>
                                        <th rowspan="2">Bulan</th>
                                        <th rowspan="2">Frekuensi</th>
                                        <th rowspan="2">Probabilitas</th>
                                        <th rowspan="2">Probabilitas Kumulatif</th>
                                        <th colspan="2">Interval</th>
                                    </tr>
                                    <tr>
                                        <th>Awal</th>
                                        <th>Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $totals = mysqli_query($con, "SELECT SUM(pendaftar) AS total FROM pendaftar2023_2024") or die(mysqli_error($con));
                                    $total = mysqli_fetch_array($totals);
                                    $no = 1;
                                    $sqls = mysqli_query($con, "SELECT * FROM pendaftar2023_2024 a INNER JOIN bulan b ON a.kd_bulan = b.kd_bulan") or die(mysqli_error($con));
                                    foreach ($sqls as $sql) { ?>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td><?= $no ?></td>
                                            <td><?= $sql['nama_bulan'] ?></td>
                                            <td><?= $sql['pendaftar'] ?><input type="hidden" name="pendaftar-<?= $no ?>" value="<?= $sql['pendaftar'] ?>"></td>
                                            <td><?= $prob = round($sql['pendaftar'] / $total['total'], 2) ?></td>
                                            <td><?= @$probkum += $prob  ?></td>
                                            <td><?php if ($no == 1) {
                                                    $awal = 1;
                                                } else {
                                                    $awal = $akhiratas + 1;
                                                } ?><?= $awal ?><input type="hidden" name="awal-ke-<?= $no ?>" value="<?= $awal ?>"></td>
                                            <td><?= $akhir = $probkum * 100 ?><input type="hidden" name="akhir-ke-<?= $no ?>" value="<?= $akhir ?>"></td>
                                        </tr>
                                        <?php $akhiratas = $akhir ?>
                                        <?php $no++ ?>
                                        <?php @$jmlfreq += $sql['pendaftar'] ?>
                                        <?php @$jmlprob  += $prob ?>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">Jumlah</td>
                                        <td><?= number_format($jmlfreq) ?></td>
                                        <td><?= $jmlprob ?></td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <input type="hidden" name="jumlah" value="<?= $no - 1 ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <!-- END DATA TABLE-->

    <?php
    if (isset($_POST['simpan-interval'])) {

        mysqli_query($con, "DELETE FROM range2023_2024") or die(mysqli_error($con));

        $jumlah = $_POST['jumlah'];
        for ($i = 1; $i <= $jumlah; $i++) {
            $pendaftar = $_POST['pendaftar-' . $i];
            $awal       = $_POST['awal-ke-' . $i];
            $akhir      = $_POST['akhir-ke-' . $i];

            mysqli_query($con, "INSERT INTO range2023_2024 (pendaftar, awal, akhir) VALUES ('$pendaftar', '$awal', '$akhir')") or die(mysqli_error($con));
        }

        $_SESSION['random-number'] = "OKE";

        echo "
    <script>
    window.location='home.php?p=interval'
    </script>
    ";
    }
    ?>