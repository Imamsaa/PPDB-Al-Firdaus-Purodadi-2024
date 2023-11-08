<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Bukti Pembayaran</h1>
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
            <h3 class="card-title">DAFTAR BUKTI PEMBAYARAN</h3>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-sm table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ASAL SEKOLAH</th>
                    <th>WHASTAPP</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; foreach($daftar as $d) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $d['nama_siswa']; ?></td>
                    <td><?= $d['sekolah']; ?></td>
                    <td><?= $d['nomor_wa']; ?></td>
                    <td>
                      <form action="<?= base_url('sekolah/pembayaran/acc'); ?>" method="post" class="d-inline">
                        <input type="hidden" name="id" value="<?= $d['id']; ?>">
                        <button type="submit" class="mx-1 my-1 btn btn-sm btn-success">KONFIRMASI</button>
                      </form>
                      <a href="<?= base_url('public/admin/img/bukti/'.$d['bukti']); ?>" target="_blank" class="mx-1 my-1 btn btn-sm btn-primary">LIHAT</a>
                      <form action="<?= base_url('sekolah/pembayaran/delete/'.$d['id']); ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="mx-1 my-1 btn btn-sm btn-danger">HAPUS</button>
                      </form>
                    </td>
                  </tr>
                  <?php $no++; endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ASAL SEKOLAH</th>
                    <th>WHASTAPP</th>
                    <th>ACTION</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DAFTAR TERVERIFIKASI</h3>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-sm table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NO PENDAFTARAN</th>
                    <th>ASAL SEKOLAH</th>
                    <th>WHASTAPP</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; foreach($terbayar as $t) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $t['nama_siswa']; ?></td>
                    <td><?= $t['no_daftar']; ?></td>
                    <td><?= $t['sekolah']; ?></td>
                    <td><?= $t['nomor_wa']; ?></td>
                    <td>
                      <a href="<?= base_url('public/admin/img/bukti/'.$t['bukti']); ?>" target="_blank" class="mx-1 my-1 btn btn-sm btn-primary">LIHAT</a>
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
                    <th>WHASTAPP</th>
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