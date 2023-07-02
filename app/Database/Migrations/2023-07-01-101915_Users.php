<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use DateTime;

class Users extends Migration
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
            'email' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'phone_number' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'password' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'profile_picture' => [
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
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
