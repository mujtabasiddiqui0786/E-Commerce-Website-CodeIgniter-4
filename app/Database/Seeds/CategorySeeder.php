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
                'image_url' => 'images/category/electronic.jpeg',
            ],
            [
                'name' => 'Clothing',
                'slug' => 'clothing',
                'description' => 'Find trendy and fashionable clothing items.',
                'image_url' => 'images/category/clothing.jpg',
            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'description' => 'Discover a vast collection of books in various genres.',
                'image_url' => 'images/category/books.jpg',
            ],
        ];

        $this->db->table('product_category')->insertBatch($data);
    }
}