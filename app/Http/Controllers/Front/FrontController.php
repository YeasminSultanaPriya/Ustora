<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $product;
    public function home(){
        return view('front.home.home', [
            'products' => Product::where('status',1)->latest()->take(3)->get()
        ]);
    }
    public function productDetails($id){
        $this->product = Product::find($id);
        return view('front.product.details',[
            'product' => $this->product
        ]);
    }
}
