<?php
if (empty($_SESSION['hasil'])) {
} else { ?>

    <div class="page-content--bgf7">

        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-2 pt-5">
                        <h3 class="title-5 m-b-35">Hasil Simulasi</h3>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 text-center">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>Bulan</th>
                                        <th>Random Number</th>
                                        <th>Prediksi</th>
                                        <th>Real</th>
                                        <th>Presentase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sqls = mysqli_query($con, "SELECT b.nama_bulan, a.bilangan_acak, aa.pendaftar FROM bulan b, acak2022_2023 a, pendaftar2023_2024 aa WHERE b.kd_bulan = a.kd_bulan AND b.kd_bulan = aa.kd_bulan") or die(mysqli_error($con));
                                    foreach ($sqls as $sql) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $sql['nama_bulan'] ?></td>
                                            <td><?= $angka = $sql['bilangan_acak'] ?></td>
                                            <td>
                                                <?php
                                                $ranges = mysqli_query($con, "SELECT * FROM range2022_2023") or die(mysqli_error($con));
                                                foreach ($ranges as $range) {
                                                    if ($angka >= $range['awal'] && $angka <= $range['akhir']) {
                                                        $simulasi =  $range['pendaftar'];
                                                    }
                                                }
                                                ?>
                                                <?= $simulasi ?>
                                            </td>
                                            </td>
                                            <td><?= $real = $sql['pendaftar'] ?></td>
                                            <td>
                                                <?php
                                                if ($real < $simulasi) {
                                                    $persen = $real * 100 / $simulasi;
                                                } else {
                                                    $persen = $simulasi * 100 / $real;
                                                }
                                                ?>
                                                <?= round($persen, 0) ?> %
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->

    <?php } ?>