<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faq extends Migration
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
      'pertanyaan'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
      ],
      'jawaban' => [
        'type'           => 'TEXT',
        'null'     => false,
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
    $this->forge->createTable('faq');
  }

  public function down()
  {
    $this->forge->dropTable('faq');
  }
}
