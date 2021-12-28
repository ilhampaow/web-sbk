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
                'constraint'     => '100',
            ],
            'judul' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'sub_judul' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'artikel' => [
                'type'           => 'TEXT',
                'null'           => false,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => false,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => false,
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
