<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'product_category';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'slug',
        'description'
    ];

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'category_id');
    }
}
