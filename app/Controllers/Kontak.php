<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Halaman Kontak'];
        return view('pages/kontak', $data);
    }
}
