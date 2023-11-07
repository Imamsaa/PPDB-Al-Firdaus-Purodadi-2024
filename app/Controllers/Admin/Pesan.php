<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pesan extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Daftar Pesan'];
        return view('admin/pages/pesan',$data);
    }
}
