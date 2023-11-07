<?php

namespace App\Controllers;

class Info extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Halaman Info'];
        return view('pages/info', $data);
    }
}
