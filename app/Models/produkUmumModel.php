<?php

namespace App\Models;

use CodeIgniter\Model;

class produkUmumModel extends Model
{
    protected $table = 'jenis_bisnis';

    public function getJenisBisnis()
    {
        return $this->db->table('bisnis_produk')
            ->join('jenis_bisnis', 'jenis_bisnis.id = bisnis_produk.source_id')
            ->get()->getResultArray();
    }
    public function getJenisDigital()
    {
        return $this->db->table('digital')
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
