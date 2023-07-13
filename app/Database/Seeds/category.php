<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'description' => 'Explore a wide range of electronic devices.',
            ],
            [
                'name' => 'Clothing',
                'slug' => 'clothing',
                'description' => 'Find trendy and fashionable clothing items.',
            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'description' => 'Discover a vast collection of books in various genres.',
            ],
        ];

        $this->db->table('product_category')->insertBatch($data);
    }
}