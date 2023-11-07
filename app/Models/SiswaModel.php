<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table      = 'siswa';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;


    protected $allowedFields = [
        'no_daftar',
        'nama_siswa',
        'sekolah',
        'kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'agama',
        'penyakit',
        'berkebutuhan',
        'anak_ke',
        'prestasi',
        'nik_ayah',
        'nama_ayah',
        'pendidikan_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'alamat_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nik_ibu',
        'nama_ibu',
        'pendidikan_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'alamat_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'nik_wali',
        'nama_wali',
        'pendidikan_wali',
        'tempat_lahir_wali',
        'tanggal_lahir_wali',
        'alamat_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'hubungan',
        'nomor_wa',
        'email',
        'pembayaran',
        'status'
    ];

}