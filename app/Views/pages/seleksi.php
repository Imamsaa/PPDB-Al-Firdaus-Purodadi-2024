<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= 
    base_url('public/images/bg_1.png')
    ; ?>');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url('/'); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Seleksi <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Seleksi Pendaftaran</h1>
            </div>
            </div>
        </div>
        </section>
		<div class="container">
        <div class="heading-section mb-5 mt-5 mt-lg-0">
                <h2 class="my-4 text-center">SELEKSI PENDAFTARAN</h2>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Asal Sekolah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
</section>
<?= $this->endSection();; ?>