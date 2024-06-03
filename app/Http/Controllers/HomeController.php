<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home',[
            'products' => Product::all()
        ]);
        // return view('home');
    }
    public function admin() {
        // return view('home',[
        //     'products' => Product::all()
        // ]);
        return view('home-admin');
    }
    public function detail(Product $product)
    {
        return view("detail-product",[
            "product" => $product
        ]);
    }
}
