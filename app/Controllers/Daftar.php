<?php

namespace App\Controllers;

class Daftar extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Halaman Daftar'];
        return view('pages/daftar', $data);
    }
}
