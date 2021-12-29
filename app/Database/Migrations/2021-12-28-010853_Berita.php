<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'author'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
      ],
      'judul' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
      ],
      'artikel' => [
        'type'           => 'TEXT',
        'null'           => false,
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
    $this->forge->addKey('id', true);
    $this->forge->createTable('berita');
  }

  public function down()
  {
    $this->forge->dropTable('berita');
  }
}
