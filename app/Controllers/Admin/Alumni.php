<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Alumni extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Program Unggulan'];
        return view('admin/pages/setting/alumni',$data);
    }

    public function tambah(): string
    {
        $data = ['title' => 'Tambah Program Unggulan'];
        return view('admin/pages/setting/alumni/tambah',$data);
    }
}
