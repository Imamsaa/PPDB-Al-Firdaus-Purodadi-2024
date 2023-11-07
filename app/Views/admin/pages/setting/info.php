<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Informasi PPDB</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/sekolah'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Informasi PPDB</li>
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
            <h3 class="card-title">DATA INFORMASI PPDB</h3>
          </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="<?= base_url('/sekolah/info/tambah'); ?>" class="btn btn-success"><i class="fas fa-plus"></i> TAMBAH INFORMASI PPDB</a>
                <table id="example2" class="table table-sm table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>DETAIL</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Imam safi'i
                    </td>
                    <td>SMPIT Al Firdaus Purwodadi</td>
                    <td>
                      <button class="mx-1 my-1 btn btn-sm btn-primary">EDIT</button>
                      <a class="mx-1 my-1 btn btn-sm btn-danger">HAPUS</a>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>DETAIL</th>
                    <th>ACTION</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
  <!-- /.content-wrapper -->
  <?= $this->endSection(); ?>