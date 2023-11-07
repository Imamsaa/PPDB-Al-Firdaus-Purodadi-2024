<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Whastapp extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Pesan Whastapp'];
        return view('admin/pages/pesan',$data);
    }
}
