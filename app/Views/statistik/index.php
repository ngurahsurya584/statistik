<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<section id="jumbo" class="jumbo">
    <div class="container">
        <div class="jumbotron jumbotron-fluid mt-5 position-relative ">
            <div class="container">
                <h4 id="kalimat" class="text-dark text-center">Statistik Deskriptif</h4>
            </div>
            <div>
                <div class="container text-center mt-5">
                    <form action="\OpenController\save" method="POST" id="formstatistik">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="masukkansuku1" class="text-dark">Masukkan Nilai</label>
                            <input type="number" name="nilai" id="nilai" value="" placeholder="Bilangan">
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <div class="text-light">
                        </div>
                    </form>
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

                    <?php if (session()->getFlashData('pesan4')) : ?>
                    <div class="alert alert-success mt-3" role="alert">
                        <?= session()->getFlashData('pesan4'); ?>
                    </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashData('pesan5')) : ?>
                    <div class="alert alert-success mt-3" role="alert">
                        <?= session()->getFlashData('pesan4'); ?>
                    </div>
                    <?php endif; ?>

                </div>
            </div>


            <div class="container">
                <h4 id="kalimat" class="text-light bg-primary text-center mt-5">Tabel Statistik
                </h4>
            </div>

            <table class="table table-light text-center mt-5">
                <thead>
                    <tr>
                        <th scope="col">Nilai</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
        </div>
        <tbody>
            <?php foreach ($mahasiswa as $k) : ?>
            <tr>
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

                            </td>
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
        </div>
</section>
<?= $this->endSection(); ?>