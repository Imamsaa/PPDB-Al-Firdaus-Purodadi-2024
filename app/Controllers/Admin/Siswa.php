<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Data Siswa'];
        return view('admin/pages/siswa',$data);
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
