<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
  public function up()
  {

    $this->forge->addField([
      'solusi_bisnis_id_produk' => [
        'type'            => 'INT',
        'constraint'      => 11,
        'unsigned'        => TRUE,
        'auto_increment'  => TRUE
      ],
      'nama_produk' => [
        'type'            => 'VARCHAR',
        'constraint'      => 100,
      ],
      'slug' => [
        'type'            => 'VARHCAR',
        'constraint'      => 100,
      ],
      'icon' => [
        'type'            => 'VARCHAR',
        'constraint'      => 100,
      ],
      'deskripsi' => [
        'type'            => 'TEXT',
      ],
      'created_at' => [
        'type'            => 'DATETIME',
        'null'            => TRUE,
      ],
      'updated_at' => [
        'type'            => 'DATETIME',
        'null'            => TRUE,
      ],
    ]);

    $this->forge->addKey('solusi_bisnis_id_produk', true);
    $this->forge->createTable('soslusi_bisnis_produk');
  }

  public function down()
  {
    $this->forge->dropTable('solusi_bisnis_produk');
  }
}
