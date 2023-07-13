<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_id' => 1,
                'name' => 'Laptop',
                'slug' => 'laptop',
                'description' => 'Powerful laptop for all your computing needs.',
                'price' => 999.99,
            ],
            [
                'category_id' => 1,
                'name' => 'Smartphone',
                'slug' => 'smartphone',
                'description' => 'Cutting-edge smartphone with advanced features.',
                'price' => 699.99,
            ],
            [
                'category_id' => 2,
                'name' => 'T-Shirt',
                'slug' => 't-shirt',
                'description' => 'Comfortable and stylish t-shirt for everyday wear.',
                'price' => 19.99,
            ],
            [
                'category_id' => 2,
                'name' => 'Jeans',
                'slug' => 'jeans',
                'description' => 'Classic denim jeans for a trendy look.',
                'price' => 49.99,
            ],
            [
                'category_id' => 3,
                'name' => 'Novel',
                'slug' => 'novel',
                'description' => 'Best-selling novel by a renowned author.',
                'price' => 29.99,
            ],
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
