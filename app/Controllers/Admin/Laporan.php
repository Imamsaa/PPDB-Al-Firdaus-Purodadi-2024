<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SiswaModel;

class Laporan extends BaseController
{
    protected $siswaModel;

    public function __construct(){
        $this->siswaModel = new SiswaModel();
    }

    public function index(): string
    {
        $data = ['title' => 'Laporan'];
        $data['siswa'] = $this->siswaModel->findAll();
        return view('admin/pages/laporan',$data);
    }
}
