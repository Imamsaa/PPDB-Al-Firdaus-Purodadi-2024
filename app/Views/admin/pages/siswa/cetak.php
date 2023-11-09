<!DOCTYPE html>
<html lang="en">
<html>
<title>CETAK DATA SISWA</title>
<style>
th, td {
  border-bottom: 1px solid #ddd;
  padding : 10px;
}
tr:nth-child(even) {background-color: #f2f2f2;} 
table{
  border-collapse: collapse;
  vertical-align: center;
  border: 1px solid #f2f2f2;
  width:100%;
}
table .hilang{
  border-collapse: collapse;
  vertical-align: center;
  border: 0px solid white;
  width:100%;
}
tr .hilang{
  border-collapse: collapse;
  vertical-align: center;
  border: 0px solid white;
  width:100%;
}
</style>
<body>
<!-- Theme style -->
  <table class="hilang" style="border:0;">
    <tr class="hilang" style="border:0;">
      <td style="border:0; vertical-align:center; text-align:center;"><h1 style="line-height: 10px;">SDIT AL FIRDAUS PURWODADI</h1><p style="line-height: 10px;">Jalan Taman Makam Pahlawan No.19 Purwodadi</p></td>
    </tr>
</table>
  <hr>
  <h2 style="text-align:center;margin:0;"><u>Formulir Pendaftaran</u></h2>
  <h3 style="text-align:center;margin:0; ">No. Pendaftaran <?= $siswa['no_daftar']; ?></h3>
  <table>
  <thead>
    <tr>
      <th colspan="3">Data Diri Pendaftar</th>
    </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><?= $siswa['nama_siswa']; ?></td>
      </tr>
      <tr>
        <td>Tempat, Tanggal lahir</td>
        <td><?= $siswa['tempat_lahir']; ?>, <?= $siswa['tanggal_lahir']; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?= $siswa['kelamin']; ?></td>
      </tr>
      <tr>
      <td>No Handphone</td>
        <td><?= $siswa['nomor_wa']; ?></td>
      </tr>
    </thead>
    </table>
    <br>
    <table>
    <thead>
      <tr>
        <td>Asal Sekolah</td>
        <td><?= $siswa['sekolah']; ?></td>
        <td>Agama</td>
        <td><?= $siswa['agama']; ?></td>
      </tr>
      <tr>
        <td>Alamat Siswa</td>
        <td><?= $siswa['alamat']; ?></td>
        <td>E-mail</td>
        <td><?= $siswa['email']; ?></td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td><?= $siswa['kecamatan']; ?></td>
        <td>Anak Ke</td>
        <td><?= $siswa['anak_ke']; ?></td>
      </tr>
      <tr>
        <td>Kabupaten</td>
        <td><?= $siswa['kabupaten']; ?></td>
        <td>Provinsi</td>
        <td><?= $siswa['provinsi']; ?></td>
      </tr>
    </thead>
    </table>
    <br>
    <table>
    <thead>
      <tr>
        <th>Data Orang Tua</th>
        <th>Data Ayah</th>
        <th>Data Ibu</th>

      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><?= $siswa['nama_ayah']; ?></td>
        <td><?= $siswa['nama_ibu']; ?></td>

      </tr>
      <tr>
        <td>Tempat, Tgl lahir</td>
        <td><?= $siswa['tempat_lahir_ayah']; ?>, <?= $siswa['tanggal_lahir_ayah']; ?></td>
        <td><?= $siswa['tempat_lahir_ibu']; ?>, <?= $siswa['tanggal_lahir_ibu']; ?></td>

      </tr>
      <tr>
        <td>Pendidikan</td>
        <td><?= $siswa['pendidikan_ayah']; ?></td>
        <td><?= $siswa['pendidikan_ibu']; ?></td>

      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td><?= $siswa['pekerjaan_ayah']; ?></td>
        <td><?= $siswa['pekerjaan_ibu']; ?></td>

      </tr>
    </thead>
    </table>
    
</body>
</html>
<script>
    // setTimeout(function () { window.print(); }, 500);
    // window.onfocus = function () { setTimeout(function () { window.close(); }, 500); }
</script>