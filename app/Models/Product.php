<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
   
    protected $table = 'products';

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function product_image(): HasMany
    {
        return $this->hasMany(ProductImages::class);
    }
    public function getProductsByCategory($categoryId)
    {
        $category = Category::find($categoryId);
        $products = $category->products; // Giả sử mỗi category có các sản phẩm liên quan
    
        $productsArray = $products->map(function($product) {
            return [
                'name' => $product->name,
                'image' => asset('images/' . $product->image), // Trả về đường dẫn hợp lệ cho ảnh
            ];
        });
    
        return response()->json(['products' => $productsArray]);
    }
    
    
}
