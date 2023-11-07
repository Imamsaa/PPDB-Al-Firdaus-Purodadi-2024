<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Panitia extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Data Panitia'];
        return view('admin/pages/panitia',$data);
    }

    public function edit(): string
    {
        $data = ['title' => 'Data Siswa'];
        return view('admin/pages/panitia/edit',$data);
    }
}
