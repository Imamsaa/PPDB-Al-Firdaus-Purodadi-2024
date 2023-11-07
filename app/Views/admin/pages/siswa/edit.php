<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/sekolah'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Calon Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">EDIT DATA CALON PESERTA DIDIK</h3>
          </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="" method="post">
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						        <h3 class="mb-3 text-center">Data Diri Siswa</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="namasiswa" class="col-sm-2 col-form-label font-weight-bold">Nama</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namasiswa" placeholder="Nama Calon Peserta Didik">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Sekolah Asal</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Sekolah Asal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="inlineFormCustomSelect">Jenis Kelamin</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" id="inlineFormCustomSelect">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</h3>
                        <div class="col-sm-4 row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="asalsekolah" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</h3>
                        <div class="row col-sm-4">
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="asalsekolah">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Alamat</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Prestasi</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Prestasi">
                        </div>
                    </div>

                    <!-- DATA DIRI AYAH -->
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						<h3 class="mb-3 text-center">Data Diri Ayah</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="namasiswa" class="col-sm-2 col-form-label font-weight-bold">NIK</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namasiswa" placeholder="NIK">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="namasiswa" class="col-sm-2 col-form-label font-weight-bold">Nama</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namasiswa" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Pendidikan</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Sekolah Asal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</h3>
                        <div class="col-sm-4 row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="asalsekolah" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</h3>
                        <div class="row col-sm-4">
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="asalsekolah">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Pekerjaan</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Prestasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="inlineFormCustomSelect">Penghasilan</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" id="inlineFormCustomSelect">
                                <option selected>Pilih</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <!-- DATA DIRI IBU -->
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						<h3 class="mb-3 text-center">Data Diri Ibu</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="namasiswa" class="col-sm-2 col-form-label font-weight-bold">NIK</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namasiswa" placeholder="NIK">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="namasiswa" class="col-sm-2 col-form-label font-weight-bold">Nama</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namasiswa" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Pendidikan</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Sekolah Asal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</h3>
                        <div class="col-sm-4 row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="asalsekolah" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</h3>
                        <div class="row col-sm-4">
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="asalsekolah">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Pekerjaan</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Prestasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="inlineFormCustomSelect">Penghasilan</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" id="inlineFormCustomSelect">
                                <option selected>Pilih</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <!-- DATA DIRI WALI -->
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						<h3 class="mb-3 text-center">Data Diri Wali Siswa</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="namasiswa" class="col-sm-2 col-form-label font-weight-bold">NIK</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namasiswa" placeholder="NIK">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="namasiswa" class="col-sm-2 col-form-label font-weight-bold">Nama</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namasiswa" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="namasiswa" class="col-sm-2 col-form-label font-weight-bold">Hubungan Dengan Calon Siswa</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namasiswa" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Pendidikan</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Sekolah Asal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</h3>
                        <div class="col-sm-4 row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="asalsekolah" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</h3>
                        <div class="row col-sm-4">
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="asalsekolah">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Alamat</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Pekerjaan</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Prestasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="inlineFormCustomSelect">Penghasilan</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" id="inlineFormCustomSelect">
                                <option selected>Pilih</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						<h3 class="mb-3 text-center">Wajib Diisi</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="asalsekolah" class="col-sm-2 col-form-label font-weight-bold">Nomor WhastApp</h3>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asalsekolah" placeholder="Prestasi">
                            <small id="emailHelp" class="form-text text-muted">Nomor Whastapp digunakan untuk mengirim notifikasi pembayaran pendaftaran dan hasil seleksi, harap di isi sesuai dengan format yang sudah ditendtukan</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-success btn-lg col-sm-3">SUBMIT</button>
                        </div>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
  <!-- /.content-wrapper -->
  <?= $this->endSection(); ?>