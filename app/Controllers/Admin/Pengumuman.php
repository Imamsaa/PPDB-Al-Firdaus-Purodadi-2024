<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pengumuman extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Program Unggulan'];
        return view('admin/pages/setting/pengumuman',$data);
    }

    public function tambah(): string
    {
        $data = ['title' => 'Tambah Program Unggulan'];
        return view('admin/pages/setting/pengumuman/tambah',$data);
    }
}
