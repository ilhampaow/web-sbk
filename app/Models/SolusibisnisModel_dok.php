<?php

namespace App\Models;

use CodeIgniter\Model;

class SolusibisnisModel_dok extends Model
{
    protected $table = 'solusi_bisnis_dok_diklat';
    protected $primaryKey = 'dok_diklat_id';
    protected $useTimestamps = 'true';
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    // public function getDokumentasi()
    // {
    //     return $this->db->table('solusi_bisnis_dok_diklat')
    //         ->join('solusi_bisnis_produk_diklat', 'solusi_bisnis_produk_diklat.id_diklat=solusi_bisnis_dok_diklat.diklat_source_id')
    //         ->get()->getResultArray();
    // }
    // public function getSolusiBisnisProduk($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['slug' => $slug])->first();
    // }
}
