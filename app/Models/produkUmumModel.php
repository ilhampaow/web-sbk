<?php

namespace App\Models;

use CodeIgniter\Model;

class produkUmumModel extends Model
{
    protected $table = 'jenis_bisnis';

    public function getJenisBisnis()
    {
        return $this->db->table('bisnis_produk')
            ->join('bisnis_produk_diklat', 'bisnis_produk.solusi_bisnis_id_produk = bisnis_produk_diklat.source_bisnis_id')
            ->join('jenis_bisnis', 'jenis_bisnis.id = bisnis_produk.source_id')
            ->get()->getResultArray();
    }
    public function getJenisDigital()
    {
        return $this->db->table('digital')
            ->join('digital_produk', 'digital.id_digital = digital_produk.source_id_digital')
            ->join('jenis_bisnis', 'jenis_bisnis.id = digital.source_id')
            ->get()->getResultArray();
    }

    public function getJenisKomunitas()
    {
        return $this->db->table('komunitas')
            ->join('jenis_bisnis', 'komunitas.source_id = jenis_bisnis.id')
            ->get()->getResultArray();
    }
}
