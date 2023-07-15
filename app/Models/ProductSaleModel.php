<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductSaleModel extends Model
{
    protected $table = 'product_sales';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'product_id',
        'user_id',
        'sale_start_date',
        'sale_end_date',
        'sale_price',
        'sale_product_limit',
        'sale_status',
        'sale_created_by',
        'created_at',
    ];

    protected $useTimestamps = true;

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id');
    }
}
