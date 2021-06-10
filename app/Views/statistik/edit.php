<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="jumbotron jumbotron-fluid mt-5 mb-5 ">
    <div class="container mb-5">
        <h4 id="kalimat" class="text-light bg-primary text-center">Statistik Deskriptif</h4>
    </div>
    <div class="container text-center mb-5">
        <form action="/OpenController/update/<?= $mahasiswa['id']; ?>" method="POST" id="formeditstatistik">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
            <div class="form-group">
                <label for="masukkannilai" class="text-dark">Edit Nilai</label>
                <input type="number" name="nilai" placeholder="Edit Bilangan" value="<?= $mahasiswa['nilai']; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
            <div class="text-light">
            </div>
        </form>

    </div>
</div>
<?= $this->endSection(); ?>