<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table      = 'pesan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;


    protected $allowedFields = [
        'endpoint',
        'apikey',
        'pengirim',
        'pesan_daftar',
        'pesan_bayar'
    ];

}