<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<section class="ftco-section ftco-no-pt ftco-no-pb">

    <section>
        <div class="container">
            <br><br><br>
        <div class="heading-section my-4 mt-5 mt-lg-0">
                <h2 class="my-4 text-center">Upload Bukti Pembayaran</h2>
                <p class="text-center">Atas nama <b><?= $siswa['nama_siswa']; ?></b></p>
                <form action="<?= base_url('/bukti'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <div class="form-group">
                        <label for="bukti">Upload bukti pembayaran</label>
                        <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                        <input type="hidden" name="nomorwa" value="<?= $siswa['nomor_wa']; ?>">
                        <input type="file" name="bukti" class="form-control" id="bukti" required>
                    </div>
                  </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-success btn-lg col-sm-3">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
            <br><br><br>
        </div>
    </section>
<?= $this->endSection();; ?>