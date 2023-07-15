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
                    'images/products/1/1.jpg',
                    'images/products/1/2.jpg',
                    'images/products/1/3.jpg',
                    'images/products/1/4.jpg',
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
                    'images/products/2/1.jpg',
                    'images/products/2/2.jpg',
                    'images/products/3/2.jpg',
                ]),
                'product_id' => 2, // Reference to the products table, assuming the product with ID 2 exists
            ],
            [
                'article_number' => 'GHI654',
                'graduate_prices' => json_encode([
                    ['quantity' => 10, 'price' => 15.99],
                    ['quantity' => 3, 'price' => 14.99],
                    ['quantity' => 6, 'price' => 13.99],
                ]),
                'pictures' => json_encode([
                    'images/products/3/1.jpg',
                    'images/products/3/2.jpg',
                ]),
                'product_id' => 3, // Reference to the products table, assuming the product with ID 2 exists
            ],
            [
                'article_number' => 'GHI654',
                'graduate_prices' => json_encode([
                    ['quantity' => 10, 'price' => 15.99],
                    ['quantity' => 3, 'price' => 14.99],
                    ['quantity' => 6, 'price' => 13.99],
                ]),
                'pictures' => json_encode([
                    'images/products/4/1.jpg',
                ]),
                'product_id' => 4, // Reference to the products table, assuming the product with ID 2 exists
            ],
            [
                'article_number' => 'GHI654',
                'graduate_prices' => json_encode([
                    ['quantity' => 10, 'price' => 15.99],
                    ['quantity' => 3, 'price' => 14.99],
                    ['quantity' => 6, 'price' => 13.99],
                ]),
                'pictures' => json_encode([
                    'images/products/5/1.jpg',
                    'images/products/5/2.jpg',
                ]),
                'product_id' => 5, // Reference to the products table, assuming the product with ID 2 exists
            ],
            // Add more seed data entries as needed
        ];

        $this->db->table('product_sub_details')->insertBatch($data);
    }
}
