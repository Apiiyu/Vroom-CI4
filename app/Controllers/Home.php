<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Home extends BaseController
{
    public function index()
    {
        $productsModel = new ProductsModel();
        $listProducts = $productsModel->findAll();

        return view('Pages/IndexView', [
            'listProducts' => $listProducts
        ]);
    }
}
