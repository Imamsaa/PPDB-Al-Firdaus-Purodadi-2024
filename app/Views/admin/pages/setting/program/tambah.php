<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Program Unggulan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/sekolah'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Program Unggulan</li>
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
                <h3 class="card-title">Program Unggulan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>

                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Google Icon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan Program</label>
                    <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                    <textarea name="keterangan" id="keterangan" class="textarea form-control" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

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