<?php

namespace App\Controllers;
use App\Models\SiswaModel;

class Daftar extends BaseController
{
    protected $siswaModel;

    public function __construct(){
        $this->siswaModel = new SiswaModel();
    }

    public function index(): string
    {
        $data = ['title' => 'Halaman Daftar'];
        return view('pages/daftar', $data);
    }

    public function daftar()
    {
        $validate = [
            'nomor_wa' => [
                'rules' => 'is_unique[siswa.nomor_wa]',
                'errors' => [
                    'is_unique' => 'Nomor Whastapp telah digunakan, Mohon gunakan nomor Whastapp lain'
                ],
            ],
            'email' => [
                'rules' => 'is_unique[siswa.email]',
                'errors' => [
                    'is_unique' => 'Nomor Email telah digunakan, Mohon gunakan nomor Email lain'
                ],
            ],
        ];

        if (!$this->validate($validate)) {
            if ($this->validator->hasError('nomor_wa')) {
                $message = $this->validator->getError('nomor_wa');
            }elseif ($this->validator->hasError('email')) {
                $message = $this->validator->getError('email');
            }

            session()->setFlashdata('kotakok',[

                'status' => 'warning',
                'title' => 'Gagal',
                'message' => $message
            ]);

            return redirect()->to(base_url('daftar'))->withInput();
        }

        $data = ['title'=> 'Pendaftaran Berhasil'];
        $post = $this->request->getPost();
        if ($this->siswaModel->insert([
            'nama_siswa'    => $post['namasiswa'],
            'sekolah'  => $post['sekolah'],
            'kelamin'       => $post['kelamin'],
            'tempat_lahir'  => $post['tempatlahir'],
            'tanggal_lahir' => $post['tanggallahir'],
            'alamat'        => $post['alamat'],
            'kecamatan'     => $post['kecamatan'],
            'kabupaten'     => $post['kabupaten'],
            'provinsi'      => $post['provinsi'],
            'agama'         => $post['agama'],
            'penyakit'      => $post['penyakit'],
            'berkebutuhan'  => $post['berkebutuhan'],
            'anak_ke'       => $post['anakke'],
            'prestasi'      => $post['prestasi'],
            'nik_ayah'      => $post['nikayah'],
            'nama_ayah'     => $post['namaayah'],
            'pendidikan_ayah'   => $post['pendidikanayah'],
            'tempat_lahir_ayah' => $post['tempatlahirayah'],
            'tanggal_lahir_ayah'=> $post['tanggallahirayah'],
            'alamat_ayah'       => $post['alamatayah'],
            'pekerjaan_ayah'    => $post['pekerjaanayah'],
            'penghasilan_ayah'  => $post['penghasilanayah'],
            'nik_ibu'       => $post['nikibu'],
            'nama_ibu'      => $post['namaibu'],
            'nama_ibu'      => $post['namaibu'],
            'pendidikan_ibu'=> $post['pendidikanibu'],
            'tempat_lahir_ibu'  => $post['tempatlahiribu'],
            'tanggal_lahir_ibu' => $post['tanggallahiribu'],
            'alamat_ibu'    => $post['alamatibu'],
            'pekerjaan_ibu' => $post['pekerjaanibu'],
            'penghasilan_ibu'   => $post['penghasilanibu'],
            'nik_wali'      => $post['nikwali'],
            'nama_wali'     => $post['namawali'],
            'pendidikan_wali'   => $post['pendidikanwali'],
            'tempat_lahir_wali' => $post['tempatlahirwali'],
            'tanggal_lahir_wali'=> $post['tanggallahirwali'],
            'alamat_wali'       => $post['alamatwali'],
            'pekerjaan_wali'    => $post['pekerjaanwali'], 
            'penghasilan_wali'  => $post['penghasilanwali'],
            'hubungan'          => $post['hubungan'],
            'nomor_wa'          => $post['nomor_wa'],
            'email'             => $post['email'],
            'pembayaran'        => 'pending',
            'status'            => 'proses seleksi'
            ]) == true) {
            return view('pages/success',$data);
        }else{
            redirect()->to('daftar')->withInput();
        }
    }
}
