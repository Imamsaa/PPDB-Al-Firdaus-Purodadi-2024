<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kirim extends BaseController
{
    protected $pesanModel;
    protected $siswaModel;

    public function __construct(object $pesanModel,object $siswaModel){
        $this->pesanModel = $pesanModel;
        $this->siswaModel = $siswaModel;
    }

    public function ubahPesan(string $pesan,string $penerima) : string
    {
        $result = [];
        $element = $this->siswaModel->where('nomor_wa',$penerima)->first();
        $pecah = explode("$$", $pesan);
        foreach ($pecah as $p => $pvalue) {
            unset($var);
            foreach ($element as $key => $value) {
                if ($pvalue == $key) {
                    $var = $value;
                }
            }
            $result[] = (isset($var)) ? $var : $pvalue;
        }
        return urlencode(implode(" ",$result));
    }

    public function kirim(string $pesan,string $penerima) : bool
    {
        $wa = $this->pesanModel->first();
        $url = $wa['endpoint'].'?api_key='.$wa['apikey']."&sender=".$wa['pengirim']."&number=".$penerima."&message=".$pesan;
        
        $handle = curl_init($url);
        curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

        /* Get the HTML or whatever is linked in $url. */
        $response = curl_exec($handle);

        /* Check for 404 (file not found). */
        $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        if($httpCode == 400) {
            return false;
        }elseif($httpCode == 200){
            return true;
        }else{
            return false;
        }
        curl_close($handle);
    }

    public function kirimDaftar(string $penerima) : bool
    {
        $pesan = $this->pesanModel->first();
        return $this->kirim($this->ubahPesan($pesan['pesan_daftar'],$penerima), $penerima);
    }

    public function kirimBayar(string $penerima)
    {
        $pesan = $this->pesanModel->first();
        return $this->kirim($this->ubahPesan($pesan['pesan_bayar'],$penerima), $penerima);
        // return $this->ubahPesan($pesan['pesan_bayar']);
    }
}
