<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImageUrlToCategory extends Migration
{
    public function up()
    {
        $this->forge->addColumn('product_category', [
            'image_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('product_category', 'image_url');
    }
}
