<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TokopaediController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $rendang = DB::table('products')->where('name_product', 'like', '%' . 'adem'.'%' );
        $products = DB::table('products')->latest()->simplePaginate(5);

        return view('home', [
                    "title" => "Home",
                    "category" => Category::all(),
                    "products" =>$products,
                    // "discount" => $rendang
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
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
