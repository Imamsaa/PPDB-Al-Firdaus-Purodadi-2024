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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT DATA CALON SISWA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('sekolah/siswa/edit'); ?>" method="POST">
                <input type="hidden" name="no_daftar" value="<?= $siswa['no_daftar']; ?>">
                <div class="card-body">
                    <h2 class="text-center">DATA SISWA</h2>
                <div class="form-group">
                    <label for="namasiswa">Nama</label>
                    <input type="text" value="<?= (old('namasiswa'))?old('namasiswa'):$siswa['nama_siswa']; ?>" name="namasiswa" class="form-control" id="namasiswa" placeholder="Nama Calon Siswa" required>
                  </div>
                  <div class="form-group">
                    <label for="sekolah">Asal Sekolah</label>
                    <input type="text" value="<?= (old('sekolah'))?old('sekolah'):$siswa['sekolah']; ?>" name="sekolah" class="form-control" id="sekolah" placeholder="Asal Sekolah" required>
                  </div>
                  <div class="form-group">
                        <h3 class="col-form-label font-weight-bold" for="kelamin">Jenis Kelamin</h3>
                        <div>
                            <select name="kelamin" class="custom-select form-control" id="kelamin" required>
                                <option></option>
                                <option value="laki-laki" <?= (old('kelamin') == 'laki-laki' OR $siswa['kelamin'] == 'laki-laki')?'selected':''; ?>>Laki-laki</option>
                                <option value="perempuan" <?= (old('kelamin') == 'perempuan' OR $siswa['kelamin'] == 'perempuan')?'selected':''; ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                <div class="form-group">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" value="<?= (old('tempatlahir'))?old('tempatlahir'):$siswa['tempat_lahir']; ?>" name="tempatlahir" class="form-control" id="tempatlahir" placeholder="Tempat Lahir" required>
                  </div>
                  <div class="form-group">
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" value="<?= (old('tanggallahir'))?old('tanggallahir'):$siswa['tanggal_lahir']; ?>" class="form-control" id="tanggallahir" placeholder="Tanggal Lahir" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" value="<?= (old('alamat'))?old('alamat'):$siswa['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" value="<?= (old('kecamatan'))?old('kecamatan'):$siswa['kecamatan']; ?>" name="kecamatan" class="form-control" id="kecamatan" placeholder="Kecamatan" required>
                  </div>
                  <div class="form-group">
                    <label for="kabupaten">Kabupaten</label>
                    <input type="text" value="<?= (old('kabupaten'))?old('kabupaten'):$siswa['kabupaten']; ?>" name="kabupaten" class="form-control" id="kabupaten" placeholder="Kabupaten" required>
                  </div>
                  <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" value="<?= (old('provinsi'))?old('provinsi'):$siswa['provinsi']; ?>" name="provinsi" class="form-control" id="provinsi" placeholder="Provinsi" required>
                  </div>
                  <div class="form-group">
                        <h3 class="col-form-label font-weight-bold" for="agama">Agama</h3>
                        <div>
                            <select name="agama" class="custom-select form-control" id="agama" required>
                                <option value="Islam">Islam</option>
                            </select>
                        </div>
                    </div>
                <div class="form-group">
                    <label for="penyakit">Riwayat Penyakit</label>
                    <input type="text" value="<?= (old('penyakit'))?old('penyakit'):$siswa['penyakit']; ?>" name="penyakit" class="form-control" id="penyakit" placeholder="Riwayat Penyakit">
                </div>
                <div class="form-group">
                    <label for="berkebutuhan">Berkebutuhan Khusus</label>
                    <input type="text" value="<?= (old('berkebutuhan'))?old('berkebutuhan'):$siswa['berkebutuhan']; ?>" name="berkebutuhan" class="form-control" id="berkebutuhan" placeholder="Berkebutuhan Khusus">
                </div>
                <div class="form-group">
                    <label for="anakke">Anak Ke</label>
                    <input type="number" name="anakke" value="<?= (old('anakke'))?old('anakke'):$siswa['anak_ke']; ?>" class="form-control" id="anakke" placeholder="Anak ke" required>
                </div>
                <div class="form-group">
                    <label for="prestasi">Prestasi</label>
                    <input type="text" name="prestasi" value="<?= (old('prestasi'))?old('pestasi'):$siswa['prestasi']; ?>" class="form-control" id="prestasi" placeholder="Prestasi">
                </div>
                    <h2 class="text-center">DATA AYAH</h2>
                <div class="form-group">
                    <label for="nikayah">Nomor NIK</label>
                    <input type="text" name="nikayah" value="<?= (old('nikayah'))?old('nikayah'):$siswa['nik_ayah']; ?>" class="form-control" id="nikayah" placeholder="NIK Ayah" required>
                  </div>
                <div class="form-group">
                    <label for="namaayah">Nama Lengkap</label>
                    <input type="text" name="namaayah" value="<?= (old('namaayah'))?old('namaayah'):$siswa['nama_ayah']; ?>" class="form-control" id="namaayah" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                    <h3 class="col-form-label font-weight-bold" for="pendidikanayah">Pendidikan</h3>
                    <div>
                      <select name="pendidikanayah" class="custom-select form-control" id="pendidikanayah" required>
                          <option></option>
                          <?php foreach($pendidikan as $p) : ?>
                            <option value="<?= $p['nama_pendidikan']; ?>" <?= (old('pendidikanayah') == $p['nama_pendidikan'] OR $siswa['pendidikan_ayah'] == $p['nama_pendidikan'])?'selected':''; ?>><?= $p['nama_pendidikan']; ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tempatlahirayah">Tempat Lahir</label>
                    <input type="text" name="tempatlahirayah" value="<?= (old('tempatlahirayah'))?old('tempatlahirayah'):$siswa['tempat_lahir_ayah']; ?>" class="form-control" id="tempatlahirayah" placeholder="Tempat Lahir" required>
                  </div>
                  <div class="form-group">
                    <label for="tanggalahirayah">Tanggal Lahir</label>
                    <input type="date" name="tanggallahirayah" value="<?= (old('tanggallahirayah'))?old('tanggallahirayah'):$siswa['tanggal_lahir_ayah']; ?>" class="form-control" id="tanggalahirayah" placeholder="Tanggal Lahir" required>
                  </div>
                  <div class="form-group">
                    <label for="alamatayahh">Alamat</label>
                    <input type="text" name="alamatayah" value="<?= (old('alamatayah'))?old('alamatayah'):$siswa['alamat_ayah']; ?>" class="form-control" id="alamatayahh" placeholder="Alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="pekerjaanayah">Pekerjaan</label>
                    <input type="text" name="pekerjaanayah" value="<?= (old('pekerjaanayah'))?old('pekerjaanayah'):$siswa['pekerjaan_ayah']; ?>" class="form-control" id="pekerjaanayah" placeholder="Pekerjaan" required>
                  </div>
                  <div class="form-group">
                    <h3 class="col-form-label font-weight-bold" for="penghasilanayah">Penghasilan</h3>
                    <div>
                        <select name="penghasilanayah" class="custom-select form-control" id="penghasilanayah" required>
                            <option></option>
                              <?php foreach($penghasilan as $pe) : ?>
                                <option value="<?= $pe['nama_penghasilan']; ?>" <?= (old('penghasilanayah') == $pe['nama_penghasilan'] OR $siswa['penghasilan_ayah'] == $pe['nama_penghasilan'])?'selected':''; ?>><?= $pe['nama_penghasilan']; ?></option>
                              <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <h2 class="text-center">DATA IBU</h2>
                <div class="form-group">
                    <label for="nikibu">Nomor NIK</label>
                    <input type="text" name="nikibu" value="<?= (old('nikibu'))?old('nikibu'):$siswa['nik_ibu']; ?>" class="form-control" id="nikibu" placeholder="NIK Ibu" required>
                  </div>
                <div class="form-group">
                    <label for="namaibu">Nama Lengkap</label>
                    <input type="text" name="namaibu" value="<?= (old('namaibu'))?old('ibu'):$siswa['nama_ibu']; ?>" class="form-control" id="namaibu" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                        <h3 class="col-form-label font-weight-bold" for="pendidikanibu">Pendidikan</h3>
                        <div>
                            <select name="pendidikanibu" class="custom-select form-control" id="pendidikanibu" required>
                              <option></option>
                              <?php foreach($pendidikan as $p) : ?>
                                <option value="<?= $p['nama_pendidikan']; ?>" <?= (old('pendidikanibu') == $p['nama_pendidikan'] OR $siswa['pendidikan_ibu'] == $p['nama_pendidikan'])?'selected':''; ?>><?= $p['nama_pendidikan']; ?></option>
                              <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                <div class="form-group">
                    <label for="tempatlahiribu">Tempat Lahir</label>
                    <input type="text" name="tempatlahiribu" value="<?= (old('tempatlahiribu'))?old('tempatlahiribu'):$siswa['tempat_lahir_ibu']; ?>" class="form-control" id="tempatlahiribu" placeholder="Tempat Lahir" required>
                  </div>
                  <div class="form-group">
                    <label for="tanggallahiribu">Tanggal Lahir</label>
                    <input type="date" name="tanggallahiribu" value="<?= (old('tanggallahiribu'))?old('tanggallahiribu'):$siswa['tanggal_lahir_ibu']; ?>" class="form-control" id="tanggallahiribu" placeholder="Tanggal Lahir" required>
                  </div>
                  <div class="form-group">
                    <label for="alamatibu">Alamat</label>
                    <input type="text" name="alamatibu" value="<?= (old('alamatibu'))?old('alamatibu'):$siswa['alamat_ibu']; ?>" class="form-control" id="alamatibu" placeholder="Alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="pekerjaanibu">Pekerjaan</label>
                    <input type="text" name="pekerjaanibu" value="<?= (old('pekerjaanibu'))?old('pekerjaanibu'):$siswa['pekerjaan_ibu']; ?>" class="form-control" id="pekerjaanibu" placeholder="Pekerjaan" required>
                  </div>
                  <div class="form-group">
                    <h3 class="col-form-label font-weight-bold" for="penghasilanibu">Penghasilan</h3>
                    <div>
                        <select  name="penghasilanibu" class="custom-select form-control" id="penghasilanibu" required>
                            <option></option>
                            <?php foreach($penghasilan as $pe) : ?>
                              <option value="<?= $pe['nama_penghasilan']; ?>" <?= (old('penghasilanibu') == $pe['nama_penghasilan'] OR $siswa['penghasilan_ibu'] == $pe['nama_penghasilan'])?'selected':''; ?>><?= $pe['nama_penghasilan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <h2 class="text-center">DATA WALI</h2>
                <div class="form-group">
                    <label for="nikwali">Nomor NIK</label>
                    <input type="text" name="nikwali" value="<?= (old('nikwali'))?old('nikwali'):$siswa['nik_wali']; ?>" class="form-control" id="nikwali" placeholder="NIK Wali">
                  </div>
                <div class="form-group">
                    <label for="namawali">Nama Lengkap</label>
                    <input type="text" name="namawali" value="<?= (old('namawali'))?old('namawali'):$siswa['nama_wali']; ?>" class="form-control" id="namawali" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                        <h3 class="col-form-label font-weight-bold" for="pendidikanwali">Pendidikan</h3>
                        <div>
                            <select name="pendidikanwali" class="custom-select form-control" id="pendidikanwali">
                              <option></option>
                              <?php foreach($pendidikan as $p) : ?>
                                <option value="<?= $p['nama_pendidikan']; ?>" <?= (old('pendidikanwali') == $p['nama_pendidikan'] OR $siswa['pendidikan_wali'] == $p['nama_pendidikan'])?'selected':''; ?>><?= $p['nama_pendidikan']; ?></option>
                              <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                <div class="form-group">
                    <label for="tempatlahirwali">Tempat Lahir</label>
                    <input type="text" name="tempatlahirwali" value="<?= (old('tempatlahirwali'))?old('tempatlahirwali'):$siswa['tempat_lahir_wali']; ?>" class="form-control" id="tempatlahirwali" placeholder="Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="tanggallahirwali">Tanggal Lahir</label>
                    <input type="date" name="tanggallahirwali" value="<?= (old('tanggallahiewali'))?old('tanggallahirwali'):$siswa['tanggal_lahir_wali']; ?>" class="form-control" id="tanggallahirwali" placeholder="Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="alamatwali">Alamat</label>
                    <input type="text" name="alamatwali" value="<?= (old('alamatwali'))?old('alamatwali'):$siswa['alamat_wali']; ?>" class="form-control" id="alamatwali" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <label for="pekerjaanwali">Pekerjaan</label>
                    <input type="text" name="pekerjaanwali" value="<?= (old('pekerjaanwali'))?old('pekerjaanwali'):$siswa['pekerjaan_wali']; ?>" class="form-control" id="pekerjaanwali" placeholder="Pekerjaan">
                  </div>
                  <div class="form-group">
                    <h3 class="col-form-label font-weight-bold" for="penghasilanwali">Penghasilan</h3>
                    <div>
                        <select name="penghasilanwali" class="custom-select form-control" id="penghasilanwali">
                          <option></option>
                          <?php foreach($penghasilan as $pe) : ?>
                            <option value="<?= $pe['nama_penghasilan']; ?>" <?= (old('penghasilanwali') == $pe['nama_penghasilan'] OR $siswa['penghasilan_wali'] == $pe['nama_penghasilan'])?'selected':''; ?>><?= $pe['nama_penghasilan']; ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hubungan">Hubungan dengan calon peserta didik</label>
                    <input type="text" name="hubungan" value="<?= (old('hubungan'))?old('hubungan'):$siswa['hubungan']; ?>" class="form-control" id="hubungan" placeholder="Hubungan Dengan Calon Peserta Didik">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn my-1 mx-1 btn-primary">Submit</button>
                  <button class="btn my-1 mx-1 btn-danger">Cancel</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>
  <!-- /.content-wrapper -->
  <?= $this->endSection(); ?>