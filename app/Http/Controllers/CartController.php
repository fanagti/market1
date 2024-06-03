<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaction;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        return view('cart', [
            'product'=> Product::first(),
            'countCarts' => Transaction::countCarts()
        ]);
    }

    public function cartStore(Request $request)
    {
        
        if(!Auth::user()){
            return redirect('sesi/login');
        };

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
            $validationTransaction->update();
        }

        DetailTransaction::create([
            'product_id' => $request->id_product,
            'transaction_id' => $validationTransaction->id,
            'quantity' => $request->quantity,
            'price' => $product->price,
            'subtotal' =>  $request->quantity*$product->price
        ]);

        return redirect()->back();
    }
}
