<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSalesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'sale_start_date' => '2023-07-01 00:00:00',
                'sale_end_date' => '2023-07-15 23:59:59',
                'sale_price' => 50.99,
                'sale_product_limit' => 10,
                'sale_status' => 'active',
                'sale_created_by' => 1, // Reference to the user who created the sale, assuming the user with ID 1 exists
                'product_id' => 1, // Reference to the product with ID 1, assuming the product exists
                'created_at' => date('Y-m-d H:i:s'), // Current date and time
            ],
            [
                'sale_start_date' => '2023-07-10 00:00:00',
                'sale_end_date' => '2023-07-20 23:59:59',
                'sale_price' => 19.99,
                'sale_product_limit' => 20,
                'sale_status' => 'upcoming',
                'sale_created_by' => 1, // Reference to the user who created the sale, assuming the user with ID 1 exists
                'product_id' => 2, // Reference to the product with ID 2, assuming the product exists
                'created_at' => date('Y-m-d H:i:s'), // Current date and time
            ],
            // Add more seed data entries as needed
        ];

        $this->db->table('product_sales')->insertBatch($data);
    }
}
