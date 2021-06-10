<?= $this->extend('layout/template1'); ?>

<?= $this->Section('content'); ?>
<section id="jumbo" class="jumbo">
    <div class="container">
        <div class="jumbotron jumbotron-fluid mt-5">
            <div class="container text-center">
                <h4 id="kalimat" class="text-dark text-center">Chi Kuadrat</h4>
            </div>

            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Rentangan</th>
                        <th>f0</th>
                        <th>Batas Bawah Kelas</th>
                        <th>Batas Atas Kelas</th>
                        <th>Batas Bawah Z</th>
                        <th>Batas Atas Z</th>
                        <th>Z Tabel Bawah</th>
                        <th>Z Tabel Atas</th>
                        <th>L/Proporsi</th>
                        <th>L*N (fe)</th>
                        <th>(f0-fe)^2/fe</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $j = 1;  ?>
                    <?php for ($i = 0; $i < $kelas; $i++) : ?>
                    <tr>
                        <th> <?= $j++ ; ?> </th>
                        <td> <?php echo $range[$i];?></td>
                        <td> <?php echo $frekuensi[$i];?></td>
                        <td> <?php echo $batasBawahBaru[$i];?></td>
                        <td> <?php echo $batasAtasBaru[$i];?></td>
                        <td> <?php echo $zBawah[$i];?></td>
                        <td> <?php echo $zAtas[$i];?></td>
                        <td> <?php echo $zTabelBawahFix[$i];?></td>
                        <td> <?php echo $zTabelAtasFix[$i];?></td>
                        <td> <?php echo $lprop[$i];?></td>
                        <td> <?php echo $fe[$i];?></td>
                        <td> <?php echo $kai[$i];?></td>
                    </tr>

                    <?php endfor ?>
                    <tr>
                        <th> Total: </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><?php echo $totalchi;?></th>
                    </tr>
                </tbody>
            </table>




            <?= $this->endSection(); ?>