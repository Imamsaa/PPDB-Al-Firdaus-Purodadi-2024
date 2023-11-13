<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengaturan Pesan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/sekolah'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan Pesan</li>
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
                <h3 class="card-title">Pengaturan Pesan</h3>
              </div>
              <form action="<?= base_url('sekolah/pesan/edit'); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                      <label for="selector">Selector Pesan</label>
                      <select id="selector"class="form-control">
                        <option>$$</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="pesandaftar">Format Pesan Konfirmasi Mendaftar</label>
                      <textarea name="pesandaftar" class="form-control" id="pesandaftar" rows="10"><?= (old('pesandaftar'))?old('pesandaftar'):$pesan['pesan_daftar']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="pesanbayar">Format Pesan Konfirmasi Pembayaran</label>
                      <textarea name="pesanbayar" class="form-control" id="pesanbayar" rows="10"><?= (old('pesanbayar'))?old('pesanbayar'):$pesan['pesan_bayar']; ?></textarea>
                    </div>
                <div class="card-footer">
                  <button type="submit" class="btn my-1 btn-primary">Submit</button>
                </div>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>
  <!-- /.content-wrapper -->
  <?= $this->endSection(); ?>