<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'solusi_bisnis_id_produk'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'nama_produk'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'slug' => [
        'type' => 'VARCHAR',
        'constraint' => '255',
      ],
      'icon' => [
        'type' => 'VARCHAR',
        'constraint' => '255',
      ],
      'deskripsi' => [
        'type' => 'TEXT',
        'null' => true,
      ],
      'created_at' => [
        'type' => 'DATETIME',
        'null' => true,
      ],
      'updated_at' => [
        'type' => 'DATETIME',
        'null' => true,
      ],
    ]);
    $this->forge->addKey('solusi_bisnis_id_produk', true);
    $this->forge->createTable('bisnis_produk');
  }

  public function down()
  {
    $this->forge->dropTable('bisnis_produk');
  }
}
