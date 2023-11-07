<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Info extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Program Unggulan'];
        return view('admin/pages/setting/info',$data);
    }

    public function tambah(): string
    {
        $data = ['title' => 'Tambah Program Unggulan'];
        return view('admin/pages/setting/info/tambah',$data);
    }
}
