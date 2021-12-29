<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FatwaDsnMui extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id_fatwa_dsn_mui'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'nomor_fatwa'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
      ],
      'tentang' => [
        'type'           => 'TEXT',
        'null'           => false,
      ],
      'link' => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
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
    $this->forge->addKey('id_fatwa_dsn_mui', true);
    $this->forge->createTable('fatwa_dsn_mui');
  }

  public function down()
  {
    $this->forge->dropTable('fatwa_dsn_mui');
  }
}
