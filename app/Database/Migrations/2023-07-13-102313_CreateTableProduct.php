<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'category_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'type' => [
                'type'       => 'ENUM',
                'constraint' => ['digital', 'physical'],
                'default'    => 'physical',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            // price will be managed at the time of sale, and sub product details
            // 'price' => [
            //     'type' => 'DECIMAL',
            //     'constraint' => '10,2',
            //     'unsigned' => true,
            // ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('category_id', 'product_category', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
