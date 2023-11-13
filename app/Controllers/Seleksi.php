<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Seleksi extends BaseController
{
    protected $siswaModel;

    public function __construct() {
        $this->siswaModel = new SiswaModel();
    }

    public function index(): string
    {
        $data = ['title' => 'Seleksi Siswa'];
        $data['daftar'] = $this->siswaModel->select('nama_siswa,no_daftar,sekolah,status')->where('pembayaran','lunas')->findAll();
        return view('pages/seleksi', $data);
    }
}
