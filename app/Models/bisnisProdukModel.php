<?php

namespace App\Models;

use CodeIgniter\Model;

class bisnisProdukModel extends Model
{
    protected $table = 'bisnis_produk';
    protected $primaryKey = 'solusi_bisnis_id_produk';
    protected $useTimestamps = 'true';
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getSolusiBisnisProduk($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
