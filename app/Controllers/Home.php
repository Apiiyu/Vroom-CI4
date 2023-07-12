<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Home extends BaseController
{
    public function index()
    {
        $productsModel = new ProductsModel();
        
        try {
            $listProducts = $productsModel->findAll();
            
            // Set list products into global variables
            $GLOBALS['listProducts'] = $listProducts;
            
            return view('Pages/IndexView', [
                'listProducts' => $listProducts
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
