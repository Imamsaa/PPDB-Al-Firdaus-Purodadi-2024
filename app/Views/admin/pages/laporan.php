<?= $this->extend('admin/index'); ?>
<?= $this->section('pages'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/sekolah'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Laporan</li>
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
            <h3 class="card-title">LAPORAN</h3>
          </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-sm table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NOMOR PENDAFTARAN</th>
                    <th>SEKOLAH</th>
                    <th>JENIS KELAMIN</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ALAMAT</th>
                    <th>KECAMATAN</th>
                    <th>KABUPATEN</th>
                    <th>PROVINSI</th>
                    <th>AGAMA</th>
                    <th>RIWAYAT PENYAKIT</th>
                    <th>BERKEBUTUHAN KHUSUS</th>
                    <th>ANAK KE</th>
                    <th>PRESTASI</th>
                    <th>WHASTAPP</th>
                    <th>EMAIL</th>
                    <th>NIK AYAH</th>
                    <th>NAMA AYAH</th>
                    <th>PENDIDIKAN AYAH</th>
                    <th>TEMPAT LAHIR AYAH</th>
                    <th>TANGGAL LAHIR AYAH</th>
                    <th>ALAMAT</th>
                    <th>PEKERJAAN</th>
                    <th>PENGHASILAN</th>
                    <th>NIK IBU</th>
                    <th>NAMA IBU</th>
                    <th>PENDIDIKAN IBU</th>
                    <th>TEMPAT LAHIR IBU</th>
                    <th>TANGGAL LAHIR IBU</th>
                    <th>ALAMAT</th>
                    <th>PEKERJAAN</th>
                    <th>PENGHASILAN</th>
                    <th>NIK WALI</th>
                    <th>NAMA WALI</th>
                    <th>PENDIDIKAN WALI</th>
                    <th>TEMPAT LAHIR WALI</th>
                    <th>TANGGAL LAHIR WALI</th>
                    <th>ALAMAT</th>
                    <th>PEKERJAAN</th>
                    <th>PENGHASILAN</th>
                    <th>HUBUNGAN DENGAN CALON PESERTA DIDIK</th>
                    <th>STATUS PENDAFTARAN</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach($siswa as $s) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $s['nama_siswa']; ?></td>
                    <td><?= $s['no_daftar']; ?></td>
                    <td><?= $s['sekolah']; ?></td>
                    <td><?= $s['kelamin']; ?></td>
                    <td><?= $s['tempat_lahir']; ?></td>
                    <td><?= $s['tanggal_lahir']; ?></td>
                    <td><?= $s['alamat']; ?></td>
                    <td><?= $s['kecamatan']; ?></td>
                    <td><?= $s['kabupaten']; ?></td>
                    <td><?= $s['provinsi']; ?></td>
                    <td><?= $s['agama']; ?></td>
                    <td><?= $s['penyakit']; ?></td>
                    <td><?= $s['berkebutuhan']; ?></td>
                    <td><?= $s['anak_ke']; ?></td>
                    <td><?= $s['prestasi']; ?></td>
                    <td><?= $s['nomor_wa']; ?></td>
                    <td><?= $s['email']; ?></td>
                    <td><?= $s['nik_ayah']; ?></td>
                    <td><?= $s['nama_ayah']; ?></td>
                    <td><?= $s['pendidikan_ayah']; ?></td>
                    <td><?= $s['tempat_lahir_ayah']; ?></td>
                    <td><?= $s['tanggal_lahir_ayah']; ?></td>
                    <td><?= $s['alamat_ayah']; ?></td>
                    <td><?= $s['pekerjaan_ayah']; ?></td>
                    <td><?= $s['penghasilan_ayah']; ?></td>
                    <td><?= $s['nik_ibu']; ?></td>
                    <td><?= $s['nama_ibu']; ?></td>
                    <td><?= $s['pendidikan_ibu']; ?></td>
                    <td><?= $s['tempat_lahir_ibu']; ?></td>
                    <td><?= $s['tanggal_lahir_ibu']; ?></td>
                    <td><?= $s['alamat_ibu']; ?></td>
                    <td><?= $s['pekerjaan_ibu']; ?></td>
                    <td><?= $s['penghasilan_ibu']; ?></td>
                    <td><?= $s['nik_wali']; ?></td>
                    <td><?= $s['nama_wali']; ?></td>
                    <td><?= $s['pendidikan_wali']; ?></td>
                    <td><?= $s['tempat_lahir_wali']; ?></td>
                    <td><?= $s['tanggal_lahir_wali']; ?></td>
                    <td><?= $s['alamat_wali']; ?></td>
                    <td><?= $s['pekerjaan_wali']; ?></td>
                    <td><?= $s['penghasilan_wali']; ?></td>
                    <td><?= $s['hubungan']; ?></td>
                    <td><?= $s['status']; ?></td>
                  </tr>
                  <?php $no++; endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>NO</th>
                    <th>NAMA</th>
                    <th>NOMOR PENDAFTARAN</th>
                    <th>SEKOLAH</th>
                    <th>JENIS KELAMIN</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ALAMAT</th>
                    <th>KECAMATAN</th>
                    <th>KABUPATEN</th>
                    <th>PROVINSI</th>
                    <th>AGAMA</th>
                    <th>RIWAYAT PENYAKIT</th>
                    <th>BERKEBUTUHAN KHUSUS</th>
                    <th>ANAK KE</th>
                    <th>PRESTASI</th>
                    <th>WHASTAPP</th>
                    <th>EMAIL</th>
                    <th>NIK AYAH</th>
                    <th>NAMA AYAH</th>
                    <th>PENDIDIKAN AYAH</th>
                    <th>TEMPAT LAHIR AYAH</th>
                    <th>TANGGAL LAHIR AYAH</th>
                    <th>ALAMAT</th>
                    <th>PEKERJAAN</th>
                    <th>PENGHASILAN</th>
                    <th>NIK IBU</th>
                    <th>NAMA IBU</th>
                    <th>PENDIDIKAN IBU</th>
                    <th>TEMPAT LAHIR IBU</th>
                    <th>TANGGAL LAHIR IBU</th>
                    <th>ALAMAT</th>
                    <th>PEKERJAAN</th>
                    <th>PENGHASILAN</th>
                    <th>NIK WALI</th>
                    <th>NAMA WALI</th>
                    <th>PENDIDIKAN WALI</th>
                    <th>TEMPAT LAHIR WALI</th>
                    <th>TANGGAL LAHIR WALI</th>
                    <th>ALAMAT</th>
                    <th>PEKERJAAN</th>
                    <th>PENGHASILAN</th>
                    <th>HUBUNGAN DENGAN CALON PESERTA DIDIK</th>
                    <th>STATUS PENDAFTARAN</th>
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