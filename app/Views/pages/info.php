<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= 
    base_url('public/images/bg_1.png')
    ; ?>');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url('/'); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Info/Pengumuman<i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Info/Pengumuman</h1>
                </div>
            </div>
        </div>
    </section>
    </section>
    <section>
        <div class="container">
        <div class="heading-section mb-2 mt-5 mt-lg-0">
                <h2 class="my-4">Pengumuman</h2>
                <div class="mb-4">
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et tempora aliquam animi atque accusamus nam, amet magnam magni fugit exercitationem ipsum fugiat, corrupti accusantium necessitatibus alias perferendis, quidem dignissimos enim nobis? Vel, autem repellendus!</p>
                </div>
            </div>
        </div>
    </section>
    <?= $this->include('sections/info'); ?>
    <div class="heading-section mb-2 mt-5 mt-lg-0">
                <h2 class="my-4 text-center">Brosur Penerimaan Peserta Didik Baru</h2>
            </div>
    <center>
        <embed class="my-4" type="application/pdf" src="<?= base_url('public/pdf/brosur.pdf'); ?>" width="720" height="720"></embed>
    </center>
<?= $this->endSection();; ?>