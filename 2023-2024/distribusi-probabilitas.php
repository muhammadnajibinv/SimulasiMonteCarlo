<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2 pt-5">
                    <h3 class="title-5 m-b-35">Tabel Distribusi Probabilitas</h3>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2 text-center">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th>Bulan</th>
                                    <th>Frekuensi</th>
                                    <th>Probabilitas</th>
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
                                        <td><?= $sql['pendaftar'] ?></td>
                                        <td><?= $prob = round($sql['pendaftar'] / $total['total'], 2) ?></td>
                                    </tr>
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
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->