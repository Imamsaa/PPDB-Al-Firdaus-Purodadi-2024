<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pembayaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/sekolah'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Pembayaran</li>
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
            <h3 class="card-title">DATA CALON PESERTA DIDIK</h3>
          </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-sm table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ASAL SEKOLAH</th>
                    <th>NO PENDAFTARAN</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Imam safi'i
                    </td>
                    <td>SMPIT Al Firdaus Purwodadi</td>
                    <td>2121R1543</td>
                    <td>
                      <button class="mx-1 my-1 btn btn-sm btn-success">EDIT</button>
                      <a href="" target="_blank" class="mx-1 my-1 btn btn-sm btn-primary">LIHAT</a>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ASAL SEKOLAH</th>
                    <th>NO PENDAFTARAN</th>
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