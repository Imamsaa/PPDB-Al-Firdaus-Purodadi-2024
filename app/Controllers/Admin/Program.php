<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Program extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Program Unggulan'];
        return view('admin/pages/setting/program',$data);
    }

    public function tambah(): string
    {
        $data = ['title' => 'Tambah Program Unggulan'];
        return view('admin/pages/setting/program/tambah',$data);
    }
}
