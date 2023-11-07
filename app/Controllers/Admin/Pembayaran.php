<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pembayaran extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Data Siswa'];
        return view('admin/pages/pembayaran',$data);
    }
}
