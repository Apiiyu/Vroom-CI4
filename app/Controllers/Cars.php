<?php

namespace App\Controllers;

class Cars extends BaseController
{
    public function detail($id)
    {
      return view('Pages/CarsDetailView');
    }
}
