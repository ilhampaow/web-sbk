<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokumentasi extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'dok_diklat_id'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'gambar'       => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
      ],
      'diklat_source_id' => [
        'type' => 'VARCHAR',
        'constraint' => '255',
      ],
    ]);
    $this->forge->addKey('dok_diklat_id', true);
    $this->forge->createTable('bisnis_diklat_dok');
  }

  public function down()
  {
    $this->forge->dropTable('bisnis_diklat_dok');
  }
}
