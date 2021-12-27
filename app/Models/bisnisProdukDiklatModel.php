<?php

namespace App\Models;

use CodeIgniter\Model;

class bisnisProdukDiklatModel extends Model
{
    protected $table = 'bisnis_produk_diklat';
    protected $primaryKey = 'id_diklat';
    protected $useTimestamps = 'true';
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
