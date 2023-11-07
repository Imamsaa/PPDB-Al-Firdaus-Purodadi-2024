<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pesan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/sekolah'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan Sekolah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pengaturan Sekolah</h3>
              </div>
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                      <label for="selector">Selector Pesan</label>
                      <select id="selector" name="selector" class="form-control">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="message">Pesan Konfirmasi Mendaftar</label>
                      <textarea name="message" class="form-control" id="message" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="message">Pesan Konfirmasi Pembayaran</label>
                      <textarea name="message" class="form-control" id="message" rows="10"></textarea>
                    </div>
                  <div class="form-group">
                      <div class="card border-success my-3" style="">
                        <div class="card-body">
                          <p class="card-text">
                            <b>ELEMENT DINAMIS</b><br>
                            Anda dapat menggunakan <span class="text-danger">TAB</span> dan Elemen dinamis pada pesan,<br>
                            Elemen dinamis adalah elemen yang akan diganti dengan data siswa ketika pesan dikirim.</p>
                            <table class="table table-sm table-bordered">
                                <tr>
                                  <td>ELEMENT DINAMIS</td>
                                  <td>DATA DARI DATABASE</td>
                                </tr>
                                <tr>
                                  <td><span class="text-danger font-weight-bold">nis</span></td>
                                  <td>NIS Siswa</td>
                                </tr>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn my-1 mx-1 btn-primary">Submit</button>
                  <button type="submit" class="btn my-1 mx-1 btn-danger">Cancel</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>
  <!-- /.content-wrapper -->
  <?= $this->endSection(); ?>