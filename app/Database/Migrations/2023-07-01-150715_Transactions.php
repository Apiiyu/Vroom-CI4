<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use DateTime;

class Transactions extends Migration
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
            'user_id' => [
                'type'              =>  'INT',
                'constraint'        =>  11,
                'unsigned'          =>  true
            ],
            'product_id' => [
                'type'              =>  'INT',
                'constraint'        =>  11,
                'unsigned'          =>  true
            ],
            'name' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'start_date' => [
                'type'              =>  'DATE'
            ],
            'end_date' => [
                'type'              =>  'DATE'
            ],
            'delivery_address' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'city' => [
                'type'              =>  'VARCHAR',
                'constraint'        =>  255
            ],
            'postal_code' => [
                'type'              =>  'INT',
                'constraint'        =>  11
            ],
            'payment' => [
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
                'type'              => 'DATETIME',
                'null'              => true,
                'default'           => null
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
