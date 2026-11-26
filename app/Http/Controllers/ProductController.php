<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pest\Support\View;

class ProductController extends Controller
{
    public function index(){
        $products = [
            ['nama' => 'Sari Roti', 'stok' => 1],
            ['nama' => 'Beng-Beng', 'stok' => 3],
            ['nama' => 'Indomie', 'stok' => 0],
            ['nama' => 'Nutrisari', 'stok' => 5]
        ];

        return View('product.index', ['products' => $products]);
        //return view('product.index', compact('products'));
    }

    public function show(){
        $nama = "Roti";
        $harga = 13000;
        $stok = 0;

        return view('product.show', [
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $stok
        ]);
    }
}
