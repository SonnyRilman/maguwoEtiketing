<?php
namespace App\Controllers;

class CustomerController extends BaseController
{
    public function index()
    {
        return view('customer/dashboard'); // Halaman dashboard customer
    }
}
