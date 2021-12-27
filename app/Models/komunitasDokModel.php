<?php

namespace App\Models;

use CodeIgniter\Model;

class komunitasDokModel extends Model
{
    protected $table = 'komunitas_dok';
    protected $primaryKey = 'id_komunitas_dok';

    public function getDok($id_komunitas)
    {
        return $this->where('source_id_komunitas', $id_komunitas)->findAll();
    }
}
