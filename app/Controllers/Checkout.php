<?php

namespace App\Controllers;

class Checkout extends BaseController
{
  public $state = 1;
    public function index()
    {

      if ($this->request->getMethod() === 'post') {
        $this->state += 1;
      }

      return view('Pages/CheckoutView', [
        'state' => $this->state
      ]);
    }
}
