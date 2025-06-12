<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $banners = Banner::select(
            'img_desktop',
            'img_mobile',
            'link'
        )
            ->latest()->get();

        return view('beranda', compact('banners'));
    }
}
