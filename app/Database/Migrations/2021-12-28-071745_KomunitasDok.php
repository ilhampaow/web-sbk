<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KomunitasDok extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id_komunitas_dok'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'gambar'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
      ],
      'source_id_komunitas' => [
        'type'           => 'INT',
        'null'           => 11,
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
    $this->forge->addKey('id_komunitas_dok', true);
    $this->forge->createTable('komunitas_dok');
  }

  public function down()
  {
    $this->forge->dropTable('komunitas_dok');
  }
}
