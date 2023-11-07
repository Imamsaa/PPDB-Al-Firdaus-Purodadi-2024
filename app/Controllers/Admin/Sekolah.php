<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Sekolah extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Pengaturan Sekolah'];
        return view('admin/pages/setting/sekolah',$data);
    }

    public function edit(): string
    {
        $data = ['title' => 'Data Siswa'];
        return view('admin/pages/siswa/edit',$data);
    }

    public function cetak()
    {
        $data = ['title' => 'Data Siswa'];
        return view('admin/pages/siswa/cetak',$data);
    }
}
