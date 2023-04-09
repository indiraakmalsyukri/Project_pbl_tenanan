<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Data</h2>
            <form action="/kelompok/save" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" class="form-control"<?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> id="nama" name="nama" value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        Isikan kelompok dengan benar.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">nim</label>
                    <input type="text" class="form-control"<?= ($validation->hasError('nim')) ? 'is-invalid' : ''; ?> id="nim" name="nim" value="<?= old('nim'); ?>">
                    <div class="invalid-feedback">
                        Isikan kelompok dengan benar.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">kelas</label>
                    <textarea class="form-control" id="kelas" name="kelas" value="<?= old('kelas'); ?>" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="kelompok" class="form-label">Kelompok</label>
                    <input type="text" class="form-control" id="kelompok" name="kelompok" value="<?= old('kelompok'); ?>">
                    <div class="invalid-feedback">
                        Isikan kelompok dengan benar.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>