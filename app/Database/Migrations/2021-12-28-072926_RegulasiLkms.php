<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RegulasiLkms extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id_regulasi_lkms'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'judul'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
      ],
      'deskripsi' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
      ],
      'link' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
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
    $this->forge->addKey('id_regulasi_lkms', true);
    $this->forge->createTable('regulasi_lkms');
  }

  public function down()
  {
    $this->forge->dropTable('regulasi_lkms');
  }
}
