<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(Request $request){
        $kategori = Kategori::all();
        $prices = Product::all();
        return view('price', compact('kategori','prices'));
    }
}
