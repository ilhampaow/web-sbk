<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table      = 'berita';
  protected $primaryKey = 'id';
  protected $allowedFields = ['author', 'judul', 'artikel', 'created_at', 'updated_at'];

  protected $useTimestamps = true;
}
