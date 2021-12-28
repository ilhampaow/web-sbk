<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukDiklat extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id_diklat'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'produk'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
      ],
      'deskripsi' => [
        'type'           => 'TEXT',
        'null'     => false,
      ],
      'created_at' => [
        'type'           => 'DATETIME',
        'null'           => TRUE,
      ],
      'updated_at' => [
        'type'           => 'DATETIME',
        'null'           => TRUE,
      ],
    ]);
    $this->forge->addKey('id_diklat', true);
    $this->forge->createTable('bisnis_produk_diklat');
  }

  public function down()
  {
    $this->forge->dropTable('bisnis_produk_diklat');
  }
}
