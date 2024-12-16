<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    public function category($id){
        return view('client.pages.product.shop',[
            'id' => $id
        ]
    );
    }

    public function productdetail($id){
        return view('client.pages.product.productdetail',[
            'id'=> $id
        ]);
    }
}
