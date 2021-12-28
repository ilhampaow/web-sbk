<?php

namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Expr\FuncCall;

class digitalProdukModel extends Model
{
    protected $table = 'digital_produk';
    protected $primaryKey = 'id_digital_produk';

    public function getDigitalProduk($id_digital)
    {
        return $this->where('source_id_digital', $id_digital)->findAll();
    }
}
