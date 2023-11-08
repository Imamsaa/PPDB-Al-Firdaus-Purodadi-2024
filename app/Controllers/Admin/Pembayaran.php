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
        $data['terbayar'] = $this->siswaModel->select('id,nama_siswa,sekolah,nomor_wa,bukti,no_daftar')->where('pembayaran','lunas')->findAll();
        return view('admin/pages/pembayaran',$data);
    }

    public function acc()
    {
        $post = $this->request->getPost();

        // MEMBUAT URUTAN
        $no = $this->siswaModel->selectMax('no_daftar', 'max_no')->first();

        if ($no == null) {
            $no['max_no'] = 'PPDB00000';
        }

        $urutan = (int) substr($no['max_no'], 4, 5);

        $urutan++;
        $no_daftar = 'PPDB'. sprintf("%05s", $urutan);
        // AKHIR MEMBUAT URUTAN

        if ($this->siswaModel->where('id',$post['id'])->set([
            'pembayaran' => 'lunas',
            'no_daftar' => $no_daftar
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
