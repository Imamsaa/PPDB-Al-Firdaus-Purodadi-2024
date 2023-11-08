<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<section class="ftco-section ftco-no-pt ftco-no-pb">

    <section>
        <div class="container">
        <div class="heading-section mb-4 mt-5 mt-lg-0">
                <h2 class="my-4 text-center">Pendaftaran Berhasil</h2>
                <div class="mb-4 text-center">
                    <img class="img" style="width:500px" src="<?= base_url('public/admin/img/success.gif'); ?>" alt="Berhasil Melakukan pendaftaran">
                    <h5>Pendaftaran Success</h5>
                    <p>Langkah berikutnya silahkan cek pesan yang kami kirim melalui <b>Whastapp</b> ataupun <b>Email</b> untuk melakukan pembayaran biaya pendaftaran</p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <a href="<?= base_url('/'); ?>" class="btn btn-success btn-lg col-sm-3">Kembali</a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection();; ?>