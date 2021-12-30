<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\digitalProdukDokModel;

class digitalProdukModel extends Model
{
    protected $table = 'digital_produk';
    protected $primaryKey = 'id_digital_produk';

    public function getDigitalProduk($slug)
    {
        return $this->where('slug', $slug)->findAll();
    }
    public function getDigitalProdukDok($slug, $id_digital)
    {
        $array = array('slug' => $slug, 'source_id_digital_produk' => $id_digital);
        return $this->db->table('digital_produk')
            ->join('digital_produk_dok', 'digital_produk.id_digital_produk=digital_produk_dok.source_id_digital_produk')
            ->where($array)
            ->get()->getResultArray();
    }
    public function getJudulDigitalProduk($slug)
    {
        return $this->db->table('digital')
            ->join('digital_produk', 'digital.id_digital=digital_produk.source_id_digital')
            ->where('digital_produk.slug', $slug)
            ->get()->getResultArray();
    }
}
