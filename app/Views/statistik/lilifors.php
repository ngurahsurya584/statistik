<?= $this->extend('layout/template2'); ?>

<?= $this->Section('content'); ?>

<section id="jumbo" class="jumbo">
    <div class="container">
        <div class="jumbotron jumbotron-fluid mt-5">
            <div class="container text-center">
                <h4 id="kalimat" class="text-dark text-center">Liliefors</h4>
            </div>

            <table class="table text-center">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Yi</th>
                            <th>Frekuensi</th>
                            <th>Fkum</th>
                            <th>Zi</th>
                            <th>F(Zi)</th>
                            <th>S(Zi)</th>
                            <th>|F(Zi)-S(Zi)|</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $j = 1;  ?>
                        <?php for($i = 0; $i < $n1; $i++ ) : ?>
                        <tr>
                            <th> <?= $j++ ; ?> </th>
                            <td> <?php echo $nilai [$i] ;?></td>
                            <td> <?php echo $frekuensi[$i];?></td>
                            <td> <?php echo $fkum1[$i];?></td>
                            <td> <?php echo $Zi[$i];?></td>
                            <td> <?php echo $fZi[$i];?> </td>
                            <td> <?php echo $sZi[$i];?> </td>
                            <td> <?php echo $lilliefors[$i];?></td>
                        </tr>
                        <?php endfor ; ?>


                        <tr class="text-bold">
                            <td>Total:</td>
                            <td> </td>
                            <td><?php echo $n;?> </td>
                            <td><?php echo $n;?> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $totalLillie;?></td>
                        </tr>

                    </tbody>
                </table>


                <?= $this->endSection(); ?>