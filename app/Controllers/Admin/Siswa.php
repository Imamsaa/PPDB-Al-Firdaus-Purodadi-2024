<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;

class Siswa extends BaseController
{
    protected $siswaModel;
    protected $pendidikanModel;
    protected $penghasilanModel;

    public function __construct(){
        $this->siswaModel = new SiswaModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->penghasilanModel = new PenghasilanModel();
    }

    public function index(): string
    {
        $data = ['title' => 'Data Calon Peserta Didik'];
        $data['daftar'] = $this->siswaModel->select('id,status,nama_siswa,no_daftar,nomor_wa,sekolah')->findAll();
        return view('admin/pages/siswa',$data);
    }

    public function pageTerima()
    {
        $data = ['title' => 'Data Calon Peserta Didik'];
        $data['daftar'] = $this->siswaModel->select('id,status,nama_siswa,no_daftar,nomor_wa,sekolah')->where('status','diterima')->findAll();
        return view('admin/pages/terima',$data);
    }

    public function pageTolak()
    {
        $data = ['title' => 'Data Calon Peserta Didik'];
        $data['daftar'] = $this->siswaModel->select('id,status,nama_siswa,no_daftar,nomor_wa,sekolah')->where('status','ditolak')->findAll();
        return view('admin/pages/tolak',$data);
    }

    public function edit(string $no_daftar)
    {
        $data = ['title' => 'Data Calon Peserta Didik'];
        $data['pendidikan'] = $this->pendidikanModel->findAll();
        $data['penghasilan'] = $this->penghasilanModel->findAll();
        $data['siswa'] = $this->siswaModel->where('no_daftar',$no_daftar)->first();
        return view('admin/pages/siswa/edit',$data);
    }

    public function setEdit()
    {
        $data = ['title' => 'Data Calon Peserta Didik'];
        $post = $this->request->getPost();
        if ($this->siswaModel->where('no_daftar',$post['no_daftar'])->set([
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
            ])->update() == true) {
            return redirect()->to(base_url('sekolah/siswa'))->withInput();
        }else{
            return redirect()->to(base_url('sekolah/siswa/'.$post['no_daftar']))->withInput();
        }
    }

    public function cetak(string $no_daftar)
    {
        $data = ['title' => 'Cetak Data Calon Peserta Didik'];
        $data['siswa'] = $this->siswaModel->where('no_daftar',$no_daftar)->first();
        return view('admin/pages/siswa/cetak',$data);
    }

    // TERIMA PESERTA DIDIK

    public function terima(){
        $post = $this->request->getPost();
        if ($this->siswaModel->where('no_daftar',$post['no_daftar'])->set([
            'status' => 'diterima'
        ])->update() == true) {
            return redirect()->to(base_url('sekolah/siswa'));
        }else{
            return redirect()->to(base_url('sekolah/siswa'));
        }
    }

    // TOLAK PESERTA DIDIK
    public function tolak(){
        $post = $this->request->getPost();
        if ($this->siswaModel->where('no_daftar',$post['no_daftar'])->set([
            'status' => 'ditolak'
        ])->update() == true) {
            return redirect()->to(base_url('sekolah/siswa'));
        }else{
            return redirect()->to(base_url('sekolah/siswa'));
        }
    }

    // BATAL TERIMA
    public function batalTerima(){
        $post = $this->request->getPost();
        if ($this->siswaModel->where('no_daftar',$post['no_daftar'])->set([
            'status' => 'proses seleksi'
        ])->update() == true) {
            return redirect()->to(base_url('sekolah/siswa'));
        }else{
            return redirect()->to(base_url('sekolah/siswa'));
        }
    }

    // BATAL TOLAK
    public function batalTolak(){
        $post = $this->request->getPost();
        if ($this->siswaModel->where('no_daftar',$post['no_daftar'])->set([
            'status' => 'proses seleksi'
        ])->update() == true) {
            return redirect()->to(base_url('sekolah/siswa'));
        }else{
            return redirect()->to(base_url('sekolah/siswa'));
        }
    }
}
