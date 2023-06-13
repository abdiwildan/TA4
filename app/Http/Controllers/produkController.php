<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;



class produkController extends Controller
{
    public function index(){
        return view('produk', [
            "title" => "Produk",
            "produk" => produk::all()
        ]);
    }

    public function show($slug){
        return view('kategori', [
            "title" => "Produk Pilihan",
            "produk" => produk::find($slug)
        ]);
    }
}
