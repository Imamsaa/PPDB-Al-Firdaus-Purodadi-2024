<?php

namespace App\Controllers;
use App\Models\SiswaModel;

class Upload extends BaseController
{
    protected $siswaModel;

    public function __construct() {
        $this->siswaModel = new SiswaModel();
    }

    public function index(string $nomor_wa)
    {
        $data = ['title' => 'Upload Bukti Pembayaran'];
        $data['siswa'] = $this->siswaModel->where("nomor_wa",$nomor_wa)->first();
        return view('pages/upload', $data);
    }

    public function upload()
    {
        $validate = [
            'bukti' => [
                'rules' => 'max_size[bukti,1024]|ext_in[bukti,png,jpg,jpeg]|is_image[bukti]',
                'errors' => [
                    'max_size' => 'Ukuran file terlalu besar',
                    'ext_in' => 'Mohon Masukan file Gambar',
                    'is_image' => 'Mohon Masukan file Gambar Yang benar'
                ],
            ],
        ];

        $post = $this->request->getPost();

        if (!$this->validate($validate)) {
            if ($this->validator->hasError('bukti')) {
                $message = $this->validator->getError('bukti');
            }
            session()->setFlashdata('kotakok',[

                'status' => 'warning',
                'title' => 'Gagal',
                'message' => $message
            ]);
            return redirect()->to('upload/'.$post['nomorwa'])->withInput();
        }

        $bukti = $this->request->getFile('bukti');
        $name = $bukti->getRandomName();
        if ($bukti->isvalid() && !$bukti->hasMoved()) {
            $bukti->move('public/admin/img/bukti',$name);
        }

        $data = ['title'=>'Berhasil Upload'];

        if ($this->siswaModel->where('id',$post['id'])->set([
            'pembayaran' => 'upload',
            'bukti' => $name
        ])->update() == true) {
            return view('pages/sucupload',$data);
        }else{
            return redirect()->to('upload/'.$post['nomorwa'])->withInput();
        }
    }
}
