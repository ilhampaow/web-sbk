<?php

namespace App\Models;

use CodeIgniter\Model;

class komunitasModel extends Model
{
    protected $table = 'komunitas';
    protected $primaryKey = 'id_komunitas';

    public function sumId_komunitas()
    {
        return count($this->findColumn('id_komunitas'));
    }
}
