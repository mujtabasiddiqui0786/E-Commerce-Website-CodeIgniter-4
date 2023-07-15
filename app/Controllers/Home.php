<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $productModel = new \App\Models\ProductModel();
        $categoryModel = new \App\Models\CategoryModel();
        $products = $productModel
                            ->select('products.id, products.name, products.description, product_sub_details.pictures, product_sales.sale_price')
                            ->join('product_sub_details', 'products.id = product_sub_details.product_id', 'left')
                            ->join('product_sales', 'products.id = product_sales.product_id', 'left')->findAll();
        
        $categories = $categoryModel->findAll();
        echo view('_includes/header');
        echo view('home', ['products' => $products, 'categories' => $categories ]);
        echo view('_includes/footer');
        return;
    }
}
