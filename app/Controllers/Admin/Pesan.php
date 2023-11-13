<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PesanModel;

class Pesan extends BaseController
{
    protected $pesanModel;

    public function __construct() {
        $this->pesanModel = new PesanModel();
    }

    public function index(): string
    {
        $data = ['title' => 'Pengaturan Pesan'];
        $data['pesan'] = $this->pesanModel->where('id',1)->first();
        return view('admin/pages/pesan',$data);
    }

    public function edit()
    {
        $post = $this->request->getPost();
        if ($this->pesanModel->where('id',1)->set([
            'pesan_daftar' => $post['pesandaftar'],
            'pesan_bayar'=> $post['pesanbayar']
        ])->update() == true) {
            return redirect()->to(base_url('sekolah/pesan'));
        }else {
            return redirect()->to(base_url('sekolah/pesan'))->withInput();
        }
    }
}
