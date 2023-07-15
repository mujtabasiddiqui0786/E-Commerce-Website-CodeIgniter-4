<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductSubDetailsModel extends Model
{
    protected $table = 'product_sub_details';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'product_id',
        'article_number',
        'graduate_prices',
        'pictures',
        'thumbnail',
        'default_picture'
    ];

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}
