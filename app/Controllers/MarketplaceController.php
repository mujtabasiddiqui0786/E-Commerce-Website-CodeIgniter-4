<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MarketplaceController extends BaseController
{
    public function index()
    {
        $productModel = new \App\Models\ProductModel();
        $products = $productModel
                            ->select('products.id, products.name, products.description, product_sub_details.pictures, product_sales.sale_price')
                            ->join('product_sub_details', 'products.id = product_sub_details.product_id', 'left')
                            ->join('product_sales', 'products.id = product_sales.product_id', 'left')->findAll();
        
        echo view('_includes/header');
        echo view('marketplace', ['products' => $products]);
        echo view('_includes/footer');
        return;
    }
}
