<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Calon Peserta Didik Ditolak</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/sekolah'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Calon Peserta Didik Ditolak</li>
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
            <h3 class="card-title">DATA CALON PESERTA DIDIK DITOLAK</h3>
          </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-sm table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NO PENDAFTARAN</th>
                    <th>ASAL SEKOLAH</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach($daftar as $d) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $d['nama_siswa']; ?></td>
                    <td><?= $d['no_daftar']; ?></td>
                    <td><?= $d['sekolah']; ?></td>
                    <td><span class="badge 
                    <?php if($d['status'] == 'proses seleksi'){
                      echo 'badge-primary';
                    }else if($d['status'] == 'diterima'){
                      echo 'badge-success';
                    }else if($d['status'] == 'ditolak'){
                      echo 'badge-danger';
                    }; ?>
                    "><?= $d['status']; ?></span></td>
                    <td>
                      <a href="<?= base_url('sekolah/siswa/'.$d['no_daftar']); ?>" class="mx-1 my-1 btn btn-sm btn-primary">EDIT</a>
                      <a href="<?= base_url('/sekolah/cetaksiswa/'.$d['no_daftar']); ?>" target="_blank" class="mx-1 my-1 btn btn-sm btn-warning">CETAK</a>
                      <form action="<?= base_url('sekolah/siswa/bataltolak'); ?>" method="POST" class="d-inline">
                          <input type="hidden" name="no_daftar" value="<?= $d['no_daftar']; ?>">
                          <button type="submit" class="mx-1 my-1 btn btn-sm btn-danger">BATAL TOLAK</button>
                      </form>
                    </td>
                  </tr>
                  <?php $no++; endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NO PENDAFTARAN</th>
                    <th>ASAL SEKOLAH</th>
                    <th>STATUS</th>
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