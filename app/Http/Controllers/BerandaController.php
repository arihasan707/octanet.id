<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $kategori = Kategori::with('products')->get();
        $banners = Banner::select(
            'img',
            'link'
        )
            ->latest()->get();

        return view('beranda', compact('banners','kategori'));
    }
}
