<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productController = new ProductController(); // Create an instance of the ProductController
        $countProduct = $productController->getProductCount(); // Call the method to get the count of products
        return view('dashboard', compact('countProduct'));
        //return view('dashboard');
    }

}
