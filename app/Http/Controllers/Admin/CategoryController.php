<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categories = Category::all();
        return view('admin.modules.category.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories = Category::select('id','name','parent_id')->get();

        return view('admin.modules.category.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $category = new Category();

        // tên cột trong database = tên name trong input
        $category->name = $request->name;
        $category->status = $request->status;
        $file = $request->file('image');
        
        $fileName = time(). '-' . $file->getClientOriginalName() ;   
        $file->move(public_path('images/category-images/'), $fileName);
        $category->image = $fileName;
        $category->save();
 
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $category = Category::findOrFail($id);

        $categories = Category::select('id','name','parent_id')->get();

        // if($category==null){
        //     abort(404); 
        // }
        
        return view('admin.modules.category.edit', [
            'id' => $category->id,
            'category' => $category,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $category = Category::findOrFail($id);

        // if($category==null){
        //     abort(404);
        // }

        $category ->name = $request->name;
        $category->status = $request->status;
        $file = $request->file('image');
        
        $fileName = time(). '-' . $file->getClientOriginalName() ;   
        $file->move(public_path('images/category-images/'), $fileName);
        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);

        // if($category==null){
        //     abort(404);
        // }

        $category->delete();
        return redirect()->route('admin.category.index')->with('success','Delete Category Successfully');
    }

    public function getProductsByCategory($id)
    {
        // Lấy category theo ID
        $category = Category::find($id);
        
        // Kiểm tra nếu category tồn tại
        if (!$category) {
            return response()->json(['products' => []]);
        }

        // Lấy các sản phẩm trong category đó
        $products = Product::where('category_id', $id)->get();
        
        // Trả về dữ liệu sản phẩm dưới dạng JSON
        return response()->json(['products' => $products]);
    }
}


