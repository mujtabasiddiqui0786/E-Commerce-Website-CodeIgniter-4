<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'category_id',
        'name',
        'slug',
        'type',
        'description',
        'created_at',
        'updated_at'
    ];

    public function subDetails()
    {
        return $this->hasOne(ProductSubDetailsModel::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }
}
