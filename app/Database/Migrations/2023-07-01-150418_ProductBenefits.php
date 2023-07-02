<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use DateTime;

class ProductBenefits extends Migration
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
            'product_id' => [
                'type'              =>  'INT',
                'constraint'        =>  11,
                'unsigned'          =>  true
            ],
            'name' => [
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
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('product_benefits');
    }

    public function down()
    {
        $this->forge->dropTable('product_benefits');
    }
}
