<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaArtikelController extends Controller
{
    public function index()
    {
        return view('berita-artikel');
    }
}
