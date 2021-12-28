<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DigitalProduk extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id_digital_produk'  => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'digital_produk'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
      ],
      'gambar' => [
        'type'           => 'TEXT',
        'null'           => false,
      ],
      'link' => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
      ],
      'artikel' => [
        'type'           => 'TEXT',
        'null'           => false,
      ],
      'slug' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
      ],
      'source_id_digital' => [
        'type'           => 'INT',
        'constraint'     => 11,
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
    $this->forge->addKey('id_digital_produk', true);
    $this->forge->createTable('digital_produk');
  }

  public function down()
  {
    $this->forge->dropTable('digital_produk');
  }
}
