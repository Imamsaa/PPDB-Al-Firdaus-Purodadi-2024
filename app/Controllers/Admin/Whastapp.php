<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PesanModel;

class Whastapp extends BaseController
{
    protected $pesanModel;

    public function __construct() {
        $this->pesanModel = new PesanModel();
    }

    public function index(): string
    {
        $data = ['title' => 'Pengaturan Whastapp'];
        $data['pesan'] = $this->pesanModel->where('id',1)->first();
        return view('admin/pages/whastapp',$data);
    }

    public function edit()
    {
        $post = $this->request->getPost();
        if ($this->pesanModel->where('id',1)->set([
            'endpoint'=> $post['endpoint'],
            'apikey'=> $post['apikey'],
            'pengirim'=> $post['pengirim']
        ])->update() == true) {
            return redirect()->to(base_url('sekolah/whastapp'));
        }else{
            return redirect()->to(base_url('sekolah/whastapp'))->withInput();
        }
    }
}
