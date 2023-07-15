<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductSubDetailsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'article_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'graduate_prices' => [
                'type' => 'JSON',
                'null' => true,
            ],
            'pictures' => [
                'type' => 'JSON',
                'null' => true,
            ],
            'thumbnail' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'default_picture' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('product_sub_details');
    }

    public function down()
    {
        $this->forge->dropTable('product_sub_details');

    }
}
