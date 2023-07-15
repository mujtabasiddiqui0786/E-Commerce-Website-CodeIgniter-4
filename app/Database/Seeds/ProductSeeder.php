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
                'type' => 'physical',
            ],
            [
                'category_id' => 1,
                'name' => 'Smartphone',
                'slug' => 'smartphone',
                'type' => 'physical',
                'description' => 'Cutting-edge smartphone with advanced features.',
            ],
            [
                'category_id' => 2,
                'name' => 'T-Shirt',
                'slug' => 't-shirt',
                'type' => 'physical',
                'description' => 'Comfortable and stylish t-shirt for everyday wear.',
            ],
            [
                'category_id' => 2,
                'name' => 'Jeans',
                'slug' => 'jeans',
                'type' => 'physical',
                'description' => 'Classic denim jeans for a trendy look.',
            ],
            [
                'category_id' => 3,
                'name' => 'Novel',
                'slug' => 'novel',
                'type' => 'digital',
                'description' => 'Best-selling novel by author.',
            ],
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
