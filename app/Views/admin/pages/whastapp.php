<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengaturan Whastapp</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/sekolah'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan WhastApp</li>
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
                <h3 class="card-title">Pengaturan Whastapp</h3>
              </div>
              <form action="<?= base_url('sekolah/whastapp/edit'); ?>" method="POST">
                <div class="card-body">
                    <div class="form-group">
                      <label for="endpoint">Endpoint Whastapp</label>
                      <input type="text" name="endpoint" value="<?= (old('endpoint'))?old('endpoint'):$pesan['endpoint']; ?>" class="form-control" id="nikwali" placeholder="NIK Wali">
                    </div>
                    <div class="form-group">
                      <label for="apikey">API Key</label>
                      <input type="text" name="apikey" value="<?= (old('apikey'))?old('apikey'):$pesan['apikey']; ?>" class="form-control" id="nikwali" placeholder="NIK Wali">
                    </div>
                    <div class="form-group">
                      <label for="pengirim">Nomor Pengirim</label>
                      <input type="text" name="pengirim" value="<?= (old('pengirim'))?old('pengirim'):$pesan['pengirim']; ?>" class="form-control" id="nikwali" placeholder="NIK Wali">
                    </div>
                <div class="card-footer">
                  <button type="submit" class="btn my-1 mx-1 btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>
  <!-- /.content-wrapper -->
  <?= $this->endSection(); ?>