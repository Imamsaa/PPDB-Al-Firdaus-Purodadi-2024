<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Upload extends BaseController
{
    public function setting(): string
    {
        $data = ['title' => 'Pengaturan Sekolah'];
        return view('admin/pages/setting/ketupload',$data);
    }
}
