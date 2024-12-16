<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function checkout(){
        return view('client.pages.cart.checkout');
    }


    public function cart(){
        return view('client.pages.cart.cartpage');
    }
    
    public function addToCart($id){
        
    }

}