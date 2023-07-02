<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use DateTime;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              =>  'INT',
                'constraint'        =>  11,
                'unsigned'          =>  true,
                'auto_increment'    =>  true
            ],
            'name' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'full_name' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'type' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'horse_power' => [
                'type'              =>  'INT',
                'constraint'        =>  11
            ],
            'speed_at' => [
                'type'              =>  'INT',
                'constraint'        =>  11
            ],
            'drive_type' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'tracking' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'price' => [
                'type'              =>  'INT',
                'constraint'        =>  11
            ],
            'rate' => [
                'type'              =>  'INT',
                'constraint'        =>  11
            ],
            'image' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'created_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
                'default'           => DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'))->format('Y-m-d H:i:s')
            ],
            'updated_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
                'default'           => DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'))->format('Y-m-d H:i:s')
            ],
            'deleted_at' => [
                'type'              =>  'DATETIME',
                'null'              =>  true,
                'default'           =>  null
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
