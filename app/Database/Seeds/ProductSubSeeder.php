<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSubSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'article_number' => 'ABC123',
                'graduate_prices' => json_encode([
                    ['quantity' => 15, 'price' => 10.99],
                    ['quantity' => 5, 'price' => 9.99],
                    ['quantity' => 10, 'price' => 8.99],
                ]),
                'pictures' => json_encode([
                    'https://example.com/image1.jpg',
                    'https://example.com/image2.jpg',
                    'https://example.com/image3.jpg',
                ]),
                'product_id' => 1, // Reference to the products table, assuming the product with ID 1 exists
            ],
            [
                'article_number' => 'DEF456',
                'graduate_prices' => json_encode([
                    ['quantity' => 10, 'price' => 15.99],
                    ['quantity' => 3, 'price' => 14.99],
                    ['quantity' => 6, 'price' => 13.99],
                ]),
                'pictures' => json_encode([
                    'https://example.com/image4.jpg',
                    'https://example.com/image5.jpg',
                ]),
                'product_id' => 2, // Reference to the products table, assuming the product with ID 2 exists
            ],
            // Add more seed data entries as needed
        ];

        $this->db->table('product_sub_details')->insertBatch($data);
    }
}
