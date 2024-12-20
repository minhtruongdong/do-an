<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
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
        $categories = Category::with(['products' => function ($query) {
            $query->orderBy('created_at', 'DESC')->take(5); // Lấy 5 sản phẩm mới nhất cho mỗi danh mục
        }])->where('parent_id', 0)->get();
        // dd($categories);

        $product_detail = Product::all();

        return view('client.pages.product.productdetail',[
            'id'=> $id,
            'product_detail' => $product_detail,
            'categories'=> $categories
        ]);

    }
}