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
        'constraint'           => '255',
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
    $this->forge->addKey('id_pernyataan', true);
    $this->forge->createTable('pernyataan');
  }

  public function down()
  {
    $this->forge->dropTable('pernyataan');
  }
}
