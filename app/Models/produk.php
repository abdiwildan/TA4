<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class produk 
{
    private static $produk =[
        
            [
                "img" => "Kategori1.png",
                "nama_produk" => "Minyak",
                "harga" => "Rp. 100.000"
        
            ],
            [
                "img" =>"kategori2.png",
                "nama_produk" => "Makanan",
                "harga" => "Rp. 200.000"
        
            ]
        
            ];

    public static function all(){
        return collect(self::$produk);
    }
            
}
