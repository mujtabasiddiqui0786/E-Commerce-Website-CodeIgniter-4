<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductSalesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sale_start_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'sale_end_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'sale_price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => true,
            ],
            'sale_product_limit' => [
                'type'     => 'INT',
                'unsigned' => true,
                'null'     => true,
            ],
            'sale_status' => [
                'type'       => 'ENUM',
                'constraint' => ['upcoming', 'active', 'closed', 'sold'],
                'default'    => 'upcoming',
            ],
            'sale_created_by' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'product_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('sale_created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('product_sales');
    }

    public function down()
    {
        $this->forge->dropTable('product_sales');
    }
}
