<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2 pt-5">
                    <h3 class="title-5 m-b-35">Tabel Distribusi Frekuensi</h3>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2 text-center">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th>Bulan</th>
                                    <th>Frekuensi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sqls = mysqli_query($con, "SELECT * FROM pendaftar2023_2024 a INNER JOIN bulan b ON a.kd_bulan = b.kd_bulan") or die(mysqli_error($con));
                                foreach ($sqls as $sql) { ?>
                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">
                                        <td><?= $no ?></td>
                                        <td><?= $sql['nama_bulan'] ?></td>
                                        <td><?= $sql['pendaftar'] ?></td>
                                        <td><a href="edit.php?kd_bulan=<?= $sql['kd_bulan'] ?>" title='Edit Data' data-toggle='tooltip'></span>Edit</a></td>
                                    </tr>
                                    <?php $no++ ?>
                                    <?php @$jumlah += $sql['pendaftar'] ?>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">Jumlah</td>
                                    <td><?= number_format($jumlah) ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->