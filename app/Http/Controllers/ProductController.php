<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Policies\ProductPolicy;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()

    {
        $products = Product::latest();

        if(request('search')){
            $products->where('name_product', 'like', '%' . request('search').'%' );
        }

        return view('product', [
            "title" => "Product",
            'products' => $products->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        // return view('kategori', [
        //     "title" => "Produk Pilihan",
        //     "produk" => Product::find($slug)
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
