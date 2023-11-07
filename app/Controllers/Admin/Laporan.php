<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Laporan extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Program Unggulan'];
        return view('admin/pages/laporan',$data);
    }
}
