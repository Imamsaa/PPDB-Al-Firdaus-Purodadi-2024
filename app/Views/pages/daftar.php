<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
            <div class="heading-section mb-5 mt-5 mt-lg-0">
                <h2 class="my-4 text-center">FORMULIR PENDAFTARAN</h2>
            </div>
            <div>
                <form action="<?= base_url('/daftar/siswa'); ?>" method="post">
                <?= csrf_field(); ?>
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						<h3 class="mb-3 text-center">Data Diri Siswa</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="namasiswa" class="col-sm-2 col-form-label font-weight-bold">Nama</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('namasiswa'); ?>" name="namasiswa" class="form-control" id="namasiswa" placeholder="Nama Calon Peserta Didik" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="sekolahasal" class="col-sm-2 col-form-label font-weight-bold">Sekolah Asal</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('sekolah'); ?>" name="sekolah" class="form-control" id="sekolahasal" placeholder="Sekolah Asal" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="kelamin">Jenis Kelamin</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" name="kelamin" id="kelamin" required>
                                <option hidden>Pilih</option>
                                <option value=""></option>
                                <option value="laki-laki" <?= (old('kelamin') == 'laki-laki')?'selected':''; ?>>Laki-laki</option>
                                <option value="perempuan" <?= (old('kelamin') == 'perempuan')?'selected':''; ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="tempatlahir" class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</h3>
                        <div class="col-sm-4 row">
                            <div class="col-sm-12">
                                <input type="text" value="<?= old('tempatlahir'); ?>" name="tempatlahir" class="form-control" id="tempatlahir" placeholder="Tempat Lahir" required>
                            </div>
                        </div>
                        <h3 for="tanggallahir" class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</h3>
                        <div class="row col-sm-4">
                            <div class="col-sm-12">
                                <input type="date" value="<?= old('tanggallahir'); ?>" name="tanggallahir" class="form-control" id="tanggallahir" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="alamatsiswa" class="col-sm-2 col-form-label font-weight-bold">Alamat</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('alamat'); ?>" name="alamat" class="form-control" id="alamatsiswa" placeholder="Alamat Calon Peserta Didik" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="kecamatan" class="col-sm-2 col-form-label font-weight-bold">Kecamatan</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('kecamatan'); ?>" name="kecamatan" class="form-control" id="kecamatan" placeholder="Kecamatan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="kabupaten" class="col-sm-2 col-form-label font-weight-bold">Kabupaten</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('kabupaten'); ?>" name="kabupaten" class="form-control" id="kabupaten" placeholder="Kabupaten" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="provinsi" class="col-sm-2 col-form-label font-weight-bold">Provinsi</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('provinsi'); ?>" name="provinsi" class="form-control" id="provinsi" placeholder="Provinsi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="agama">Agama</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" name="agama" id="agama" required>
                                <option value="islam" selected>Islam</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="penyakit" class="col-sm-2 col-form-label font-weight-bold">Riwayat Penyakit</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('penyakit'); ?>" name="penyakit" class="form-control" id="penyakit" placeholder="Riwayat Penyakit">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="berkebutuhan" class="col-sm-2 col-form-label font-weight-bold">Berkebutuhan Khusus</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('berkebutuhan'); ?>" name="berkebutuhan" class="form-control" id="berkebutuhan" placeholder="Berkebutuhan Khusus">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="anakke" class="col-sm-2 col-form-label font-weight-bold">Anak Ke</h3>
                        <div class="col-sm-10">
                            <input type="number" value="<?= old('anakke'); ?>" name="anakke" class="form-control" id="anakke" placeholder="1/2/3" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="prestasi" class="col-sm-2 col-form-label font-weight-bold">Prestasi</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('prestasi'); ?>" name="prestasi" class="form-control" id="prestasi" placeholder="Prestasi">
                        </div>
                    </div>

                    <!-- DATA DIRI AYAH -->
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						<h3 class="mb-3 text-center">Data Diri Ayah</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="nikayah" class="col-sm-2 col-form-label font-weight-bold">NIK</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('nikayah'); ?>" name="nikayah" class="form-control" id="nikayah" placeholder="NIK Ayah" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="namaayah" class="col-sm-2 col-form-label font-weight-bold">Nama Lengkap</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('namaayah'); ?>" name="namaayah" class="form-control" id="namaayah" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="pendidikanayah">Pendidikan</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" name="pendidikanayah" id="pendidikanayah" required>
                                <option hidden>Pilih</option>
                                <option value=""></option>
                                <option <?= (old('pendidikanayah') == 'Sekolah Dasar')?'selected':''; ?>>Sekolah Dasar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="tempatlahirayah" class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</h3>
                        <div class="col-sm-4 row">
                            <div class="col-sm-12">
                                <input type="text" value="<?= old('tempatlahirayah'); ?>" name="tempatlahirayah" class="form-control" id="tempatlahirayah" placeholder="Tempat Lahir" required>
                            </div>
                        </div>
                        <h3 for="tanggallahirayah" class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</h3>
                        <div class="row col-sm-4">
                            <div class="col-sm-12">
                                <input type="date" value="<?= old('tanggallahirayah'); ?>" name="tanggallahirayah" class="form-control" id="tanggallahirayah" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="alamatayah" class="col-sm-2 col-form-label font-weight-bold">Alamat</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('alamatayah'); ?>" name="alamatayah" class="form-control" id="alamatayah" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="pekerjaanayah" class="col-sm-2 col-form-label font-weight-bold">Pekerjaan</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('pekerjaanayah'); ?>" name="pekerjaanayah" class="form-control" id="pekerjaanayah" placeholder="Pekerjaan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="penghasilan">Penghasilan</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" name="penghasilanayah" id="penghasilan" required>
                                <option hidden>Pilih</option>
                                <option value=""></option>
                                <option value="2 Juta" <?= (old('penghasilanayah') == '2 Juta')?'selected':''; ?>>2jt</option>
                            </select>
                        </div>
                    </div>
                    <!-- DATA DIRI IBU -->
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						<h3 class="mb-3 text-center">Data Diri Ibu</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="nikibu" class="col-sm-2 col-form-label font-weight-bold">NIK Ibu</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('nikibu'); ?>" name="nikibu" class="form-control" id="nikibu" placeholder="NIK Ibu" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="namaibu" class="col-sm-2 col-form-label font-weight-bold">Nama Lengkap</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('namaibu'); ?>" name="namaibu" class="form-control" id="namaibu" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="pendidikanibu">Pendidikan</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" name="pendidikanibu" id="pendidikanibu" required>
                                <option hidden>Pilih</option>
                                <option value=""></option>
                                <option <?= (old('pendidikanibu') == 'Sekolah Dasar')?'selected':''; ?>>Sekolah Dasar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="tempatlahiribu" class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</h3>
                        <div class="col-sm-4 row">
                            <div class="col-sm-12">
                                <input type="text" value="<?= old('tempatlahiribu'); ?>" name="tempatlahiribu" class="form-control" id="tempatlahiribu" placeholder="Tempat Lahir" required>
                            </div>
                        </div>
                        <h3 for="tanggallahiribu" class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</h3>
                        <div class="row col-sm-4">
                            <div class="col-sm-12">
                                <input type="date" value="<?= old('tanggallahiribu'); ?>" name="tanggallahiribu" class="form-control" id="tanggallahiribu" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="alamatibu" class="col-sm-2 col-form-label font-weight-bold">Alamat</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('alamatibu'); ?>" name="alamatibu" class="form-control" id="alamatibu" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="pekerjaanibu" class="col-sm-2 col-form-label font-weight-bold">Pekerjaan</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('pekerjaanibu'); ?>" name="pekerjaanibu" class="form-control" id="pekerjaanibu" placeholder="Pekerjaan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="penghasilanibu">Penghasilan</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" name="penghasilanibu" id="penghasilanibu" required>
                                <option hidden>Pilih</option>
                                <option value=""></option>
                                <option value="2 Juta" <?= (old('penghasilanibu') == '2 Juta')?'selected':''; ?>>2 Juta</option>
                            </select>
                        </div>
                    </div>
                    <!-- DATA DIRI WALI -->
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						<h3 class="mb-3 text-center">Data Diri Wali Siswa</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="nikwali" class="col-sm-2 col-form-label font-weight-bold">NIK Wali</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('nikwali'); ?>" name="nikwali" class="form-control" id="nikwali" placeholder="NIK Wali">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="namawali" class="col-sm-2 col-form-label font-weight-bold">Nama Lengkap</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('namawali'); ?>" name="namawali" class="form-control" id="namawali" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="hubungan" class="col-sm-2 col-form-label font-weight-bold">Hubungan Dengan Calon Siswa</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('hubungan'); ?>" class="form-control" name="hubungan" id="hubungan" placeholder="Hubungan Dengan Calon Siswa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="pendidikanwali">Pendidikan</h3>
                        <div class="col-sm-6">
                            <select class="custom-select form-control" name="pendidikanwali" id="pendidikanwali">
                                <option hidden>Pilih</option>
                                <option value=""></option>
                                <option <?= (old('pendidikanwali') == 'Sekolah dasar')?'selected':''; ?>>Sekolah Dasar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="tempatlahirwali" class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</h3>
                        <div class="col-sm-4 row">
                            <div class="col-sm-12">
                                <input type="text" value="<?= old('tempatlahirwali'); ?>" name="tempatlahirwali" class="form-control" id="tempatlahirwali" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <h3 for="tanggallahirwali" class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</h3>
                        <div class="row col-sm-4">
                            <div class="col-sm-12">
                                <input type="date" value="<?= old('tanggallahirwali'); ?>" name="tanggallahirwali" class="form-control" id="tanggallahirwali">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="alamatwali" class="col-sm-2 col-form-label font-weight-bold">Alamat</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('alamatwali'); ?>" name="alamatwali" class="form-control" id="alamatwali" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="pekerjaanwali" class="col-sm-2 col-form-label font-weight-bold">Pekerjaan</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('pekerjaanwali'); ?>" name="pekerjaanwali" class="form-control" id="pekerjaanwali" placeholder="Pekerjaan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 class="col-sm-2 col-form-label font-weight-bold" for="penghasilanwali">Penghasilan</h3>
                        <div class="col-sm-6">
                            <select name="penghasilanwali" class="custom-select form-control" id="penghasilanwali">
                                <option hidden>Pilih</option>
                                <option value=""></option>
                                <option value="2 Juta" <?= (old('penghasilanwali' == '2 Juta'))?'selected':''; ?>>2 Juta</option>
                            </select>
                        </div>
                    </div>
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
						<h3 class="mb-3 text-center">Wajib Diisi</h3>
                    <div>
                    <div class="form-group row">
                        <h3 for="nomorwa" class="col-sm-2 col-form-label font-weight-bold">Nomor WhastApp</h3>
                        <div class="col-sm-10">
                            <input type="text" value="<?= old('nomorwa'); ?>" name="nomorwa" class="form-control" id="nomorwa" placeholder="Nomor WhastApp 628......" required>
                            <small id="wa" class="form-text text-muted">Nomor Whastapp digunakan untuk mengirim notifikasi pembayaran pendaftaran dan hasil seleksi, harap di isi sesuai dengan format yang sudah ditentukan yaitu dengan format 62 tanpa tanda (+)</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="email" class="col-sm-2 col-form-label font-weight-bold">Email</h3>
                        <div class="col-sm-10">
                            <input name="email" value="<?= old('email'); ?>" type="text" class="form-control" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-success btn-lg col-sm-3">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
		</div>
	</section>
<?= $this->endSection();; ?>