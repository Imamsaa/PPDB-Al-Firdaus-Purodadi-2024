<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Akun extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Data Siswa'];
        return view('admin/pages/akun',$data);
    }

    public function edit(): string
    {
        $data = ['title' => 'Data Siswa'];
        return view('admin/pages/akun/edit',$data);
    }

}
