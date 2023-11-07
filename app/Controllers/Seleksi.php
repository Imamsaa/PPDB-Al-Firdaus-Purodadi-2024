<?php

namespace App\Controllers;

class Seleksi extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Seleksi Siswa'];
        return view('pages/seleksi', $data);
    }
}
