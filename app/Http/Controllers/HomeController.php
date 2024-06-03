<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaction;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index() {
        return 
        view('home',[
            'products' => Product::all(),
            'countCarts' => Transaction::countCarts()
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
            "product" => $product,
            'countCarts' => Transaction::countCarts()
        ]);
    }
}
