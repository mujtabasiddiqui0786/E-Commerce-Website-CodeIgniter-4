<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MarketplaceController extends BaseController
{
    public function index()
    {
        $productModel = new \App\Models\ProductModel();
        $products = $productModel->findAll();

        echo view('_includes/header');
        echo view('marketplace', ['products' => $products]);
        echo view('_includes/footer');
        return;
    }
}
