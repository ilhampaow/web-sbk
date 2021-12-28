<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pernyataan extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id_pernyataan'    => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'pernyataan' => [
        'type'           => 'TEXT',
        'null'           => false,
      ],
      'sumber' => [
        'type'           => 'VARCHAR',
        'null'           => '255',
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
    $this->forge->addKey('id_regulasi_kop', true);
    $this->forge->createTable('regulasi_koperasi');
  }

  public function down()
  {
    $this->forge->dropTable('regulasi_koperasi');
  }
}
