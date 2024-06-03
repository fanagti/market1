<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        return view('cart');
    }

    public function cartStore(Request $request)
    {
        
        $product = Product::where('id',$request->id_product)->first();
        $total_subtotal=$request->quantity*$product->price;
        $validationTransaction = Transaction::where('user_id', Auth::user()->id )->where('status', 'belum lunas')->first();

        if(empty($validationTransaction)){
            Transaction::create([
                'user_id' => Auth::user()->id,
                'date' => now(),
                'total' => $total_subtotal,
                'status' => 'belum lunas'
            ]);
        }else{
            $validationTransaction->total += $total_subtotal;
        }

    }
}
