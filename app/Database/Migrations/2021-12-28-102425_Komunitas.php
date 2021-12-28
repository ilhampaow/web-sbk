<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komunitas extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id_komunitas'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'slug'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
      ],
      'judul' => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
      ],
      'sub_judul' => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
      ],
      'artikel' => [
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
    $this->forge->addKey('id_komunitas', true);
    $this->forge->createTable('komunitas');
  }

  public function down()
  {
    $this->forge->dropTable('komunitas');
  }
}
