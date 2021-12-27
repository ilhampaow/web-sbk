<?php

namespace App\Models;

use CodeIgniter\Model;

class SolusibisnisModel_diklat extends Model
{
    protected $table = 'solusi_bisnis_produk_diklat';
    protected $primaryKey = 'id_diklat';
    protected $useTimestamps = 'true';
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
