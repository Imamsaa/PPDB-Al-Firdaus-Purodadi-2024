<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\SiswaModel;

class Pembayaran extends BaseController
{
    protected $siswaModel;

    public function __construct(){
        $this->siswaModel = new SiswaModel();
    }

    public function index(): string
    {
        $data = ['title' => 'Pembayaran'];
        $data['daftar'] = $this->siswaModel->select('id,nama_siswa,sekolah,nomor_wa,bukti')->where('pembayaran','upload')->findAll();
        return view('admin/pages/pembayaran',$data);
    }

    public function acc()
    {
        $post = $this->request->getPost();
        if ($this->siswaModel->where('id',$post['id'])->set([
            'pembayaran' => 'lunas'
        ])->update() == true) {
            return redirect()->to(base_url('sekolah/pembayaran'));
        }else{
            return redirect()->to(base_url('sekolah/pembayaran'));
        }
    }

    public function delete(string $id){
        if ($this->siswaModel->where('id',$id)->delete() == true) {
            return redirect()->to(base_url('sekolah/pembayaran'));
        }else{
            return redirect()->to(base_url('sekolah/pembayaran'));
        }
    }
}
