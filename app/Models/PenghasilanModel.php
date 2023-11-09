<?php

namespace App\Models;

use CodeIgniter\Model;

class PenghasilanModel extends Model
{
    protected $table      = 'penghasilan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;


    protected $allowedFields = [
        'nama_penghasilan'
    ];

}