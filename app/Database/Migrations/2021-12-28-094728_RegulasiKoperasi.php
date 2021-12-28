<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RegulasiKoperasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_regulasi_kop'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'deskripsi' => [
                'type'           => 'TEXT',
                'null'           => false,
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
        $this->forge->addKey('id_regulasi_kop', true);
        $this->forge->createTable('regulasi_koperasi');
    }

    public function down()
    {
        $this->forge->dropTable('regulasi_koperasi');
    }
}
