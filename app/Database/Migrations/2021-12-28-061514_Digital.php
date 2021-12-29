<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Digital extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id_digital'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'nama_digital'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
      ],
      'slug' => [
        'type'           => 'TEXT',
        'null'           => false,
      ],
      'created_at'         => [
        'type'           => 'DATETIME',
        'null'           => TRUE,
      ],
      'updated_at'         => [
        'type'           => 'DATETIME',
        'null'           => TRUE,
      ],
    ]);
    $this->forge->addKey('id_digital', true);
    $this->forge->createTable('digital');
  }

  public function down()
  {
    $this->forge->dropTable('digital');
  }
}
