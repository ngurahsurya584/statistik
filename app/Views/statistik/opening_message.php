<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<section id="jumbo" class="jumbo">
    <div class="container">
        <div class="jumbotron jumbotron-fluid mt-5">
            <div class="container text-center">
                <h4 id="kalimat" class="text-dark text-center">Manajemen Skor dan Data Bergolong</h4>
            </div>

            <div class="container text-center mt-5">
                <form action="\OpenController\save" method="POST" id="formstatistik">
                    <?= csrf_field(); ?>
                    <div class="form-group text-center">
                        <label for="masukkansuku2" class="text-dark">Masukkan Nilai</label>
                        <input type="number" name="nilai" id="" value="" placeholder="Bilangan">
                    </div>

                    <button type="submit" class="btn btn-primary content-center" name="submit">Submit</button>

                </form>
            </div>
            <br>
            <br>
            <br>
            <div class="container ">
                <?php echo  form_open_multipart('OpenController/uploaddata') ?>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group text-center ">
                            <label>Import Excel</label>
                            <br>
                            <input type="file" required accept=".xls, .xlsx " class="form-control-file-center ml-3"
                                name="importexcel" id="importexcel">
                            <br>
                            <button type="submit" class="btn bg-gradient-warning text-white" value="Upload File">Import
                                <i class="fa fa-file-excel"></i></button>
                        </div>
                    </div>
                </div>
                <?php echo form_close() ?>
                <br>
                <br>
            </div>

            <div class="container text-center">

                <label>Export Excel</label>
                <br>
                <a href="/test" class="btn bg-gradient-danger text-white"> Export .xlsx <i class="fa fa-file-excel"></i>
                </a>
                <br>
                <a href="/test1" class="btn bg-gradient-danger text-white"> Export .xls <i class="fa fa-file-excel"></i>
                </a>

                <?php if (session()->getFlashData('pesan6')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= session()->getFlashData('pesan6'); ?>
                </div>
                <?php endif; ?>

                <?php if (session()->getFlashData('pesan1')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= session()->getFlashData('pesan1'); ?>
                </div>
                <?php endif; ?>

                <?php if (session()->getFlashData('pesan2')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= session()->getFlashData('pesan2'); ?>
                </div>
                <?php endif; ?>

                <?php if (session()->getFlashData('pesan3')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= session()->getFlashData('pesan3'); ?>
                </div>
                <?php endif; ?>

                <?php if (session()->getFlashData('pesan4')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= session()->getFlashData('pesan4'); ?>
                </div>
                <?php endif; ?>
            </div>



            <div class="container">
                <h4 id="kalimat" class="text-light bg-primary text-center mt-5">Tabel Statistik
                </h4>
            </div>

            <table class="table table-light text-center mt-5">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1;  ?>
                    <?php foreach ($mahasiswa as $k) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $k['nilai']; ?></td>
                        <td>
                            <form action="/OpenController/<?= $k['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('apakah anda yakin?');">Delete </button>
                            </form>
                            <a href="/edit/<?= $k['id']; ?>" class="btn btn-success" name="edit">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="container">
                <h4 id="kalimat" class="text-light bg-primary text-center mt-5">Data Statistik</h4>
                <div class="row">
                    <div class="inputan col-md-6">
                        <table class="table table-light text-center ">
                            <thead>
                                <tr>
                                    <th scope="col">Nilai maximum</th>
                                    <th scope="col">Nilai minimum</th>
                                    <th scope="col">Rata - rata</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php foreach ($nMax->getResult() as $row) {
                                            echo $row->nilai;
                                        } ?>

                                    </td>
                                    <td>
                                        <?php foreach ($nMin->getResult() as $row) {
                                            echo $row->nilai;
                                        } ?>
                                    </td>
                                    <td>
                                        <?php foreach ($nAvg->getResult() as $row) {
                                            echo $row->nilai;
                                        } ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="inputan col-md-6 ">
                        <table class="table table-light text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Frekuensi</th>
                                <tr>
                            </thead>
                            <tbody>
                                <?php foreach ($nf->getResult() as $r) : ?>
                                <tr>
                                    <td>
                                        <?php echo $r->nilai ?>
                                    </td>
                                    <td>
                                        <?php echo $r->count ?>
                                    </td>
                                    <?php endforeach ?>
                                </tr>
                            </tbody>
                        </table>


                        <table class="table table-light text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Total Nilai</th>
                                    <th scope="col">Total Frekuensi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td><?php foreach ($nSum->getResult() as $row) {
                                        echo $row->nilai;
                                    } ?></td>
                                    </td>
                                    <td><?php foreach ($nTotal->getResult() as $row) {
                                        echo $row->nilai;
                                    } ?></td>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <table class="table table-light text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Rentangan</th>
                            <th>Frekuensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $j = 1;  ?>
                        <?php for ($i=0; $i < $kelas ; $i++) : ?>
                        <tr>
                            <td> <?= $j++ ; ?> </td>


                            <td>
                                <?php echo $range[$i];?>
                            </td>

                            <td>
                                <?php echo $frekuensi[$i];?>
                            </td>


                        </tr>
                        <?php endfor ?>
                    </tbody>
                </table>
            </div>
</section>
<?= $this->endSection(); ?>