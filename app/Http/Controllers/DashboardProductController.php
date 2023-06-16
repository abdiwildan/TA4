<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard/product/index',[
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            "name_product" => ['required', 'max:255'],
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|required|file|max:1024'
        ]);

        $validatedData['image']= $request->file('image')->store('product-images');

        Product::create($validatedData);
        return redirect('/dashboard/products')->with('success', 'New Product has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('dashboard.product.show',[
            'product' => $product,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit',[
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            "name_product" => ['required', 'max:255'],
            'category_id' => 'required',
            'price' => 'required'
        ];

        if($request->slug != $product->slug){
            $rules['slug'] = 'required|unique:products';
        }

        $validatedData = $request ->validate($rules);

        Product::where('id',  $product->id)
            ->update($validatedData);

        return redirect('/dashboard/products')->with('success', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/dashboard/products')->with('success', 'Product has been deleted');
    }

    public function checkSlug(Request $request){
        
        $slug = SlugService::createSlug(Post::class, 'slug', $request->name_produk);
        return response()->json(['slug' =>$slug]);
    }
}
